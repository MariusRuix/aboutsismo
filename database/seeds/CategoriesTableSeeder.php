<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            '¿Qué se necesita y dónde?',
            'Hospitales',
            'Albergues',
            'Voluntarios',
            'Falsos reportes',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
