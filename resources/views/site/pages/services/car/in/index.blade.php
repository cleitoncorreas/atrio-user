@extends('vendor.templates.login')

@section('title', 'PortControl | 1.0')

@section('button-return')

    <div>
        <a href="{{ route('services.car') }}" class="btn-floating gradient-45deg-purple-deep-orange gradient-shadow btn-large waves-effect waves-light pulse"><i class="material-icons">arrow_back</i></a>
    </div>

@stop

@section('logo-avatar', './../../img/logo-menu/taxi-driver.png')

@section('title-grid', 'Foi o motorista?')

@section('subtitle-grid', 'Selecione a opção')

@section('options')

    <div class="row center col s12">
        <a href="{{ route('services.car.out.cars') }}" id="download-button" class="gradient-45deg-purple-deep-orange gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round pulse col s12">sim</a>
    </div>
    <div class="row center col s12">
        <a href="{{ route('services.car.out.drivers') }}" id="download-button" class="gradient-45deg-purple-deep-orange gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round pulse col s12">não</a>
    </div>

@stop