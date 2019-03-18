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
   .input-field .prefix.active {
     color: #2196f3;
   }
</style>

@endif
       
<meta name="csrf-token" content="{{ csrf_token() }}">

<form name="form" action="{{ route('login.in')}}" method="post">
@csrf
    <!--<div class="col s9 offset-s2 card-panel">-->
        <div class="row margin">
            <div class="input-field col s8 offset-s2">
                <i class="ion ion-ios-contact-outline prefix pt-5"></i>
                <!--<i class="material-icons prefix pt-5">person_outline</i>-->
                <input class="cpf" autocomplete="off" placeholder="Ex:. 11122233344" name="username" id="username" type="text" value="">
                <label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> Usuário (CPF)</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s8 offset-s2">
                <i class="ion ion-android-lock prefix pt-5"></i>
                <!--<i class="material-icons prefix pt-5">lock_outline</i>-->
                <input class="date" placeholder="Ex:. 22122019" name="password" id="password" type="password" value="">
                <label id="pass" for="password" style="font-size: 20px"><span style="color:red">*</span> Senha (Nascimento)</label>
            </div>
        </div>
        

        @if (Session::has('alert-danger'))
            <div class="row margin center card-panel border-round z-depth-5">
                <div class="alert alert-warning light offset-s3 font-weight-100" style="color:red">
                    <i class="ion ion-alert-circled" style="font-size: 30px" ></i><span> {{ session('alert-danger') }} </span><a class="font-weight-100" href="{{ route('login') }}"><u> Fechar</u></a>
                </div>
            </div>
        @endif

        <div class="row margin">
            <div class="input-field col s9 offset-s2">
                <table class="row" id="keybord">
                    <tr> 
                        <td><button type="button" name="num1" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="1" onclick="calcNum(1)"/>1</button></td>
                        <td><button type="button" name="num2" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="2" onclick="calcNum(2)"/>2</button></td>
                        <td><button type="button" name="num3" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="3" onclick="calcNum(3)"/>3</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num4" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="4" onclick="calcNum(4)"/>4</button></td>
                        <td><button type="button" name="num5" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="5" onclick="calcNum(5)"/>5</button></td>
                        <td><button type="button" name="num6" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="6" onclick="calcNum(6)"/>6</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num7" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="7" onclick="calcNum(7)"/>7</button></td>
                        <td><button type="button" name="num8" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="8" onclick="calcNum(8)"/>8</button></td>
                        <td><button type="button" name="num9" class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="9" onclick="calcNum(9)"/>9</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="limpar" class="btn-floating gradient-45deg-red-pink  gradient-shadow btn-large waves-effect waves-light flow-text" onclick="calcLimpar()"/><i class="material-icons">backspace</i></button></td>
                        <td><button type="button" name="num0"   class="btn-floating gradient-45deg-indigo-light-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="0" onclick="calcNum(0)"/>0</button></td>
                        <td><button type="submit" class="btn-floating gradient-45deg-green-teal gradient-shadow btn-large waves-effect waves-light flow-text"><i class="material-icons">check</i></button></td>
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