@extends('vendor.templates.page')

@section('title', 'PortControl | 1.0')

@section('button-return')

    <div>
        <a href="{{ route('services') }}" class="btn-floating gradient-45deg-indigo-light-blue blue btn-large waves-effect waves-light pulse"><i class="material-icons">arrow_back</i></a>
    </div>

@stop

@section('logo-avatar', './../img/logo-menu/key.png')

@section('title-grid', 'Chaves')

@section('subtitle-grid', 'Selecione a opção desejada')

@section('options')

    <div class="row center col s12">
        <a href="" id="download-button" class="gradient-45deg-indigo-light-blue blue btn-large z-depth-5 waves-effect waves-light border-round pulse col s12">Retirar</a>
    </div>
    <div class="row center col s12">
        <a href="" id="download-button" class="gradient-45deg-indigo-light-blue blue btn-large z-depth-5 waves-effect waves-light border-round pulse col s12">Entregar</a>
    </div>

@stop