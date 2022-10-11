<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Solicitar',
            'last_name' => 'Solicitar',
            'slug' => Str::slug('Solicitar'),
            'icon' => 'fa-solid fa-handshake-angle',
        ]);

        Category::create([
            'name' => 'Regalos',
            'last_name' => 'Regalos (todos los regalos en general)',
            'slug' => Str::slug('Regalos'),
            'icon' => 'fa-solid fa-gift',
        ]);

        Category::create([
            'name' => 'Ayudar a otros',
            'last_name' => 'Ayuda',
            'slug' => Str::slug('Ayudar a otros'),
            'icon' => 'fa-solid fa-people-carry-box',
        ]);
        
        Category::create([
            'name' => 'Reflexiones',
            'last_name' => 'Reflexiones',
            'slug' => Str::slug('Reflexiones'),
            'icon' => 'fa-solid fa-shapes',
        ]);
    }
}
