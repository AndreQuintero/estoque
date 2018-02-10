@extends('principal')

@section('conteudo')
    <h1> Detalhes do Produto <?= $p->nome ?> </h1>
   
    <ul>
     <li>Descrição:    {{$p->descricao or 'Não tem descrição'}}</li>  <!-- com o Blade você pode declarar  com '{{}}' ao invés do jeito tradicional. como na primeira variavel -->
     <li>Valor:    <?= $p->valor ?></li>
     <li>Quantidade:    <?= $p->quantidade ?></li>
    </ul>
@stop