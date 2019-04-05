<div class="row mb-5">
    <div class="input-field col s9 offset-s2">
        <table class="row" id="keybord">
            <tr> 
                <td><button type="button" name="num1" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="1" onclick="calcNum(1)"/>1</button></td>
                <td><button type="button" name="num2" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="2" onclick="calcNum(2)"/>2</button></td>
                <td><button type="button" name="num3" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="3" onclick="calcNum(3)"/>3</button></td>
            </tr>  
            <tr>
                <td><button type="button" name="num4" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="4" onclick="calcNum(4)"/>4</button></td>
                <td><button type="button" name="num5" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="5" onclick="calcNum(5)"/>5</button></td>
                <td><button type="button" name="num6" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="6" onclick="calcNum(6)"/>6</button></td>
            </tr>  
            <tr>
                <td><button type="button" name="num7" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="7" onclick="calcNum(7)"/>7</button></td>
                <td><button type="button" name="num8" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="8" onclick="calcNum(8)"/>8</button></td>
                <td><button type="button" name="num9" class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="9" onclick="calcNum(9)"/>9</button></td>
            </tr>  
            <tr>
                <td><button id="backspace" type="button" name="limpar" class="btn-floating  @yield('button-keyboardback-color','red') gradient-shadow btn-large waves-effect waves-light flow-text" onclick="backSpace()"/><i class="ion-backspace-outline"></i></button></td>
                <td><button type="button" name="num0"   class="btn-floating @yield('button-keyboardnumber-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light flow-text num" value="0" onclick="calcNum(0)"/>0</button></td>
                <td><button type="submit" class="btn-floating  @yield('button-keyboardconfirm-color','green') gradient-shadow btn-large waves-effect waves-light flow-text"><i class="far fa-check-circle"></i></button></td>
            </tr>        
        </table>
    </div>
</div>


