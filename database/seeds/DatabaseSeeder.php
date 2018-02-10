<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void                  essa classe já deixa valores pré-programados no banco
     */
    public function run()
    {
        //$this->call(CategoriaTableSeeder::class);
    }
}
    class CategoriaTableSeeder extends Seeder
    {
        public function run(){  // roda o que vc quiser no banco de dados
            
            Categoria::create(['nome' => 'Eletrodometisco']);
            Categoria::create(['nome' => 'Eletrônico']);
            Categoria::create(['nome' => 'Brinquedo']);
            Categoria::create(['nome' => 'Esportivo']);
            Categoria::create(['nome' => 'Rústico']);   //nome da classe Categoria
        }
    }
?>