<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Models\Funcionario;
use App\Models\Motorista;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'out']]);
    }

    public function index()
    {
        Auth::logout();
        return view('site.pages.login.login-cpf');
    }

    public function in(Request $request)
    {

        $user = str_replace(['.','-'],['',''],$request->input('username'));
        $password = $request->input('password');

        if (Auth::attempt(['cpf' => $user, 'data_nascimento' => $password]))
        {
            $funcionario = Funcionario::where(DB::raw('substr(cpf,1,6)'),'=',$user)->firstOrFail();
            session(['count_driver' => Motorista::where('id_funcionario','=',$funcionario->id)->count()]);
            session(['user' => $funcionario->nome]);
            session(['id_user' => $funcionario->id]);
            $partes       = explode(' ', $funcionario->nome);
            $primeiroNome = array_shift($partes);
            $ultimoNome   = array_pop($partes);

            $nome = $primeiroNome.' '.$ultimoNome;
            return redirect()->intended('services')->with('alert-sucess','Bem vindo! '.ucwords(strtolower($nome)));;
        } else {
            return redirect()->intended('login')->with('alert-danger','CPF ou ano de nascimento inválido!');
        }
    }

    public function out()
    {
        Auth::logout();
        return redirect('/');        
    }
}
