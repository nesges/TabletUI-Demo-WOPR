<!doctype html>
<html>
<head>
    <title>TUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes">    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="widget_base_width" content="120">
    <meta name="widget_base_height" content="131">
    <meta name="fhemweb_url" content="/fhem">
    <meta name="longpoll" content="1">
    <meta name="gridster_disable" content="1">
    <meta name="widget_dir" content="../Widgets-for-fhem-tablet-ui/js">
    
    <meta name="color_scheme" content="amber">
    <meta name="color_background"                           content="#000000">
    <meta name="color_widget_background"                    content="#2a2a2a">
    <meta name="color_text"                                 content="#ffffff">
    <meta name="color_text_emphasized"                      content="#aa6900">
    <meta name="color_text_dampened"                        content="#262626">
    <meta name="color_multibutton_background_off"           content="#505050">
    <meta name="color_multibutton_background_on"            content="#aa6900">
    <meta name="color_multibutton_background_emphasized"    content="#aa6900">
    <meta name="color_multibutton_background_dampened"      content="#6f4509">
    <meta name="color_multibutton_foreground_off"           content="#2a2a2a">
    <meta name="color_multibutton_foreground_on"            content="#2a2a2a">
    
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/jquery.gridster.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/css/fhem-tablet-ui.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/font-awesome.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/jquery.toast.min.css">
    <link rel="stylesheet" href="../fhem-tablet-ui/www/tablet/lib/powerange.min.css" />

    <link rel="stylesheet" href="../css/wopr.css">
    
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.knob.mod.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.toast.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/fa-multi-button.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/powerange.min.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/lib/jquery.circlemenu.js"></script>
    
    <script type="text/javascript" src="../js/subtype-defaults.js"></script>
    <script type="text/javascript" src="../fhem-tablet-ui/www/tablet/js/fhem-tablet-ui.js"></script>

    <script type="text/javascript" src="../js/devices.js"></script>
    <script type="text/javascript" src="../js/colors.js"></script>
    <meta name="daydream_starttime" content="1800000">
    <meta name="daydream_slowdown" content="10000">
    <script type="text/javascript" src="../js/daydream.js"></script>
</head>
<body>
    <div class="gridster">
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "room_" + path.substring(path.lastIndexOf('/') + 1, Math.min(path.lastIndexOf('.'), (path.lastIndexOf('-')>0?path.lastIndexOf('-'):9999)));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <div id="room_index" data-type="button" data-url="index.php" data-icon="fa-home" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_wohnzimmer" data-type="button" data-url="wohnzimmer.php" data-icon="fa-film" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_kueche" data-type="button" data-url="kueche.php" data-icon="fa-cutlery" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_schlafzimmer" data-type="button" data-url="schlafzimmer.php" data-icon="fa-bed" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_bad" data-type="button" data-url="bad.php" data-icon="fa-female" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_buero" data-type="button" data-url="buero.php" data-icon="fa-laptop" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="room_aussen" data-type="button" data-url="aussen.php" data-icon="fa-sun-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options" data-type="button" data-url="system-light.php" data-icon="fa-gears" data-color="rgb(80,80,80)" class="cell"></div>

    <div style="padding-top:30px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock" class="cells"></div>
