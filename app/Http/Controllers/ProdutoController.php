<?php namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Request; 
    use App\Produto; // utilizado para usar os métodos do eloquent
    use Validator;
    use App\Http\Requests\ProdutoRequest;
    use Auth;
    use App\Categoria;
    class ProdutoController extends Controller{  // toda classe do controller tem que herdar de outra classe do laravel   
        
        
        public function __construct()
	{
		$this->middleware('autorizador'); // chama o middleware que criamos para todas as rotas
	}
	
        
        public function lista()
        {   
            //ver middleware
           
            //DB:select("select * from produtos")
            $produtos = Produto::all(); // Produto é o modelo e all é a classe herdada do eloquent, lista tds os produtos do banco
            
            
            return view('listagem')->with('produtos', $produtos);  //(o primeiro produtos é o nome da variavel do view, o segundo é a variavel daqui) 
        }   //passa o array para a viewe listagem
        
        
        public function mostra()
        {   
            // voce pode colocar a variavel id no parametro e ocultar ela dps no codigo
        
            
           // $id = Request::input('id'); // Request pega os dados do url(no caso do método get)// pode ter um segundo valor, no caso um default, caso a pessoa passe o link sem nenhum parametro, ira mostrar o valor default, como se fosse a pag index
           $id = Request::route('id'); // aqui ao invés de pegar o GET, ele pega a própria url, no caso a variavel dentro do route tem que ser igual ao do arquivo route  
            
            //$produto = DB::select('SELECT * FROM produtos WHERE id =?',[$id]);
            $produto = Produto::find($id);
            //return view('detalhes')->with('p', $produto[0]);
            return view('detalhes')->with('p', $produto);
        }
         public function remove()
        {
            $id = Request::route('id');
            $produto = Produto::find($id); // acha o produto no banco de dados
            $produto->delete();
            return redirect('/produtos'); 
        }
        
        
        public function novo()
        {
            
            return view('formulario')->with('categorias', Categoria::all());
        }
        
          public function adiciona(ProdutoRequest $request)
        {     
              
             
              
              $params = $request->all(); // ao invés de ficar passando parametro por parametro, porem da erro de tokien, então vc deve ir na classe produto e adicionar os nomes dos elementos dos campos do form
              $produto = new Produto($params); //vai criar um array com tds os dados para o eloquent inserir no banco
             $produto->save();  
               return redirect('/produtos')->withInput();  // após inserir, ele redireciona pro método da lista, withinput mantém os parametros da requisição anterior para a página de produtos (adiciona(nome) -> lista(nome) )
               // poderia ser return redirect() ->action('ProdutoController@lista') ->withInput(Request::only('nome'));
             
              
              
              
              /* $nome = Request::input('nome');
              $valor = Request::input('valor');
              $quantidade = Request::input('quantidade');  //pega os valores do form
              $descricao = Request::input('descricao');
              */
              
             /* $produto->nome = Request::input('nome');
              $produto->valor = Request::input('valor');
              $produto->quantidade = Request::input('quantidade');  //pega os valores do form
              $produto->descricao = Request::input('descricao');
              */
            //  DB::insert('INSERT INTO produtos(nome,valor,quantidade,descricao)VALUES(?,?,?,?)', array($nome,$valor,$quantidade,$descricao));
              
            }
       
    }
    
?>