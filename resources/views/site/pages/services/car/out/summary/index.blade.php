@extends('vendor.templates.page',['option' => '6'])
@section('background','gradient-45deg-indigo-purple')

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','../out/list/places')

@section('logo-avatar', './../../../../public/img/logo-menu/summary2.png')
@section('title-grid', 'Você confirma?')
@section('title-color','purple')
@section('subtitle-grid', 'resumo das informações selecionadas')

@section('button-summary-login-href','')
@section('button-summary-login-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-service-href',''/*'/services'*/)
@section('button-summary-service-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-status-href',''/*'/services/car'*/)
@section('button-summary-status-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-driver-href','../out/list/drivers')
@section('button-summary-driver-color','gradient-45deg-purple-deep-orange')
@section('button-summary-car-href','../out/list/cars')
@section('button-summary-car-color','gradient-45deg-purple-deep-orange')
@section('button-summary-place-href','../out/list/places')
@section('button-summary-place-color','gradient-45deg-purple-deep-orange')

@section('button-summary-confirm-action','../out/summary/confirm')
@section('button-summary-confirm-color','gradient-45deg-purple-deep-orange')

@section('gedgets')
<div class="row center col s12">
    <div class="row mb-3">
        <a href="@yield('button-summary-login-href')" class="animated zoomInDown @yield('button-summary-login-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../../public/img/logo-menu/shield.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('user') }}
        </a>
    </div>
    <!--<div class="row mb-3">
        <a href="@yield('button-summary-service-href')" class="animated zoomInDown @yield('button-summary-service-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../img/logo-menu/concierge.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('service') }}
        </a>
    </div>
    <div class="row mb-3">
        <a href="@yield('button-summary-status-href')" class="animated zoomInDown @yield('button-summary-status-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../img/logo-menu/parking.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('status') }}
        </a>
    </div>-->
    <div class="row mb-3">
        <a href="@yield('button-summary-driver-href')" class="animated zoomInDown @yield('button-summary-driver-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../../public/img/logo-menu/driver.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('driver') }}
        </a>
    </div>
    <div class="row mb-3">
        <a href="@yield('button-summary-car-href')" class="animated zoomInDown @yield('button-summary-car-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../../public/img/logo-menu/cars.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('car') }} - {{ Session::get('placa_car') }}
        </a>
    </div>
    <div class="row mb-3">
        <a href="@yield('button-summary-place-href')" class="animated zoomInDown @yield('button-summary-place-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
            <img src="./../../../../public/img/logo-menu/places.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('place') }} - {{ Session::get('bairro') }} / {{ Session::get('city') }}
        </a>
        @php $page @endphp
    </div>
</div>


<div class="row center col s12 mb-3">
    <form action="@yield('button-summary-confirm-action')" method="post">
    {{ csrf_field() }}
        <div>
            <button  type="submit" class="@yield('button-summary-confirm-color','gradient-45deg-indigo-light-blue') waves-effect waves-light btn border-round box-shadow">Confirmar</button>
        </div>
    </form>
</div>
@stop

@section('js')
    <script>    
    
        document.addEventListener("DOMContentLoaded", function(){
        $('.preloader-background').delay(1700).fadeOut('slow');
        
        $('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
        });    
    
    </script>
@stop