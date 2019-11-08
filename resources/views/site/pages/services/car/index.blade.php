@extends('vendor.templates.page')
@section('background','gradient-45deg-indigo-purple')

@section('css')
    <link href="{{asset('./css/toast.css')}}" type="text/css" rel="stylesheet">
@stop
<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','../services')


@if(Session::has('alert-information'))
@section('animated-page','')
@section('animated-buttom-return','')
@section('animated-option','')
@endif

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../public/img/logo-menu/parking.png')
@section('title-grid', 'Saída | Entrada')
@section('title-color','purple')
@section('subtitle-grid', 'selecione a opção desejada')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','car/out')
@section('button-option1-color','gradient-45deg-purple-deep-orange')
@section('button-option1-name','Retirar')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','car/in')
@section('button-option2-color','gradient-45deg-purple-deep-orange')
@section('button-option2-name','Devolver')

@section('gedgets')
    @include('vendor.templates.gedgets.button',['button'=>2])

    @if (Session::has('alert-information'))
        <div id="toast">
            <div id="img" class="gradient-45deg-amber-amber">
                <i class="fas fa-exclamation" style="font-size:24px"></i>
            </div>
            <div id="desc"><span>{{ session('alert-information') }}</span></div>
        </div>
    @endif
@stop

@section('js')
    <script>
        $(document).ready(function(){
            launch_toast();
        });

        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        }
    </script>
@stop
