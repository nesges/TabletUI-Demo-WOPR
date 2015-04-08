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
            roomname = "options_" + path.substring(path.lastIndexOf('-') + 1, path.lastIndexOf('.'));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <div id="room_index" data-type="button" data-url="index.php" data-icon="fa-home" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_light" data-type="button" data-url="system-light.php" data-icon="fa-lightbulb-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_calls" data-type="button" data-url="system-calls.php" data-icon="fa-phone" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_timers" data-type="button" data-url="system-timers.php" data-icon="fa-clock-o" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_plots" data-type="button" data-url="system-plots.php?p=HUMID_ALL" data-icon="fa-line-chart" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_its150" data-type="button" data-url="system-its150.php" data-icon="fa-mobile" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="options_options" data-type="button" data-url="system-options.php" data-icon="fa-gears" data-color="rgb(111,69,0)" class="cell"></div>

    <div style="padding-top:80px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock" class="cell"></div>
</div>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe id="plot_iframe" src="../../plots/index.html?p=&amp;dark&amp;nonav&amp;nolegend" width='680' height='553' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
        <header>PLOTS</header>
    	<style>
    #plot_ #bg {
        color: rgb(170,105,0) !important;
        border: 3px 
    }
</style>
<div class="container">
    <div id="plot_HUMID_ALL" data-type="button" data-url="?p=HUMID_ALL" data-icon="fa-tint" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="plot_VALVE" data-type="button" data-url="?p=VALVE" data-icon="fa-steam" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="plot_SYSMON" data-type="button" data-url="?p=SYSMON" data-icon="fa-server" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="plot_CUL" data-type="button" data-url="?p=CUL" data-icon="fa-rss" data-color="rgb(111,69,0)" class="cell"></div>
    <div id="plot_FRITZ" data-type="button" data-url="?p=FRITZ" data-icon="fa-globe" data-color="rgb(111,69,0)" class="cell"></div>
</div>
    </li>
</ul>    </div>
</body>
</html>
