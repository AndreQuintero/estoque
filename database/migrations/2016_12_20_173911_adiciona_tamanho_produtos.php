<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function($table){  // tabela produtos 
        $table->string('tamanho',100); // da o nome da coluna que vc quer na tabela produtos , 100 caracteres   
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function($table){  // tabela produtos 
        $table->dropColumn('tamanho');
         });  
    }
}
