<?php

namespace Database\Seeders;

use App\Models\Albuns;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Albuns $album)
    {
        $album::create(
            [
                'nome'      => 'Bohemian Rhapsody',
                'artista'   => 'Queen',
                'genero'    => 'Rock',
                'preco'     => '100',
                'foto'      => '6f1a1cb8eb087985b8f4a7a0b26102e5.jpg'
            ]
        );
        $album::create(
            [
                'nome'      => 'Appetite For Destruction',
                'artista'   => 'Guns N\' Roses',
                'genero'    => 'Rock',
                'preco'     => '120',
                'foto'      => 'e1819fa2f17e0f1acf664b729cc2e767.jpg'
            ]
        );
        $album::create(
            [
                'nome'      => 'Chico Rey & Paraná, Vol. 16 (Ao Vivo)',
                'artista'   => 'Chico Rey & Paraná',
                'genero'    => 'Sertanejo',
                'preco'     => '90',
                'foto'      => '8f413bdeb29fbb2aefa9f1d311324803.jpg'
            ]
        );
    }
}
