@extends('vendor.templates.page',['option' => '4'])

@section('animated-page','')
@section('animated-buttom-return','')
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
    /* label color */
    .input-field label {
        color: red;
    }
    /* label focus color */
    .input-field input[type=text]:focus + label {
        color: red !important;
    }
    /* label underline focus color */
    .input-field input[type=text]:focus {
        border-bottom: 1px solid red !important;
        box-shadow: 0 1px 0 0 red !important;
    }

    /* label focus color */
    .input-field input[type=password]:focus + label {
        color: red !important;
    }
    /* label underline focus color */
    .input-field input[type=password]:focus {
        border-bottom: 1px solid red !important;
        box-shadow: 0 1px 0 0 red !important;
    }

    /* valid color */
    .input-field input[type=text].valid {
        border-bottom: 1px solid red;
        box-shadow: 0 1px 0 0 red;
    }
    /* invalid color */
    .input-field input[type=text].invalid {
        border-bottom: 1px solid red;
        box-shadow: 0 1px 0 0 red;
    }

    /* icon prefix focus color */
    .input-field .prefix {
        color: red;
    }

    /* icon prefix focus color */
    .input-field .prefix.active {
        color: red;
    }

    ::-webkit-input-placeholder {
        color: red;
    }

    :-moz-placeholder { /* Firefox 18- */
        color: red;  
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        color: red;  
    }

    :-ms-input-placeholder {  
        color: red;  
    }

    #input {
        border:1px solid red;
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

    #input{
        border:1px solid #2196f3;
    }


</style>

@endif

<style>

</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<form class="pure-form" name="form" action="{{ route('login.in')}}" method="post">
@csrf
      
        <link href="{{asset('./vendor/pure/pure-min.css')}}" type="text/css" rel="stylesheet">
    <!--<div class="col s9 offset-s2 card-panel">-->


        <div class="row center">
            <div class="input-field col s8 offset-s2"> 
                <div id="user"></div>
                <!--<i class="material-icons prefix pt-5">person_outline</i>-->
                <input id="input" placeholder="&#xf2c2;    CPF (Ex: 000.000)" class="black-text fas pure-input-rounded cpf" autocomplete="off" placeholder="Ex:. 11122233344" name="username" type="text" value="" style="font-family:Arial, FontAwesome;" maxlength="6">
                <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
            </div>
        </div>



        <div class="row center">
            <div class="input-field col s8 offset-s2">
                <div id="password"></div>
                <!--<i class="material-icons prefix pt-5">lock_outline</i>-->
                <input id="input" class="fas pure-input-rounded date" placeholder="&#xf073;    Ano de Nascimento" name="password" id="password" type="password" value="" style="font-family:Arial, FontAwesome;" maxlength="4">
                <!--<label id="pass" for="password" style="font-size: 20px"><span style="color:red">*</span> Ano de Nascimento</label>-->
            </div>
        </div>

        <style>
        
    #toast {
    visibility: hidden;
    max-width: 50px;
    height: 50px;
    /*margin-left: -125px;*/
    margin: auto;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 25px;

    position: fixed;
    z-index: 999;
    left: 0;right:0;
    bottom: 32px;
    font-size: 17px;
    white-space: nowrap;
    overflow: hidden;
}
#toast #img {
	width: 50px;
	height: 50px;
    
    float: left;

    padding-top: 11px;
    padding-bottom: 30px;
    
    box-sizing: border-box;

    background-color: #2196f3;
    color: #fff;
    border-radius: 25px;

}
#toast #desc{
    
    color: #fff;
    padding: 16px;
    padding-top: 11px;
    
    overflow: hidden;
	white-space: nowrap;

}

#toast.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes expand {
    from {min-width: 50px} 
    to {min-width: 350px;}
}

@keyframes expand {
    from {min-width: 50px}
    to {min-width: 350px;}
}
@-webkit-keyframes stay {
    from {min-width: 350px} 
    to {min-width: 350px}
}

@keyframes stay {
    from {min-width: 350px}
    to {min-width: 350px}
}
@-webkit-keyframes shrink {
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@keyframes shrink {
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 60px; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 60px; opacity: 0;}
}
        
</style>
        

        @if (Session::has('alert-danger'))
            <div id="toast">
                <div id="img" class="gradient-45deg-red-pink">
                    <i class="fas fa-user-times style="font-size:30px"></i>
                </div>
                <div id="desc"><span>{{ session('alert-danger') }}</span></div>
            </div>
         @endif

        <div class="row mb-5">
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
                        <td><button type="submit" class="mb-10 btn-floating gradient-45deg-green-teal gradient-shadow btn-large waves-effect waves-light flow-text"><i class="ion-checkmark"></i></button></td>
                    </tr>        
                </table>
            </div>
        </div>
    <!--</div>-->
</form>

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

    // Função que adiciona os números no Visor quando pressionado os botões
    function calcNum(num) {
        
        if (document.form.username.value.length < 6) { 
            document.form.username.value = document.form.username.value + num;
             
        } else {
            //username.value = mascaraCpf(username.value);
            if (document.form.password.value.length < 4) {
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

@stop