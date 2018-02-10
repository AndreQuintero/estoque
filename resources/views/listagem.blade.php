@extends('principal')

@section('conteudo')


  @if(empty($produtos))
<div class="alert alert-danger"> Você não tem nenhum produto cadastrado. </div>
@else


    <h1> Listagem de Produtos </h1>
    
    <table class ="table  table-striped table-bordered table-hover">
        <?php foreach($produtos as $p): ?> <!-- pode se usar @     foreach com o blade -->
    <tr class = "{{$p->quantidade <=1 ? 'danger' : ''}}">  <!-- condição usando ? : abrindo usando o blade, danger é uma classe do bootstrap -->
    <td>Nome:<?= $p->nome ?></td>               <!-- puxa a informação do banco para a tabela -->
    <td>Valor:<?= $p->valor ?></td>               
    <td>Quantidade:<?= $p->quantidade ?></td> 
     
     <td>Tamanho:<?= $p->tamanho ?></td>    
    <td> <a href="/produtos/mostra/<?= $p->id ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>  
     <td> <a href="/produtos/remove/<?= $p->id ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>        
    </tr>
        <?php endforeach ?> <!-- @   endforeach -->
    </table>
    @endif 
<h4> <span class="label label-danger pull-right">    Um ou menos itens no estoque </span></h4>

    @if(old('nome'))
  <div class="alert alert-success"> <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado. </div>
    @endif  <!--se a variavel nome existe, no caso, qnd vc adiciona um produto novo// old- acha o parametro nome da requisição antiga, no caso a de adicionar produtos v     <td>Categoria:  $p->categoria->nome </td>    -->
@stop



