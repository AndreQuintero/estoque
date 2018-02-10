<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth; // método de autenticação de usuários
class LoginController extends Controller
{
    public function form(){
      
        return view('form_login');
}

    public function logar()
    {
        $credenciais = Request::only('email','password'); //pega os dados do form
        
        if(Auth::attempt($credenciais)){ // vê no banco se existe e loga
            return 'logado com sucesso';
        }else{
            return 'usuario ou senha incorreto';
        }
        
        
    }
}
?>
