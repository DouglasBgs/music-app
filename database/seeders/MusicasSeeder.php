<?php

namespace Database\Seeders;

use App\Models\Musicas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Musicas $musicas)
    {
        $musicas::create(
            [
                'nome'      => 'bohemian rhapsody',
                'duracao'   => '00:06:07',
                'path'      => '153e8707d7fed1148951aa8e99de9afc.mp3',
                'AlbumId'   => '1',

            ]
        );
        $musicas::create(
            [
                'nome'      => 'Somebody To Love',
                'duracao'   => '00:05:10',
                'path'      => '8d117990aaebeed57c10b68c0f3a93f2.mp3',
                'AlbumId'   => '1',

            ]
        );
        $musicas::create(
            [
                'nome'      => 'Sweet Child O\' Mine',
                'duracao'   => '00:05:56',
                'path'      => '65217bcc37de8cd91e0befc570105042.mp3',
                'AlbumId'   => '2',

            ]
        );
        $musicas::create(
            [
                'nome'      => 'Paradise City',
                'duracao'   => '00:06:46',
                'path'      => '6c30527737889c445c3d82b689ad883d.mp3',
                'AlbumId'   => '2',

            ]
        );
        $musicas::create(
            [
                'nome'      => 'Você Não Sabe Amar',
                'duracao'   => '00:03:09',
                'path'      => '261230e67a37a9a01eda3958328a39a0.mp3',
                'AlbumId'   => '3',

            ]
        );
        $musicas::create(
            [
                'nome'      => 'Alma Transparente (Part. Leonardo)',
                'duracao'   => '00:03:03',
                'path'      => '65ebb866d3de11082b69bf31f99b0498.mp3',
                'AlbumId'   => '3',

            ]
        );
    }
}
