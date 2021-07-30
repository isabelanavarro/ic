<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUpdateUser;


class UsuarioController extends Controller
{
    
     /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

      
      protected $request;
       private $repository;
      private $users;

    public function edit($id){
        $user = User::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('users/alt_users',compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        $senha_usuario = DB::table('users')->where('id', $id)->value('password');
       
            User::find($id)->update([
                'name' =>  $request['name'],
                'cidade' =>  $request['cidade'],
                'numero' =>   $request['numero'],
                /*'foto'=>$request['foto']*/
            ]);

            $user = DB::select('select * from users');
        return view('users/mostrar_todos', [
            'user' => $user,
        ]);
        
    }


    


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users/user_area', ['user' => $user]);

    }

    public function delete($id)
    {
        
        $user = User::findOrFail($id);
        return view('users/del_user', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return "Usuário excluído com sucesso!";
    }
}
