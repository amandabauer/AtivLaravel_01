<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
        public function run(){
$this->call(ProdutosTableSeeder::class);
}
        // \App\Models\User::factory(10)->create();
    }
    class ProdutosTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into produtos (descricao) values (?)', array('TV 80'));
        DB::insert('insert into produtos (descricao) values (?)', array('PC'));
        DB::insert('insert into produtos (descricao) values (?)', array('Livro'));
        DB::insert('insert into produtos (descricao) values (?)', array('Celular'));
    }
}

