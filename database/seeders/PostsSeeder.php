<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'titulo' => 'Primer Titulo',
                'extracto' => 'Hola 1',
                'contenido' => 'contenido 1',
                'caducable' => false,
                'comentable' => true,
                'acceso' => 'publico',
                'user_id' => '1'
            ],
            [
                'titulo' => 'Segundo Titulo',
                'extracto' => 'Hola 2',
                'contenido' => 'contenido 2',
                'caducable' => false,
                'comentable' => true,
                'acceso' => 'privado',
                'user_id' => '2'
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}

