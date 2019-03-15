<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Motorista;
use App\Models\Veiculo;
use App\Models\Funcionario;
use App\Models\Localidade;

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
        session(['status' => 'SAÍDA']);
        return view('site.pages.services.car.out.index');
    }

    public function in()
    {
        session(['status' => 'ENTRADA']);
        return view('site.pages.services.car.in.index');
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

    public function finish()
    {
        return  redirect()->route('login.out');
    }
}
