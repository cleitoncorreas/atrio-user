<div>
    <div class="col s12" style="align-items: center; justify-content: center; display: flex; flex-direction: row; flex-wrap: wrap;">
        <table style="margin: 0 auto; width: 40%;" id="keybord">
            <tbody class="ml-5">
                <tr> 
                    <td class="center">
                            <button type="button" name="num1" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="1" onclick="calcNum(1)"/>1</button>
                    </td>
                    <td class="center">
                            <button type="button" name="num2" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="2" onclick="calcNum(2)"/>2</button>
                    </td>
                    <td class="center">
                            <button type="button" name="num3" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="3" onclick="calcNum(3)"/>3</button>
                    </td>
                </tr>  
                <tr>
                    <td class="center">
                        <button type="button" name="num4" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="4" onclick="calcNum(4)"/>4</button>
                    </td>
                    <td class="center">
                        <button type="button" name="num5" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="5" onclick="calcNum(5)"/>5</button>
                    </td>
                    <td class="center">
                        <button type="button" name="num6" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="6" onclick="calcNum(6)"/>6</button>
                    </td>
                </tr>  
                <tr>
                    <td class="center"><button type="button" name="num7" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="7" onclick="calcNum(7)"/>7</button></td>
                    <td class="center"><button type="button" name="num8" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="8" onclick="calcNum(8)"/>8</button></td>
                    <td class="center"><button type="button" name="num9" class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="9" onclick="calcNum(9)"/>9</button></td>
                </tr>  
                <tr>
                    <td class="center"><button id="backspace" type="button" name="limpar" class="btn-floating  @yield('button-keyboardback-color','grey') z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text" onclick="backSpace()"/><i class="ion-backspace-outline black-text"></i></button></td>
                    <td class="center"><button type="button" name="num0"   class="btn-floating @yield('button-keyboardnumber-color','white') black-text z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text num" value="0" onclick="calcNum(0)"/>0</button></td>
                    <td id="out" class="center"><button class="modal-close btn-floating  @yield('button-keyboardconfirm-color','grey') z-depth-5 gradient-shadow btn-large waves-effect waves-light flow-text"><i class="ion-android-arrow-forward black-text"></i></button></td>
                </tr>
            </tbody>        
        </table>
    </div>
</div>





