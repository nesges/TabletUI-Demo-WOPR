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
    <? button('room_index',         'index.php',        'fa-home')      ?>
    
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half">
        <ul class="menu">
            <li><div data-type="symbol" id="room_wohnzimmer" data-icon="nesges-sofa" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><div data-type="button"
                    data-url="wohnzimmer.php"
                    data-icon="fa-line-chart"
                    data-off-background-color="#aa6900"></div></li>
            <li><div data-type="button"
                    data-device="WATER"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="wohnzimmer-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="W_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="wohnzimmer-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone1_Wohnzimmer"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="wohnzimmer-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
        </ul>
    </div>
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half">
        <ul class="menu">
            <li><div data-type="symbol" id="room_kueche" data-icon="fa-cutlery" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'kueche.php',             'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MCP_KODI"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="kueche-streamradio.php"
                    data-icon="nesges-radio2"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'kueche-xbmc.php',        'nesges-kodi',      '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone3_Kueche"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="kueche-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'kuehlschrank.php',       'fa-star-o',        '#aa6900', true) ?></li>
        </ul>
    </div>
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="90">
        <ul class="menu">
            <li><div data-type="symbol" id="room_schlafzimmer" data-icon="fa-bed" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'schlafzimmer.php',               'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="REVO"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="schlafzimmer-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="FLUX_KODI"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="schlafzimmer-streamradio.php"
                    data-icon="nesges-radio2"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="S_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="schlafzimmer-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone2_Schlafzimmer"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="schlafzimmer-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'schlafzimmer-wecker.php', 'nesges-alarmclock', '#aa6900', true) ?></li>
        </ul>
    </div>
    
    <? button('room_bad',           'bad.php',          'fa-female')    ?>
    
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half">
        <ul class="menu">
            <li><div data-type="symbol" id="room_buero" data-icon="nesges-user-tie" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'buero.php',               'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MIST"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="buero-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li>
                <div data-type="button"
                    data-device="B_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="buero-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div>
        </ul>
    </div>

    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="90">
        <ul class="menu">
            <li><div data-type="symbol" id="room_system" data-icon="fa-info" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('options_status',     'system-status.php',            'fa-info',          '#aa6900', true)     ?></li>
            <li><? button('options_calls',      'system-calls.php',             'fa-phone',         '#aa6900', true)     ?></li>
            <li><? button('options_timers',     'system-timers.php',            'fa-clock-o',       '#aa6900', true)     ?></li>
            <li><? button('options_plots',      'system-plots.php?p=HUMID_ALL', 'fa-line-chart',    '#aa6900', true)     ?></li>
            <li><? button('options_calendar',   'system-calendar.php',          'fa-calendar',      '#aa6900', true)     ?></li>
            <li><? button('options_cinema',     'system-kino.php',              'fa-video-camera',  '#aa6900', true)     ?></li>
        </ul>
    </div>

    <? button('room_aussen',        'aussen.php',       'fa-sun-o')     ?>

    <div style="padding-top:10px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock"></div>
</div>
