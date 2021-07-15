<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use DB;
use Auth;
use App\Http\Controllers\Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUpdateUser;
use Illuminate\Http\Request;


class RegisterController extends Controller
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

    use RegistersUsers;
    protected $request;
     private $repository;
    private $users;

    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $user = DB::select('select * from users');
        return view('users/mostrar_todos', [
            'user' => $user,
        ]);
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cidade'=> ['required', 'string', 'min:4'],
            'numero'=> ['required', 'string', 'min:8'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cidade'=> $data['cidade'],
            'numero'=>$data['numero'] ,
            'foto'=>$data['foto'] 
        ]);
    }
    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();
    /*
        if($request->foto('foto')->isValid()){
            $file = $request->foto->storeAs('public/users',$nameFile);
            $file = str_replace('public/','app/',$file);
            $data['foto'] = $file;
        }*/
         User::create($data);

        //foto upload
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            
            $requestFoto = $request->foto;
            
            $extension = $requestFoto->extension();

            $fotoName = md5($requestFoto->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->foto->move(public_path('imgs\users'), $fotoName);
           /* $foto = Storage::disk('public')->putFile('storage\app/public', $request->file('foto'));*/

           

            $data->foto = $fotoName;

            $data->save();
        }



    }

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
