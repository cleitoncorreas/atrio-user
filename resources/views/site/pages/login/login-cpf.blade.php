<!--@@extends('vendor.templates.login')-->

@extends('vendor.templates.page')
    
@section('css')
    <link href="{{asset('./css/google-input.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/toast.css')}}" type="text/css" rel="stylesheet">
@stop

@if(Session::has('alert-danger'))
@section('animated-page','')
@section('animated-buttom-return','')
@section('animated-option','')
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

@section('gedgets')

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <form  name="form" class="browser-default pure-form" action="{{ route('login.in')}}" method="post">
        @csrf
              
            <div class="browser-default row center">
                <div class="browser-default label-float"> 
                    <input  href="#modal1" placeholder=" " id="user" class="modal-trigger browser-default teste" autocomplete="off" name="username" type="text" value="{{ old('username') }}" maxlength="6">
                    <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
                    <label class="browser-default">CPF (6 primeiros digitos)</label>
                    <span id="box_icone_busca">
                        <i id="icone_busca" class="far fa-address-card text-white" onclick="" style="color:white;font-size:20px"></i>
                    </span>
                </div>
            </div>
    
            <br>
    
            <div class=" browser-default row center mb-10">
                <div class="browser-default label-float">
                    <input href="#modal1" placeholder="  " id="password" class="modal-trigger browser-default password" autocomplete="off" name="password" type="password" value="{{ old('password') }}" maxlength="4">
                    <!--<label id="pass" for="password" style="font-size: 20px"><span style="color:red">*</span> Ano de Nascimento</label>-->
    
                    <label class="browser-default">Ano de nascimento</label>
                    <span id="box_icone_busca">
                        <i type="button" id="icone_busca" class="far fa-eye-slash" onclick="mostrar(this)" style="font-size:20px"></i>
                    </span>
                </div>
            </div>
                        
            @if (Session::has('alert-danger'))
                <div id="toast">
                    <div id="img" class="gradient-45deg-red-pink">
                        <i class="fas fa-user-times" style="font-size:24px"></i>
                    </div>
                    <div id="desc"><span>{{ session('alert-danger') }}</span></div>
                </div>
            @endif

            <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
                <button  id="submit" type="submit" class="@yield('button-option1-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible1')" style="@yield('visible-opacity1')">Entrar</button>
            </div>

        </form>

@stop

@section('js')
        
    <script>

        $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: 0, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
                ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    $('div#login-pag.row').addClass('up-login');
                },
                complete: function() { 
                    $('div#login-pag.row').removeClass('up-login');
                } // Callback for Modal close
            }
            
        );
    
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
    
        $(document).ready(function(){
            launch_toast();
        });
    
        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
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

        $('#out').click(function(){
            $('#submit').click();
        });
        
    </script>
@stop