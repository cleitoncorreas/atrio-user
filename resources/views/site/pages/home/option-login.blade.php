@extends('vendor.templates.page')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
<!--@@section('button-return-color','')-->
@section('button-return-href','home')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './img/logo-menu/question-login.png')
@section('title-grid', 'Quem é você?')
@section('subtitle-grid', 'Selecione uma opção de identificação')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','')
<!--@@section('button-option1-color','gradient-45deg-purple-deep-orange')-->
@section('button-option1-name','Biometria')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','login')
<!--@@section('button-option2-color','gradient-45deg-purple-deep-orange')-->
@section('button-option2-name','CPF / Nascimento')

@section('gedgets')
    @include('vendor.templates.gedgets.button',['button'=>2])
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.tap-target').tapTarget('open');
        });
    </script>
@stop