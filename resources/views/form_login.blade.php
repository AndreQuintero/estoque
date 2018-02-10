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







<form action="/login" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class ="form-group">

<label>Email:</label>
<input class ="form-control" type="text" name="email">

<label>Senha:</label>
<input class ="form-control" type="password" name="password">

<br>
<button class ="btn btn-primary" type="submit">Login</button>
    </div>        
</form>

@stop