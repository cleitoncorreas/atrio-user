@extends('vendor.templates.page',['option' => '4'])

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
<!--@@section('button-return-color','')-->
@section('button-return-href','option-login')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './img/logo-menu/shield.png')
@section('title-grid', 'Identifique-se!')
@section('subtitle-grid', 'digite seus dados')

<!------------------------------------------------------------------------------------------>
@section('login')

@if ($alert = Session::get('alert-danger'))

<style>
/* label focus color */
.input-field input[type=text] + label {
    color: red !important;
}
/* label underline focus color */
.input-field input[type=text] {
    border-bottom: 1px solid red !important;
    box-shadow: 0 1px 0 0 red !important;
}

/* label focus color */
.input-field input[type=password] + label {
    color: red !important;
}
/* label underline focus color */
.input-field input[type=password] {
    border-bottom: 1px solid red !important;
    box-shadow: 0 1px 0 0 red !important;
}

/* icon prefix focus color */
.input-field .prefix {
    color: red;
}

/* icon prefix focus color */
.input-field .prefix.active {
    color: red;
}
</style>

@else

<style>

    /* label color */
    .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #2196f3 !important;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #2196f3 !important;
     box-shadow: 0 1px 0 0 #2196f3 !important;
   }

   /* label focus color */
   .input-field input[type=password]:focus + label {
     color: #2196f3 !important;
   }
   /* label underline focus color */
   .input-field input[type=password]:focus {
     border-bottom: 1px solid #2196f3 !important;
     box-shadow: 0 1px 0 0 #2196f3 !important;
   }

   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #2196f3;
     box-shadow: 0 1px 0 0 #2196f3;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #2196f3;
     box-shadow: 0 1px 0 0 #2196f3;
   }
   /* icon prefix focus color */
    .fas {
     color: #2196f3 !important;
   }


</style>

@endif

<style>
::-webkit-input-placeholder {
   color: #2196f3;
}

:-moz-placeholder { /* Firefox 18- */
   color: #2196f3;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #2196f3;  
}

:-ms-input-placeholder {  
   color: #2196f3;  
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<form class="pure-form" name="form" action="{{ route('login.in')}}" method="post">
@csrf

        <link rel="stylesheet"   
        href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"   
        integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"   
        crossorigin="anonymous">  
    <!--<div class="col s9 offset-s2 card-panel">-->


        <div class="row center">
            <div class="input-field col s8 offset-s2"> 
                <div id="user"></div>
                <!--<i class="material-icons prefix pt-5">person_outline</i>-->
                <input placeholder="&#xf2c2;    CPF" class="black-text fas pure-input-rounded cpf" autocomplete="off" placeholder="Ex:. 11122233344" name="username" id="username" type="text" value="" style="font-family:Arial, FontAwesome;border:1px solid #2196f3">
                <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
            </div>
        </div>



        <div class="row center">
            <div class="input-field col s8 offset-s2">
                <div id="password"></div>
                <!--<i class="material-icons prefix pt-5">lock_outline</i>-->
                <input class="fas pure-input-rounded date" placeholder="&#xf073;    Ano de Nascimento" name="password" id="password" type="password" value="" style="font-family:Arial, FontAwesome;border:1px solid #2196f3;">
                <!--<label id="pass" for="password" style="font-size: 20px"><span style="color:red">*</span> Ano de Nascimento</label>-->
            </div>
        </div>
        

        @if (Session::has('alert-danger'))
            <div class="row margin center card-panel border-round z-depth-5">
                <div class="alert alert-warning light offset-s3 font-weight-100" style="color:red">
                    <i class="ion ion-alert-circled" style="font-size: 30px" ></i><span> {{ session('alert-danger') }} </span><a class="font-weight-100" href="{{ route('login') }}"><u> Fechar</u></a>
                </div>
            </div>
        @endif

        <div class="row ">
            <div class="input-field col s9 offset-s2">
                <table class="row" id="keybord">
                    <tr> 
                        <td><button type="button" name="num1" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="1" onclick="calcNum(1)"/>1</button></td>
                        <td><button type="button" name="num2" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="2" onclick="calcNum(2)"/>2</button></td>
                        <td><button type="button" name="num3" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="3" onclick="calcNum(3)"/>3</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num4" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="4" onclick="calcNum(4)"/>4</button></td>
                        <td><button type="button" name="num5" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="5" onclick="calcNum(5)"/>5</button></td>
                        <td><button type="button" name="num6" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="6" onclick="calcNum(6)"/>6</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num7" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="7" onclick="calcNum(7)"/>7</button></td>
                        <td><button type="button" name="num8" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="8" onclick="calcNum(8)"/>8</button></td>
                        <td><button type="button" name="num9" class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="9" onclick="calcNum(9)"/>9</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="limpar" class="mb-10 btn-floating gradient-45deg-red-pink  gradient-shadow btn-large waves-effect waves-light flow-text" onclick="calcLimpar()"/><i class="ion-backspace-outline"></i></button></td>
                        <td><button type="button" name="num0"   class="mb-10 btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="0" onclick="calcNum(0)"/>0</button></td>
                        <td><button type="submit" class="mb-10 btn-floating gradient-45deg-green-teal gradient-shadow btn-large waves-effect waves-light flow-text"><i class="material-icons">check</i></button></td>
                    </tr>        
                </table>
            </div>
        </div>
    <!--</div>-->
</form>

@stop

<script>

    // Função que adiciona os números no Visor quando pressionado os botões
    function calcNum(num) {
        
        if (document.form.username.value.length < 11) { 
            document.form.username.value = document.form.username.value + num;
             
        } else {
            username.value = mascaraCpf(username.value);
            if (document.form.password.value.length < 8) {
             document.form.password.value = document.form.password.value + num;
            } else {
     
            }
        }
    
    }
    
    
    function mascaraCpf(valor) {
        return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
    }
     
    // Função que limpa a calculadora e todas as variáveis existentes.
    function calcLimpar() {
        document.form.username.value  = '';
        document.form.password.value = '';
    }
    
</script>