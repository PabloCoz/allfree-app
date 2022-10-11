<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "Pablo Coz Ramos";
        $user = User::create([
            'name' => $name,
            'country' => 'Peru',
            'email' => 'pablo@udh.com',
            'password' => bcrypt('123456789'),
            'phone' => '+51942830611',
            'slug' => Str::slug($name)
        ]);
        User::factory(10)->create();
    }
}
