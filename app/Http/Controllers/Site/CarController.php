<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Motorista;
use App\Models\Veiculo;
use App\Models\Funcionario;
use App\Models\Localidade;
use App\Models\Eventos_Veiculo;
use DateTime;
use App\Models\eventosVeiculo;
use App\Models\Quiz;
use App\Models\Pergunta;
use App\Models\gruposPergunta;
use App\Models\questionariosPergunta;
use Symfony\Component\Console\Input\Input;
use App\Models\eventosQuestionario;

class CarController extends Controller
{
    /*
    |---------------------------------------------------------------------------
    | Function Service "car/"
    |---------------------------------------------------------------------------
    */
    public function index()
    {
        session(['service' => 'VEÍCULO']);
        session(['page' => '']);
        return view('site.pages.services.car.index');
    }
    
    /*
    |---------------------------------------------------------------------------
    | Function Service "car/in" Or "car/out"
    |---------------------------------------------------------------------------
    */
    public function out()
    {
        if((session('count_driver'))>0){
            session(['status' => 'SAÍDA']);
            return view('site.pages.services.car.out.index');
        } else {
            session(['driverYn' => 'no']);
            return redirect()->intended('services/car/out/list/drivers');
        }
        
    }

    public function in()
    {
        session(['status' => 'ENTRADA']);
        $lists = eventosVeiculo::where('id_emissor','=',session('id_user'))->where('data_hora_entrada','=',null)->get();
        if($lists->count() > 0) {
            return view('site.pages.services.car.in.index',compact('lists'));
        } else {
            return redirect()->intended('services/car')->with('alert-information','Não existe devoluções em aberto!');
        }
    }

    public function quiz($id)
    {
        $lists = questionariosPergunta::where('situacao','=','A')->where('id_questionario','=','1')->get();
        $id_evento   = $id;
        return view('site.pages.services.car.in.quiz.index',compact('lists','id_evento'));
    }

    public function quizPost(Request $request, eventosQuestionario $eventos_questionarios)
    {
        $questions = [];

        if(isset($request->lists)){
            foreach ($request->lists as $key => $line) {
                $question = [
                    'id_evento' => $request->id_evento,
                    'id_perguntas' => $request->lists[$key]
                ];
    
                array_push($questions,$question);
                
            }
    
            $eventos_questionarios->timestamps = false;
            $eventos_questionarios->insert($questions);
        }

        eventosVeiculo::find($request->id_evento)->update(['data_hora_entrada' => now()]);

        return redirect()->route('services.car.in.finish');

    }

    public function inFinish()
    {
        return view('site.pages.services.car.in.finish.index');
    }

    /*
    |---------------------------------------------------------------------------
    | Function Service Driver "YES" or "NO"
    |---------------------------------------------------------------------------
    */
    public function driverYes()
    {
        session(['driverYn' => 'yes']);
        session(['driver' => session('user')]);
        return redirect()->intended('services/car/out/list/cars');
    }

    public function driverNo()
    {
        session(['driverYn' => 'no']);
        return redirect()->intended('services/car/out/list/drivers');
    }

    /*
    |---------------------------------------------------------------------------
    | Function Service Selects "Driver","Cars","Places"
    |---------------------------------------------------------------------------
    */
    public function driversList()
    {
        $lists = Motorista::all();
        $dir   = 'img\drivers';
        return view('site.pages.services.car.out.list.drivers.index',compact('lists','dir'));
    }

    public function driverSelect(Request $request)
    {
        $motorista = Funcionario::find($request->id_motorista);
        session(['driver' => $motorista->nome]);
        session(['id_driver' => $motorista->id]);
        if((session('page'))=='summary'){
            return redirect()->route('services.car.out.summary');
        } else {
            return redirect()->route('services.car.out.list.cars');
        }
    }

    public function carsList()
    {
        $lists = Veiculo::all();
        $dir   = 'img\cars';
        return view('site.pages.services.car.out.list.cars.index',compact('lists','dir'));
    }

    public function carSelect(Request $request)
    {
        $veiculo = Veiculo::find($request->id_veiculo);
        session(['car' => $veiculo->modelo]);
        session(['id_car' => $veiculo->id]);
        if((session('page'))=='summary'){
            return redirect()->route('services.car.out.summary');
        } else {
            return redirect()->route('services.car.out.list.places');
        }
    }

    public function placesList()
    {
        $lists = Localidade::all();
        $dir   = 'img\places';
        return view('site.pages.services.car.out.list.places.index',compact('lists','dir'));
    }

    public function placeSelect(Request $request)
    {
        $localidade = Localidade::find($request->id_localidade);
        session(['place' => $localidade->descricao]);
        session(['id_place' => $localidade->id]);
        session(['page' => 'summary']);
        return redirect()->route('services.car.out.summary');
    }

    /*
    |---------------------------------------------------------------------------
    | Function Service Summary and Receipt
    |---------------------------------------------------------------------------
    */
    public function summary()
    {
        return view('site.pages.services.car.out.summary.index');
    }

    public function confirm(Request $request)
    {
        
        $evento_veiculo = new eventosVeiculo();
        $evento_veiculo->id_emissor        = session('id_user');
        $evento_veiculo->id_motorista      = session('id_driver');
        $evento_veiculo->id_veiculo        = session('id_car');
        $evento_veiculo->id_localidade     = session('id_place');
        $evento_veiculo->data_hora_saida   = now();
        $evento_veiculo->data_hora_entrada = null;
        $evento_veiculo->timestamps = false; 
        $evento_veiculo->save();

        return redirect()->route('services.car.out.receipt');
    }

    public function receipt()
    {
        return view('site.pages.services.car.out.receipt.index');
    }

    public function print()
    {
        return \PDF::loadView('site.pages.services.car.out.receipt.pdf.index')
        //->setPaper('a4', 'landscape')
        //->stream('comprovante.pdf');
        ->download('comprovante.pdf');
    }

    public function outFinish()
    {
        return  redirect()->route('login.out');
    }
}
