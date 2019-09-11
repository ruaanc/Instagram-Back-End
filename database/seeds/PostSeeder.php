<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'author'            => 'Ruan Carlos', 
            'place'             => 'Rio Tinto',
            'description'       => 'Vida boa !',
            'hashtags'          => '#life #saude #paz',
            'image'             => 'https://pipa.com.br/pipa-backend/media/filer_public/5a/7b/5a7b321e-0eca-4535-8be1-c208f4bb0763/praia-do-centro-pipa-capa.jpg',
            'like'              => '0'
        ]);
    }
}
