<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = new Page();
        $page->title = 'Sobre nosotros';
        $page->content = 'This is the home page';
        $page->slug = 'sobre-nosotros';
        $page->save();

        //uso factory:
        Page::factory(50)->create();
    }
}
