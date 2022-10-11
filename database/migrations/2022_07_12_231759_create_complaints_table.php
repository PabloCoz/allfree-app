->constrain<?php

use App\Models\Complaint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('status',[Complaint::PROCESANDO,Complaint::ADVERTENCIA,Complaint::EJECUTADO])->default(Complaint::PROCESANDO);
            $table->foreignId('post_id')->constrained()->nullable();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
