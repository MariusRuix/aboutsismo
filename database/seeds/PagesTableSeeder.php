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
        $content = '<a class="twitter-timeline" href="https://twitter.com/Tu_InfoMX">Tweets by Tu_InfoMX</a><a class="twitter-timeline" href="https://twitter.com/locatel_mx">Tweets by locatel_mx</a>';

        factory(Page::class)->create(['title' => 'Comó ayudar']);
        factory(Page::class)->create(['title' => 'Información', 'content' => $content]);
    }
}
