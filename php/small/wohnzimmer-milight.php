<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="2">
                    <header>WOHNZIMMER BELEUCHTUNG</header>
                    <? milight('MILIGHT_Zone1_Wohnzimmer',1); ?>
                </li>
                <li data-row="3" data-col="1" data-sizex="3" data-sizey="2">
                    <header>MILIGHT 4</header>
                    <? milight('MILIGHT_Zone4_Wohnzimmer',1); ?>
                </li>
                
                <li data-row="5" data-col="1" data-sizex="2" data-sizey="3">
                    <header>LEUCHTEN</header>
                    <? light('W_LICHT_A1_Stehlampe', array("1h","2h"), 'Stehlampe') ?>
                    <? light('W_LICHT_C1_BacklightTV', array("1h","2h"), 'TV') ?>
                </li>
                
                <li data-row="5" data-col="3" data-sizex="1" data-sizey="3">
                    <header>ALLE</header>
                    <div class="centered container">
                            <div data-type="push"
                                data-device="W_LICHT"
                                data-set="on"
                                class="cell"></div>
                            <div data-type="label" class="cell">Ein</div>
                            
                            <div data-type="push"
                                data-device="W_LICHT"
                                data-set="off"
                                class="cell"></div>
                            <div data-type="label" class="cell">Aus</div>
                    </div>
                </li>
                
                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-wohnzimmer.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>