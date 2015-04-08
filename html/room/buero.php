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
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="3">
    	<header>KLIMA</header>
    	<div class="centered container">
        <div data-type="label" 
        data-subtype="Temperature"
        data-device="B_THERMO" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="B_THERMO" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
    <div style="padding-top:84px !important">
        <div data-type="thermostat" 
        data-subtype="MAX"
        data-off="off"
        data-boost="boost"
        data-min="5"
        data-max="30"
        data-device="B_HEIZUNG" 
        class="cell"></div>

    <div style="margin-top:-27px !important;margin-bottom:20px !important">
        <div data-type="label" data-device="B_HEIZUNG" data-get="valveposition" data-unit=" %" class="cell" data-fix="0" style="display:inline;margin:0 !important;"></div>
    </div>
    
    <div data-type="switch" data-device="B_HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right"></div>
    </div>
</div>    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe src="../../plots/index.html?p=P_BUERO&amp;nonav&amp;dark&amp;nolegend" width='680' height='545' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="4" data-col="7" data-sizex="1" data-sizey="1">
    	<header>WEITER</header>
    	<div class="centered container">
    <div id="pc" data-type="button" data-url="buero-pc.php" data-icon="fa-desktop" data-color="rgb(111,69,0)" class="cell"></div>
    <div data-type="label">PC</div>
</div>
    </li>
</ul>    </div>
</body>
</html>
