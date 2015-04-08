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
<style>
    div.subheader {
        padding-top:0px !important;
        margin-top:8px !important;
    }
    div[type=label] {
        margin-bottom:10px;
    }
</style>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
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
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="4">
        <header>TIMER 1</header>
                <div class="centered container">
            <div data-type="label" data-device="TIMER1" style="font-size:180%;margin-top:10px !important"></div>
            <div data-type="label" data-device="TIMER1" data-get="signaldevice" style="margin-bottom:10px !important"></div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER1%22%2C+300%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">5m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER1%22%2C+600%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">10m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER1%22%2C+900%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">15m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER1%22%2C+1800%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">30m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER1%22%2C+0%29%7D" data-icon="fa-power-off" data-color="#aa3333" class="cell"></div>
            </div>
            <div style="margin-top:15px !important">
                <div data-type="button" 
                    data-fhem-cmd="%7Btimer_signaldevice_next%28%22TIMER1%22%2C+1%29%7D"
                    data-icon="fa-angle-left" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
                <div data-type="button" 
                    data-fhem-cmd="%7Btimer_signaldevice_next%28%22TIMER1%22%2C+-1%29%7D"
                    data-icon="fa-angle-right" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
        </div>
    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="4">
        <header>TIMER 2</header>
                <div class="centered container">
            <div data-type="label" data-device="TIMER2" style="font-size:180%;margin-top:10px !important"></div>
            <div data-type="label" data-device="TIMER2" data-get="signaldevice" style="margin-bottom:10px !important"></div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER2%22%2C+300%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">5m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER2%22%2C+600%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">10m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER2%22%2C+900%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">15m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER2%22%2C+1800%29%7D" data-icon="fa-clock-o" data-color="#aa6900" class="cell"></div>
                <div data-type="label">30m</div>
            </div>
            <div>
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER2%22%2C+0%29%7D" data-icon="fa-power-off" data-color="#aa3333" class="cell"></div>
            </div>
            <div style="margin-top:15px !important">
                <div data-type="button" 
                    data-fhem-cmd="%7Btimer_signaldevice_next%28%22TIMER2%22%2C+1%29%7D"
                    data-icon="fa-angle-left" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
                <div data-type="button" 
                    data-fhem-cmd="%7Btimer_signaldevice_next%28%22TIMER2%22%2C+-1%29%7D"
                    data-icon="fa-angle-right" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
        </div>
    </li>
    
    <li data-row="1" data-col="4" data-sizex="2" data-sizey="4">
        <header>TIMER 3</header>
        <div data-type="label" data-device="TIMER3" style="font-size:180%;margin-top:10px !important"></div>
        <div data-type="label" data-device="TIMER3" data-get="signaldevice" style="margin-bottom:30px !important"></div>
               
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="TIMER3_m" 
                    data-type="volume"
                    data-min="0"
                    data-max="60"
                    data-initvalue="0"
                    data-tickstep="20"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Minuten</div>
            </div>
            <div class="left">
                <div id="TIMER3_h"  
                    data-type="volume"
                    data-min="0"
                    data-max="24"
                    data-initvalue="0"
                    data-tickstep="10"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Stunden</div>
            </div>
        </div>

        <div class="centered container" style="margin-top:30px !important">
            <div data-type="button" 
                data-url="javascript:$.get(($('meta[name=fhemweb_url]').attr('content') || '../fhem/') + '?cmd=%7Bpizzatimer%28%22TIMER3%22%2C' + ($('#TIMER3_m input').val()*60 + $('#TIMER3_h input').val()*60*60) + '%29%7D');false" 
                data-icon="fa-clock-o" 
                data-color="#aa6900" 
                class="left" style="margin-right:16px"></div>
            <div data-type="button" 
                data-fhem-cmd="%7Bpizzatimer%28%22TIMER3%22%2C+0%29%7D" 
                data-icon="fa-power-off" 
                data-color="#aa3333" 
                class="left"></div>
        </div>
        
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER3%22%2C+300%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">5m</div>
            </div>
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER3%22%2C+600%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">10m</div>
            </div>
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER3%22%2C+900%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">15m</div>
            </div>
        </div>

        
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="handy|all"
                    data-get-off="!on"
                    data-set-on="handy" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-mobile" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="monitroid|all"
                    data-get-off="!on"
                    data-set-on="signaldevice monitroid" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-tablet" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="fritz|all"
                    data-get-off="!on"
                    data-set-on="signaldevice fritz" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-phone" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
        </div>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="water|all"
                    data-get-off="!on"
                    data-set-on="signaldevice water" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-desktop" 
                    data-color="#9933FF"
                    data-offcolor="#505050"                   
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="all"
                    data-get-off="!on"
                    data-set-on="signaldevice all" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-plus-circle" 
                    data-color="#9933FF"
                    data-offcolor="#505050"                   
                    class="left"></div>
            </div>
        </div>
    </li>
    
    
    <li data-row="1" data-col="6" data-sizex="2" data-sizey="4">
        <header>TIMER 4</header>
        <div data-type="label" data-device="TIMER4" style="font-size:180%;margin-top:10px !important"></div>
        <div data-type="label" data-device="TIMER4" data-get="signaldevice" style="margin-bottom:30px !important"></div>
               
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="TIMER4_m" 
                    data-type="volume"
                    data-min="0"
                    data-max="60"
                    data-initvalue="0"
                    data-tickstep="20"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Minuten</div>
            </div>
            <div class="left">
                <div id="TIMER4_h"  
                    data-type="volume"
                    data-min="0"
                    data-max="24"
                    data-initvalue="0"
                    data-tickstep="10"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Stunden</div>
            </div>
        </div>

        <div class="centered container" style="margin-top:30px !important">
            <div data-type="button" 
                data-url="javascript:$.get(($('meta[name=fhemweb_url]').attr('content') || '../fhem/') + '?cmd=%7Bpizzatimer%28%22TIMER4%22%2C' + ($('#TIMER4_m input').val()*60 + $('#TIMER4_h input').val()*60*60) + '%29%7D');false" 
                data-icon="fa-clock-o" 
                data-color="#aa6900" 
                class="left" style="margin-right:16px"></div>
            <div data-type="button" 
                data-fhem-cmd="%7Bpizzatimer%28%22TIMER4%22%2C+0%29%7D" 
                data-icon="fa-power-off" 
                data-color="#aa3333" 
                class="left"></div>
        </div>
        
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER4%22%2C+300%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">5m</div>
            </div>
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER4%22%2C+600%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">10m</div>
            </div>
            <div class="left">
                <div id="" data-type="button" data-fhem-cmd="%7Bpizzatimer%28%22TIMER4%22%2C+900%29%7D" data-icon="fa-clock-o" data-color="#6f4509" class="cell"></div>
                <div data-type="label">15m</div>
            </div>
        </div>

        
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="handy|all"
                    data-get-off="!on"
                    data-set-on="handy" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-mobile" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="monitroid|all"
                    data-get-off="!on"
                    data-set-on="signaldevice monitroid" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-tablet" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="fritz|all"
                    data-get-off="!on"
                    data-set-on="signaldevice fritz" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-phone" 
                    data-color="#9933FF"
                    data-offcolor="#505050"
                    class="left"></div>
            </div>
        </div>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="water|all"
                    data-get-off="!on"
                    data-set-on="signaldevice water" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-desktop" 
                    data-color="#9933FF"
                    data-offcolor="#505050"                   
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="all"
                    data-get-off="!on"
                    data-set-on="signaldevice all" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-plus-circle" 
                    data-color="#9933FF"
                    data-offcolor="#505050"                   
                    class="left"></div>
            </div>
        </div>        
    </li>
</ul>    </div>
</body>
</html>
