<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Validator;
use App\Repositories\InviteRepository;
use App\Repositories\UserClienteRepository;
use App\Http\Services\RegisterService;

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

    use RegistersUsers;

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
    public function __construct(RegisterService $registerService)
    {
        $this->middleware('guest');
        $this->registerService = $registerService;
        
    }

    public function showRegistrationForm()
    {
        return redirect()->route('auth.formRegister');
        //        $franquias = Franquia::select('id', DB::raw('concat(franquias.cidade,"-", franquias.uf) as descricao'))
        //            ->where('status','=','1')
        //            ->orderBy('descricao')
        //            ->pluck('descricao', 'id');
        //
        //        return view('auth.register', compact('franquias'));
    }
    
    public function formRegistrarion($id)
    {
        try{
            $this->registerService->verficarStatus($id);
            return view('auth.register', compact('id'));        
        }catch(\Exception $e){            
            flash("erro")->error();
            return redirect()->route('login');
        }
        
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        try{
            $cliente_id = $this->registerService->updateStatusInvite($data['id']);

            $user       = $this->registerService->storeUser($data);
    
            $this->registerService->storeUserCliente([
                'user_id' => $user->id,
                'cliente_id' => $cliente_id
            ]);

            flash('Usuario cadatrado com sucesso.')->success();
            return $user;
            
        }catch(\Exception $e){
            flash($e->getMessage())->error();
            return redirect()->back();
        }
    }
}
