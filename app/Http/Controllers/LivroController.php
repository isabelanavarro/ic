<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Livro;
use DB;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $request;
    private $repository;
    private $livro;
    

    public function __construct(Livro $livro)
    {
        $this->livro = $livro;
    }
        
    

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
   /* public function index()*/
  //  {
       /* $title = 'listagem dos livros';
        $livros = $this->livro->all();
        return view ('livros/cadastro', compact('livros','title'));*/
      //  return view ('livros/cadastro');

        
  //  } 

    
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'namel' => ['required', 'string', 'max:200'],
            'autor' => ['required', 'string', 'email', 'max:200'],
            'editora' => ['required', 'string', 'max:50'],
            'categoria'=> ['required', 'string', 'min:50'],
            'classificação'=> ['required', 'string', 'min:1','max:2'],
            'descricao'=> ['required', 'string', 'min:200'],
            'image'=> ['required'],
  
        ]);
    }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function create(StoreUpdateLivro $request)
    {
        
        $user = Auth::user()->id;
        $data = $request->all();

        if($request->file('image')->isValid()){

           $image = $request->image->store('livros');
           $data['image'] = $image;
        }

        
        Livro::create([
            'users_id' => $user,
            'namel' => $request['namel'],
            'autor' => $request['autor'],
            'editora' => $request['editora'],
            'categoria'=> $request['categoria'],
            'classificação'=>$request['classificação'] ,
            'descricao'=>$request['descricao'],
            'image'=>$data['image'],
        ]);
        return view('livros/cadastro');

        
    }

    public function index()
    {
        $livro = DB::select('select * from livros');
        return view('livros/mostrar_livros', [
            'livro' => $livro,
        ]);
    }

    public function pesquisa(Request $request)
      {
          $livro = DB::select('select * from livros where namel like "%'.$request['nome'].'%" and autor like "%'.$request['autor'].'%" and categoria like "%'.$request['categoria'].'%" and classificação like "%'.$request['classificação'].'%"');
          return view('livros/mostrar_livros', [
              'livro' => $livro,
          ]);
      }


    public function alugar($id)
    {
        $user = User::find($id);
        
        return view('livros/alugar',compact('user'));
    }
    
    public function perfil()
    {
        
        $id = Auth::user()->id;
        $livro = DB::select('select * from livros where users_id = '.$id);
        
        return view('/perfil',compact('livro'));
    }

}
