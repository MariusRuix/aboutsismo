<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Page::class)->create(['title' => 'Comó ayudar']);
        factory(Page::class)->create(['title' => 'Mapa de ayuda']);
    }
}