</div>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="3" data-sizey="3">
        <header>WECKER</header>

        <div data-type="label" data-device="WECKER" class="big" style="font-size:300% !important;margin-top:15px !important;margin-bottom:20px !important"></div>

        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="WECKER_h"  
                    data-type="volume"
                    data-min="0"
                    data-max="24"
                    data-initvalue="0"
                    data-tickstep="10"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Stunde</div>
            </div>
            <div class="left">
                <div id="WECKER_m" 
                    data-type="volume"
                    data-min="0"
                    data-max="60"
                    data-initvalue="0"
                    data-tickstep="20"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Minute</div>
            </div>
        </div>

        <div class="centered container" style="margin-top:30px !important">
            <div data-type="button" 
                data-url="javascript:$.get(($('meta[name=fhemweb_url]').attr('content') || '../fhem/') + '?cmd=set+WECKER+' + $('#WECKER_h input').val() + ':' + $('#WECKER_m input').val());false" 
                data-icon="fa-clock-o" 
                data-color="#aa6900" 
                class="left" style="margin-right:16px"></div>

            <div data-type="button" 
                data-fhem-cmd="%7Bwecker_off%28%29%7D" 
                data-icon="fa-power-off" 
                data-color="#aa3333" 
                class="left"></div>
        </div>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="3">
        <header>SCHNELLWAHL</header>
        <div class="centered container" style="margin-top:10px">
                <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="01:00"
                data-get-off="!on"
                data-set-on="01:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">01:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="02:00"
                data-get-off="!on"
                data-set-on="02:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">02:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="03:00"
                data-get-off="!on"
                data-set-on="03:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">03:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="04:00"
                data-get-off="!on"
                data-set-on="04:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">04:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="05:00"
                data-get-off="!on"
                data-set-on="05:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">05:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="05:30"
                data-get-off="!on"
                data-set-on="05:30"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">05:30</div>
        </div>
        </div>
        <div class="centered container" style="margin-top:20px">
                <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="06:00"
                data-get-off="!on"
                data-set-on="06:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">06:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="06:30"
                data-get-off="!on"
                data-set-on="06:30"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">06:30</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="07:00"
                data-get-off="!on"
                data-set-on="07:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">07:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="07:30"
                data-get-off="!on"
                data-set-on="07:30"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">07:30</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="08:00"
                data-get-off="!on"
                data-set-on="08:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">08:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="08:30"
                data-get-off="!on"
                data-set-on="08:30"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">08:30</div>
        </div>
        </div>
        <div class="centered container" style="margin-top:20px">
                <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="09:00"
                data-get-off="!on"
                data-set-on="09:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">09:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="10:00"
                data-get-off="!on"
                data-set-on="10:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">10:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="11:00"
                data-get-off="!on"
                data-set-on="11:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">11:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="12:00"
                data-get-off="!on"
                data-set-on="12:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">12:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="13:00"
                data-get-off="!on"
                data-set-on="13:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">13:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="14:00"
                data-get-off="!on"
                data-set-on="14:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">14:00</div>
        </div>
        </div>
        <div class="centered container" style="margin-top:20px">
                <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="15:00"
                data-get-off="!on"
                data-set-on="15:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">15:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="16:00"
                data-get-off="!on"
                data-set-on="16:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">16:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="17:00"
                data-get-off="!on"
                data-set-on="17:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">17:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="18:00"
                data-get-off="!on"
                data-set-on="18:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">18:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="19:00"
                data-get-off="!on"
                data-set-on="19:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">19:00</div>
        </div>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="20:00"
                data-get-off="!on"
                data-set-on="20:00"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label">20:00</div>
        </div>
        </div>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
    	<header>SCHLAFZIMMER</header>
        <div class="centered container">
    <div class="right">
        <div data-type="switch" data-device="S_SWITCH_A2_TV" class="cell" data-icon="fa-desktop"></div>
        <div data-type="label" class="cell">TV</div>
    </div>
    <div class="right">
        <div data-type="switch" data-device="S_SWITCH_B2_Leselampe" class="cell"></div>
        <div data-type="label" class="cell">Regal</div>
    </div>
    <div class="right">
        <div data-type="switch" data-device="S_SWITCH_C2_Sterne" class="cell"></div>
        <div data-type="label" class="cell">Sterne</div>
    </div>
    <div class="right">
        <div data-type="switch" data-device="MILIGHT_Zone2_Schlafzimmer" class="cell" data-get="simple_state"></div>
        <div data-type="label" class="cell">Milight 2</div>
    </div>
</div>    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<div class="centered container">
    <div class="left">
	    <div id="pc" data-type="button" data-url="schlafzimmer-pc.php" data-icon="fa-desktop" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">PC</div>
    </div>
    <div class="left">
	    <div id="xbmc" data-type="button" data-url="schlafzimmer-xbmc-simple.php" data-icon="fa-play-circle" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">KODI</div>
    </div>
    <div class="left">
	    <div id="milight" data-type="button" data-url="schlafzimmer-milight.php" data-icon="fa-lightbulb-o" data-color="rgb(111,69,0)" class="cell"></div>
	    <div data-type="label">LICHT</div>
    </div>
</div>
    </li>
</ul>    </div>
</body>
</html>
