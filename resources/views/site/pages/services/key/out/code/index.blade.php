<!--@@extends('vendor.templates.login')-->

@extends('vendor.templates.page',['option' => ''])

@section('background','gradient-45deg-cyan-light-green')
    
@section('css')
    <link href="{{asset('./css/google-input.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/toast.css')}}" type="text/css" rel="stylesheet">
@stop

@if(Session::has('alert-danger'))
@section('animated-page','')
@section('animated-buttom-return','')
@endif
<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-green-teal')
@section('button-return-href','/services/key/out')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../../img/logo-menu/key.png')
@section('title-grid', 'ID da Chave')
@section('title-color', 'teal')
@section('subtitle-grid', 'digite o código da chave')

<!------------------------------------------------------------------------------------------>
@section('button-keyboardback-color','gradient-45deg-purple-deep-orange')
@section('button-keyboardnumber-color','gradient-45deg-green-teal')
@section('button-keyboardconfirm-color','gradient-45deg-indigo-blue')
@section('gedgets')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <form  name="form" class="browser-default pure-form" action="{{ route('login.in')}}" method="post">
    @csrf
            
        <div class="browser-default row center">
            <div class="browser-default label-float"> 
                <input  placeholder=" " id="user" class="browser-default border-teal" autocomplete="off" name="username" type="text" value="{{ old('username') }}" maxlength="6">
                <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
                <label class="browser-default">Código da Chave</label>
                <span id="box_icone_busca">
                    <i id="icone_busca" class="far fa-address-card text-white" onclick="" style="color:white;font-size:20px"></i>
                </span>
            </div>
        </div>
            
        @if (Session::has('alert-danger'))
            <div id="toast">
                <div id="img" class="gradient-45deg-red-pink">
                    <i class="fas fa-user-times style="font-size:30px"></i>
                </div>
                <div id="desc"><span>{{ session('alert-danger') }}</span></div>
            </div>
        @endif

        @include('vendor.templates.gedgets.keyboardNumber')

    </form>
@stop

@section('js')
        
    <script>
    
        // Função que adiciona os números no Visor quando pressionado os botões
        function calcNum(num) {
            
            if (document.form.user.value.length < 6) { 
                document.form.user.value = document.form.user.value + num;
            }
        
        }
    
        $(document).ready(function(){
            launch_toast();
        });
    
        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        }        
    
        $("#backspace").click(function() {
            var el = $('#user');
            var the_value = el.val();
            the_value = the_value.substring(0, the_value.length - 1);
            el.val(the_value);
        });
        
    </script>
    
@stop