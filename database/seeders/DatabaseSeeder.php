<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Storage::deleteDirectory('images');
        Storage::makeDirectory('images');
        Storage::deleteDirectory('resources');
        Storage::makeDirectory('resources');
        
        /* $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class); */
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LabelSeeder::class);
        $this->call(PostSeeder::class);
    }
}
