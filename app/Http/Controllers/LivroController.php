<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Livro;

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
        
    
    
    public function index()
    {
       /* $title = 'listagem dos livros';
        $livros = $this->livro->all();
        return view ('livros/cadastro', compact('livros','title'));*/
        return view ('livros/cadastro');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'namel' => ['required', 'string', 'max:200'],
            'autor' => ['required', 'string', 'email', 'max:200'],
            'editora' => ['required', 'string', 'max:50'],
            'categoria'=> ['required', 'string', 'min:50'],
            'classificação'=> ['required', 'string', 'min:1','max:2'],
            'descricao'=> ['required', 'string', 'min:200'],
            'image'=> ['not required'],
  
        ]);
    }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function create(Request $request)
    {
        
        $user = Auth::user()->id;
        Livro::create([
            'users_id' => $user,
            'namel' => $request['namel'],
            'autor' => $request['autor'],
            'editora' => $request['editora'],
            'categoria'=> $request['categoria'],
            'classificação'=>$request['classificação'] ,
            'descricao'=>$request['descricao'],
            'image'=>$request['image'],
        ]);
        return view('livros/cadastro');
    }

    
    

}
