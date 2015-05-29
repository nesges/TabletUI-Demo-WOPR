<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="2">
                    <header>SCHLAFZIMMER BELEUCHTUNG</header>
                    <? milight('MILIGHT_Zone2_Schlafzimmer',1); ?>
                </li>
                
                <li data-row="3" data-col="1" data-sizex="3" data-sizey="5">
                    <header>LEUCHTEN</header>
                    <? light('MILIGHT_Zone2_Schlafzimmer', array("15m","30m","1h","2h"), 'Milight') ?>
                    <? light('S_SWITCH_C2_Sterne', array("15m","30m","1h","2h"), 'Sterne') ?>
                    <? light('S_SWITCH_B2_Leselampe', array("15m","30m","1h","2h"), 'Lese') ?>
                    <? light('S_SWITCH_A2_TV', array("15m","30m","1h","2h"), 'TV') ?>
                </li>
                
                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-schlafzimmer.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>