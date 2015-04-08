<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.options.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <header>ANRUFE</header>
        <table class="calls">
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B0"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D0" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C0"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E0"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A0"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B1"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D1" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C1"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E1"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A1"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>

            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B2"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D2" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C2"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E2"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A2"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B3"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D3" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C3"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E3"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A3"></div></td>
            </tr>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            
            <tr>
                <td><div data-type="label" data-device="FritzBox" data-get="B4"></div></td>
                <td>
                    <div data-type="label" data-device="FritzBox" data-get="D4" style="font-size:x-large;color:#aa6900;"></div>
                    <div data-type="label" data-device="FritzBox" data-get="C4"></div>
                </td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="E4"></div></td>
                <td class="r"><div data-type="label" data-device="FritzBox" data-get="A4"></div></td>
            </tr>
        </table>
    </li>
</ul>