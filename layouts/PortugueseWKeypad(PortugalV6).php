<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file defines the PortugueseWKeypad(PortugalV6.0)keyboard layout.
 *
 * @package    mod_mootyper
 * @copyright  2020 onwards AL Rachels (drachels@drachels.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/config.php');
 require_login($course, true, $cm);
?>
<div id="innerKeyboard" style="margin: 0px auto;display: inline-block;
<?php
echo (isset($displaynone) && ($displaynone == true)) ? 'display:none;' : '';
?>
">
<div id="keyboard" class="keyboardpadback">Layout em português com teclado (Português - V6)<br>
<table>
    <tr>
        <td style="width:630px">
            <section>
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeybackslash" class="normal" style='text-align:left;'>|<br>\</div>
            <div id="jkey1" class="normal" style='text-align:left;'>!<br>1</div>
            <div id="jkey2" class="normal" style='text-align:left;'>"<br>2
                <span style="color:blue">&nbsp;@</span></div>
            <div id="jkey3" class="normal" style='text-align:left;'>#<br>3
                <span style="color:blue">&nbsp; &nbsp;£</span></div>
            <div id="jkey4" class="normal" style='text-align:left;'>$<br>4
                <span style="color:blue">&nbsp; &nbsp;§</span></div>
            <div id="jkey5" class="normal" style='text-align:left;'>%<br>5
                <span style="color:blue">&nbsp; &nbsp;€</span></div>
            <div id="jkey6" class="normal" style='text-align:left;'>&amp <br>6</div>
            <div id="jkey7" class="normal" style='text-align:left;'>/<br>7
                <span style="color:blue">&nbsp;&nbsp;&nbsp;{</span></div>
            <div id="jkey8" class="normal" style='text-align:left;'>(<br>8
                <span style="color:blue">&nbsp;&nbsp;&nbsp;[</span></div>
            <div id="jkey9" class="normal" style='text-align:left;'>)<br>9
                <span style="color:blue">&nbsp;&nbsp;&nbsp;]</span></div>
            <div id="jkey0" class="normal" style='text-align:left;'>=<br>0
                <span style="color:blue">&nbsp;&nbsp;&nbsp;}</span></div>
            <div id="jkeyapostrophe" class="normal" style='text-align:left;'>?<br>'</div>
            <div id="jkeyquote" class="normal" style='text-align:left;'>»<br>«</div>
            <div id="jkeybackspace" class="normal" style="width: 95px;">Backspace</div>
    </div>
    <div style="float: left;">
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeytab" class="normal" style="width: 60px;">Tab</div>
            <div id="jkeyq" class="normal" style='text-align:left;'>Q<br>&nbsp;</div>
            <div id="jkeyw" class="normal" style='text-align:left;'>W<br>&nbsp;</div>
            <div id="jkeye" class="normal" style='text-align:left;'>E<br>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color:blue">€</span></div>
            <div id="jkeyr" class="normal" style='text-align:left;'>R<br>&nbsp;</div>
            <div id="jkeyt" class="normal" style='text-align:left;'>T<br>&nbsp;</div>
            <div id="jkeyy" class="normal" style='text-align:left;'>Y<br>&nbsp;</div>
            <div id="jkeyu" class="normal" style='text-align:left;'>U<br>&nbsp;</div>
            <div id="jkeyi" class="normal" style='text-align:left;'>I<br>&nbsp;</div>
            <div id="jkeyo" class="normal" style='text-align:left;'>O<br>&nbsp;</div>
            <div id="jkeyp" class="normal" style='text-align:left;'>P<br>&nbsp;</div>
            <div id="jkeyplus" class="normal" style='text-align: left;'>*<br>+
                <span style="color:red">&nbsp;&nbsp;¨</span></div>
            <div id="jkeyacuteaccent" class="normal" style='text-align:left; color:red;'>`<br>´</div>
        </div>
        <span id="jkeyenter" class="normal" style="width: 50px; float: right; height: 85px;">Enter</span>
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeycaps" class="normal" style="width: 80px; font-size: 12px !important;">Caps Lock</div>
            <div id="jkeya" class="finger4" style='text-align:left;'>A<br>&nbsp;</div>
            <div id="jkeys" class="finger3" style='text-align:left;'>S<br>&nbsp;</div>
            <div id="jkeyd" class="finger2" style='text-align:left;'>D<br>&nbsp;</div>
            <div id="jkeyf" class="finger1" style='text-align:left;'>F<br>&nbsp;</div>
            <div id="jkeyg" class="normal" style='text-align:left;'>G<br>&nbsp;</div>
            <div id="jkeyh" class="normal" style='text-align:left;'>H<br>&nbsp;</div>
            <div id="jkeyj" class="finger1" style='text-align:left;'>J<br>&nbsp;</div>
            <div id="jkeyk" class="finger2" style='text-align:left;'>K<br>&nbsp;</div>
            <div id="jkeyl" class="finger3" style='text-align:left;'>L<br>&nbsp;</div>
            <div id="jkeyç" class="finger4" style='text-align:left;'>Ç<br>&nbsp;</div>
            <div id="jkeyº" class="normal" style='text-align:left;'>ª<br>º</div>
            <div id="jkeytilde" class="normal" style='text-align:left; color:red;'>^<br>~</div>
        </div>
    </div>

        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeyshiftl" class="normal" style="width: 70px;">Shift</div>
            <div id="jkeylessthan" class="normal" style='text-align:left;'>&gt;<br>&lt;</div>
            <div id="jkeyz" class="normal" style='text-align:left;'>Z<br>&nbsp;</div>
            <div id="jkeyx" class="normal" style='text-align:left;'>X<br>&nbsp;</div>
            <div id="jkeyc" class="normal" style='text-align:left;'>C<br>&nbsp;</div>
            <div id="jkeyv" class="normal" style='text-align:left;'>V<br>&nbsp;</div>
            <div id="jkeyb" class="normal" style='text-align:left;'>B<br>&nbsp;</div>
            <div id="jkeyn" class="normal" style='text-align:left;'>N<br>&nbsp;</div>
            <div id="jkeym" class="normal" style='text-align:left;'>M<br>&nbsp;</div>
            <div id="jkeycomma" class="normal" style='text-align:left;'>;<br>,</div>
            <div id="jkeyperiod" class="normal" style='text-align:left;'>:<br>.</div>
            <div id="jkeyminus" class="normal" style='text-align:left;'>_<br>-</div>
            <div id="jkeyshiftr" class="normal" style="width: 105px;">Shift</div>
        </div>
        <div class="mtrow" style='float: left; margin-left:5px;'>
            <div id="jkeyctrll" class="normal" style="width: 60px;">Ctrl</div>
            <div id="jkeywin" class="normal" style="width: 50px;">Win</div>
            <div id="jkeyalt" class="normal" style="width: 50px;">Alt</div>
            <div id="jkeyspace" class="normal" style="width: 240px;">Space</div>
            <div id="jkeyaltgr" class="normal" style="width: 55px;"><span style="color:blue">Alt Gr</span></div>
            <div id="jkeywin" class="normal" style="width: 50px;">Win</div>
            <div id="jkeyfn" class="normal" style="width: 50px;">Menu</div>
            <div id="jkeyctrlr" class="normal" style="width: 60px;">Ctrl</div>
        </div>
        </section>
       </div>
            </td>
            <td style="width:203px;">
                <div class="mtrow" style='line-height: 15px'>
                    <div id="jkeyxxx" class="normalblank" style='text-align:left;'></div>
                    <div id="jkeynumlockp" class="normal" style='text-align:left;'>Lock<br>&nbsp;</div>
                    <div id="jkeyslashp" class="normal" style='text-align:left;'>/<br>&nbsp;</div>
                    <div id="jkey*p" class="normal" style='text-align:left;'>*<br>&nbsp;</div>
                    <div id="jkeyminusp" class="normal" style='text-align:left;'>-<br>&nbsp;</div>
                </div>     
                <div class="mtrow" style='line-height: 15px'>
                    <div id="jkeyplusp" class="finger4" style="width: 41px; float: right; height: 85px;">+</div>
                    <div id="jkeyxxx" class="normalblank" style='text-align:left;'></div>
                    <div id="jkey7p" class="normal" style='text-align:left;'>7<br>&nbsp;</div>
                    <div id="jkey8p" class="normal" style='text-align:left;'>8<br>&nbsp;</div>
                    <div id="jkey9p" class="normal" style='text-align:left;'>9<br>&nbsp;</div>
                </div> 
                <div class="mtrow" style='line-height: 15px'>
                    <div id="jkeyxxx" class="normalblank" style='text-align:left;'></div>
                    <div id="jkey4p" class="finger1" style='text-align:left;'>4<br>&nbsp;</div>
                    <div id="jkey5p" class="finger2" style='text-align:left;'>5<br>&nbsp;</div>
                    <div id="jkey6p" class="finger3" style='text-align:left;'>6<br>&nbsp;</div>
                </div> 
                <div class="mtrow" style='line-height: 15px'>
                    <div id="jkeyenterp" class="normal" style="font-size: 11px !important; width: 41px;
                        float: right; height: 85px;">Enter</div>
                    <div id="jkeyxxx" class="normalblank" style='text-align:left;'></div>
                    <div id="jkey1p" class="normal" style='text-align:left;'>1<br>&nbsp;</div>
                    <div id="jkey2p" class="normal" style='text-align:left;'>2<br>&nbsp;</div>
                    <div id="jkey3p" class="normal" style='text-align:left;'>3<br>&nbsp;</div>
                </div>            
                    <div class="mtrow" style='line-height: 15px'>
                    <div id="jkeyxxx" class="normalblank" style='text-align:left;'> <br> </div>
                    <div id="jkey0p" class="normal" style="width: 80px;">0<br>&nbsp;</div>
                    <div id="jkeyperiodp" class="normal" style='text-align:left;'>.<br>&nbsp;</div>
                </div> 
            </td>
        </tr>
</table>
</div>
