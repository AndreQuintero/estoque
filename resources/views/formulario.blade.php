@extends('principal')

@section('conteudo')
<ul class="nav navbar-nav navbar-right"> <li><a href="/produtos">Listagem</a></li> <li><a href="/produtos/novo">Novo</a></li> </ul>
</br>
</br>
@if (count($errors) > 0) 
<div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul>  
</div> 
@endif







<form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class ="form-group">

<label>Nome do Produto:</label>
<input class ="form-control" type="text" name="nome">

<label>Valor do Produto:</label>
<input class ="form-control" type="text" name="valor">

<label>Quantidade do Produto:</label>
<input class ="form-control" type="text" name="quantidade">

<label>Categoria:</label>
<select class ="form-control" name="categoria_id">
<!--categorias veio do controller no metodo novo -->
@foreach($categorias as $c)        
<option value="{{$c->id}}">{{$c->nome}}</option>
@endforeach
</select>    

<label>Tamanho do Produto:</label>
<input class ="form-control" type="text" name="tamanho">

<label>Descrição do Produto:</label>
<textarea class ="form-control" name="descricao"></textarea>
        </br>
<button class ="btn btn-primary" type="submit">Cadastrar</button>
    </div>        
</form>

@stop