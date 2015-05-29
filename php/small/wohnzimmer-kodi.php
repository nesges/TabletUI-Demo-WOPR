<?
    include("ui.php");
    $host='WATER';
    $xbmc[$host] = 'W_XBMC';
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="7">
                    <header>WOHNZIMMER KODI</header>
                    <div class="centered container">
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Reverse')}", 'fa-backward', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Play')}", 'fa-play', '#FFCC00') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Forward')}", 'fa-forward', 'rgb(170,105,0)') ?>
                    </div>
                    
                    <div data-type="kodinowplaying" data-device="<?= $xbmc[$host] ?>"></div>
                    
                    <div style="margin-top:18px" class="centered container">
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Back')}", 'fa-arrow-circle-o-left', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Close')}", 'fa-times', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Up')}", 'fa-angle-up', '#2E8AE6') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI OSD')}", 'fa-bars', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Info')}", 'fa-info', 'rgb(170,105,0)') ?>
                    </div>
                    <div class="centered container">
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Left')}", 'fa-angle-left', '#2E8AE6') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Ok')}", 'fa-check-circle', '#0066FF') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Right')}", 'fa-angle-right', '#2E8AE6') ?>
                    </div>
                    <div class="centered container">
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Fullscreen')}", 'fa-desktop', 'rgb(170,105,0)') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Down')}", 'fa-angle-down', '#2E8AE6') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Subtitle')}", 'fa-pencil', 'rgb(170,105,0)') ?>
                    </div>
                    
                    <div class="centered container">
                        <div data-type="slider"
                            data-device="<?= $xbmc[$host] ?>"
                            data-get="volume"
                            data-cmd="set"
                            data-set="volume"
                            class="horizontal"
                            style="margin-top:25px !important;margin-bottom:15px !important;"></div>
                    </div>
                    
                    <div style="margin-top:25px" class="centered container">
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Home')}", 'fa-home', '#9933FF') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Video')}", 'fa-film', '#9933FF') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Music')}", 'fa-music', '#9933FF') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI Pictures')}", 'fa-picture-o', '#9933FF') ?>
                        <? button_fhem('', "{eventghost('".$host."', 'KODI TV')}", 'fa-desktop', '#9933FF') ?>
                    </div>
                </li>
                
                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-wohnzimmer.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>