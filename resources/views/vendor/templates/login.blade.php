@extends('vendor.templates.page',['option' => '4'])

@if(Session::has('alert-danger'))
@section('animated-page','')
@section('animated-buttom-return','')
@endif
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

<style>
/* formatação do elemento */
#lupa{
   float:right;

   cursor:pointer
}

/* formatação do conteúdo  */
#lupa:after{
   font-family:FontAwesome;
   font-size:14px;
   content:"\f002"
}
</style>

<style>
/*
* utilizando class + position
*/
#box_icone_busca{
  width: 30px;
  height: 30px;
  padding: 10px;
  position: relative;
  left: -30px;
  top: 1px;
}
#icone_busca {
  color: rgba(0, 0, 0, 0.65);;
}
</style>


<meta name="csrf-token" content="{{ csrf_token() }}">

<form  name="form" class="browser-default pure-form" action="{{ route('login.in')}}" method="post">
@csrf
      
    <link href="{{asset('./css/google-input.css')}}" type="text/css" rel="stylesheet">
    <!--<div class="col s9 offset-s2 card-panel">-->


        <div class="browser-default row center">
            <div class="browser-default label-float"> 
                <input  placeholder=" " id="user" class="browser-default teste" autocomplete="off" name="username" type="text" value="" maxlength="6">
                <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
                <label class="browser-default">CPF (6 primeiros digitos)</label>
                <span id="box_icone_busca">
                    <i id="icone_busca" class="far fa-address-card text-white" onclick="sua_funcao_aqui()" style="color:white;font-size:20px"></i>
                </span>
            </div>
        </div>

        <br>

        <div class=" browser-default row center">
            <div class="browser-default label-float">
                <input placeholder="  " id="password" class="browser-default password" autocomplete="off" name="password" type="password" value="" maxlength="4">
                <!--<label id="pass" for="password" style="font-size: 20px"><span style="color:red">*</span> Ano de Nascimento</label>-->

                <label class="browser-default">Ano de nascimento</label>
                <span id="box_icone_busca">
                    <i type="button" id="icone_busca" class="far fa-eye-slash" onclick="mostrar(this)" style="font-size:20px"></i>
                </span>
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
                        <td><button type="button" name="num1" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="1" onclick="calcNum(1)"/>1</button></td>
                        <td><button type="button" name="num2" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="2" onclick="calcNum(2)"/>2</button></td>
                        <td><button type="button" name="num3" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="3" onclick="calcNum(3)"/>3</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num4" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="4" onclick="calcNum(4)"/>4</button></td>
                        <td><button type="button" name="num5" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="5" onclick="calcNum(5)"/>5</button></td>
                        <td><button type="button" name="num6" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="6" onclick="calcNum(6)"/>6</button></td>
                    </tr>  
                    <tr>
                        <td><button type="button" name="num7" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="7" onclick="calcNum(7)"/>7</button></td>
                        <td><button type="button" name="num8" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="8" onclick="calcNum(8)"/>8</button></td>
                        <td><button type="button" name="num9" class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="9" onclick="calcNum(9)"/>9</button></td>
                    </tr>  
                    <tr>
                        <td><button id="backspace" type="button" name="limpar" class="btn-floating gradient-45deg-red-pink  gradient-shadow btn-large waves-effect waves-light flow-text" onclick="backSpace()"/><i class="ion-backspace-outline"></i></button></td>
                        <td><button type="button" name="num0"   class="btn-floating gradient-45deg-indigo-blue blue gradient-shadow btn-large waves-effect waves-light flow-text num" value="0" onclick="calcNum(0)"/>0</button></td>
                        <td><button type="submit" class="btn-floating gradient-45deg-green-teal gradient-shadow btn-large waves-effect waves-light flow-text"><i class="ion-checkmark"></i></button></td>
                    </tr>        
                </table>
            </div>
        </div>
    <!--</div>-->
</form>

@stop

@section('js')

<script>

    function mostrar(e) {
    var tipo = e.parentNode.parentNode.querySelector("[name='password']");
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }

    tipo.type = tipo.type; //aplica o tipo que ficou no primeiro campo

    if (e.classList.contains("fa-eye")) { //se tem olho aberto
      e.classList.remove("fa-eye"); //remove classe olho aberto
      e.classList.add("fa-eye-slash"); //coloca classe olho fechado
    } else { //senão
      e.classList.remove("fa-eye-slash"); //remove classe olho fechado
      e.classList.add("fa-eye"); //coloca classe olho aberto
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

    // Função que adiciona os números no Visor quando pressionado os botões
    function calcNum(num) {
        
        if (document.form.user.value.length < 6) { 
            document.form.user.value = document.form.user.value + num;
             
        } else {
            //username.value = mascaraCpf(username.value);
            if (document.form.password.value.length < 4) {
             document.form.password.value = document.form.password.value + num;
            } else {
     
            }
        }
    
    }

    //apanhar todos os inputs
    let inputs = document.querySelectorAll(".pure-form input");

    for (let i = 0; i < inputs.length; ++i){
    inputs[i].onkeyup=function(evento){ //construir o onkey para cada um

            if (evento.key == "Backspace"){ //se for backspace estamos a apagar
                if (i > 0 && this.value.length == 0){ //se não for o 1º e se tiver vazio
                    inputs[i-1].focus();
                }
            }
                else if ((i+1) < inputs.length && this.value.length >= 6){ //se não for o ultimo e tiver 1 caracter
                inputs[i+1].focus();
            }
        }
    }
     

    $("#backspace").click(function() {
        if ($('#password').val() == "") {
            var el = $('#user');
        } else {
            var el = $('#password');
        }
        var the_value = el.val();
        the_value = the_value.substring(0, the_value.length - 1);
        el.val(the_value);
    });

    
</script>

@stop