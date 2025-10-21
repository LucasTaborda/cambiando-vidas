<?php

namespace Database\Seeders;

use App\Models\MenuLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuLinksData = [
            ['name' => 'Adoptar', 'url' => '#', 'weight' => 0],
            ['name' => 'Donar', 'url' => '/donaciones', 'weight' => 10],
            ['name' => 'Vidas Cambiadas', 'url' => '/gallery', 'weight' => 20],
            ['name' => 'Maltrato animal', 'url' => '/maltrato-animal', 'weight' => 30],
            ['name' => 'Sobre nosotros', 'url' => '/sobre-nosotros', 'weight' => 40],
        ];

        foreach ($menuLinksData as $data) {
            $menuLink = new MenuLink();
            $menuLink->name = $data['name'];
            $menuLink->url = $data['url'];
            $menuLink->save();
        }
    }
}
