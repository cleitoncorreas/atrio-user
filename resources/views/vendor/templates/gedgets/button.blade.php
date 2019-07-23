@switch($button)

    @case(1)
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible1')" style="@yield('visible-opacity1')">@yield('button-option1-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
    @break

    @case(2)
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible1')" style="@yield('visible-opacity1')">@yield('button-option1-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <a href="@yield('button-option2-href')" class="@yield('button-option2-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible2')" style="@yield('visible-opacity2')">@yield('button-option2-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
    @break

    @case(3)
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <!--<i class="material-icons teal-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>-->
            <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible1')" style="@yield('visible-opacity1')">@yield('button-option1-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <!--<i class="material-icons orange-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>-->
            <a href="@yield('button-option2-href')" class="@yield('button-option2-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible2')" style="@yield('visible-opacity2')">@yield('button-option2-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
        <div class="@yield('animated-option','animated zoomIn') row center col s12 mb-3">
            <!--<i class="material-icons red-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>-->
            <a href="@yield('button-option3-href')" class="@yield('button-option3-color','gradient-45deg-indigo-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12 @yield('visible3')" style="@yield('visible-opacity3')">@yield('button-option3-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
        </div>
    @break

@endswitch  

<!--@@if (Session::has('alert-sucess'))
    <div id="toast" style="bottom:-80px;">
        <div id="img" class="gradient-45deg-green-teal">
            <i class="fas fa-user-check" style="font-size:24px"></i>
        </div>
        <div id="desc"><span>{{ session('alert-sucess') }}</span></div>
    </div>
@@endif

@@if (Session::has('alert-information'))
    <div id="toast" style="bottom:-80px;">
        <div id="img" class="gradient-45deg-amber-amber">
            <i class="fas fa-exclamation" style="font-size:24px"></i>
        </div>
        <div id="desc"><span>{{ session('alert-information') }}</span></div>
    </div>
@@endif

@@section('js')
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
@@stop-->