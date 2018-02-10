<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //por padrão, o eloquent sabe o nome da tabela do banco de dados que usamos sendo igual o nome da classe só que em letra minuscula e no plural, no caso o nome da tabela do banco produtos
    
    //protected $table = 'nome da tabela'; caso não fosse o nome da tabela
    
    public $timestamps = false; // declara que não quer guardar as informações de tempo updated_at`, `created_at`
    
    protected $fillable = array('nome','valor','quantidade','descricao','categoria_id','tamanho'); // passa o que pode ser mudado pelo usuario
    
    public function categoria(){
       return $this->belongsTo('App\Categoria'); // tal produto pertence a alguma categoria e amesma coisa lá na classe categoria
    }
}
