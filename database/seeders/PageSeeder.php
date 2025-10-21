<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            ['title' => 'Sobre nosotros', 'slug' => 'sobre-nosotros', 'file' => 'about-us.html'],
            ['title' => 'Donaciones', 'slug' => 'donaciones', 'file' => 'donations.html'],
            ['title' => 'Qué hacer en caso de maltrato animal', 'slug' => 'maltrato-animal', 'file' => 'animal-cruelty.html'],

        ];

        foreach ($pages as $page) {
            $path = database_path('seeders/data/pages/' . $page['file']);
            $p = new Page();
            $p->title = $page['title'];
            $p->content = File::get($path);
            $p->slug = $page['slug'];
            $p->save();
        }
    }
}
