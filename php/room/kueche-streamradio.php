<?
    include("ui.php");
    $ui = new UI();
    
    function streamradio_station($id,$alias,$icon) {
        ?>
        <div style="display:table">
            <div class="inline"><? button_fhem($id, "{kodi_streamradio('MCP_KODI','$id')}", $icon, '#2E8AE6') ?></div>
            <div data-type="label" 
                class="inline" 
                onClick="$('#<?=$id?>').click()"><?=$alias?></div>
            <div data-type="symbol" 
                data-device="MCP_KODI_STATION" 
                data-get-on="<?=$id?>" 
                data-get-off="!on"
                data-icon="fa-chevron-left" 
                data-on-color="#aa6900" 
                data-off-color="#2a2a2a" 
                class="right"></div>
        </div>
        <?
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="2" data-col="2" data-sizex="3" data-sizey="3" id="streamradioplaylists">
        <header>STATIONS</header>
        <? streamradio_station('rockantenne',               'RA Heavy Metal', 'fa-bolt') ?>
        <? streamradio_station('rockantenneclassic',        'RA Classic Perlen', 'fa-bolt') ?>
        <? streamradio_station('rockantennealternative',    'RA Alternative', 'fa-bolt') ?>
        <? streamradio_station('tormentedradio',            'tormentedradio', 'fa-cogs') ?>
        <? streamradio_station('dlf',                       'Deutschlandfunk', 'fa-comment-o') ?>
        <? streamradio_station('dkultur',                   'DRadio Kultur', 'fa-comment-o') ?>
        <? streamradio_station('dradiowissen',              'DRadio Wissen', 'fa-comment-o') ?>
        <? streamradio_station('steffi',                    'Awesome Mix Vol.1', 'fa-music') ?>
        <? streamradio_station('dnd',                       'Dungeons & Dragons', 'nesges-skull') ?>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="6" data-sizey="1">
        <header>NOW PLAYING</header>
        <iframe src="http://<?=$mcp_user?>:<?=$mcp_pass?>@192.168.178.34:80/addons/webinterface.chorus" width='100%' height='100' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="2">
        <header>PLAYER</header>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI exec skipprevious", 'fa-backward', '#AA6900') ?>
            <? button_fhem('', "set MCP_KODI exec pause", 'fa-pause', '#AA6900') ?>
            <? button_fhem('', "set MCP_KODI exec play", 'fa-play', '#FFCC00') ?>
            <? button_fhem('', "set MCP_KODI exec stop", 'fa-stop', '#AA6900') ?>
            <? button_fhem('', "set MCP_KODI exec skipnext", 'fa-forward', '#AA6900') ?>
        </div>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI mute", 'fa-volume-off', '#aa3333') ?>
            <? button_fhem('', "set MCP_KODI volumeDown", 'fa-volume-down') ?>
            <? button_fhem('', "set MCP_KODI volumeUp", 'fa-volume-up') ?>
            <? button_fhem('', "set MCP_KODI volume 100", 'fa-volume-up bold', '#aa3333') ?>
        </div>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI repeat off", 'nesges-ordered') ?>
            <? button_fhem('', "set MCP_KODI repeat one", 'nesges-repeat-one') ?>
            <? button_fhem('', "set MCP_KODI repeat all", 'nesges-repeat') ?>
        </div>
        <div class="centered">
            <div class="left">
                <div data-type="switch"
                    data-device="K_SWITCH_A3_Boxen"
                    data-icon="fa-bolt"
                    class="cell"></div>
                <div data-type="label">Strom</div>
            </div>
            <div class="left">
                <div data-type="symbol"
                    data-device="MCP"
                    data-get-on="present"
                    data-get-off="absent"
                    data-icon="nesges-radio-tower"
                    data-background-icon="fa-circle"
                    data-on-color="#2a2a2a"
                    data-off-color="#2a2a2a"
                    class="cell"></div>
                <div data-type="label">Radio</div>
            </div>
            <div class="left">
                <? button_fhem('', "set MCP_KODI shutdown", 'fa-power-off', '#505050') ?>
                <div data-type="label">Aus</div>
            </div>
            <div class="left">
                <? button('', "kueche-streamradio-chorus.php", 'fa-star', '#0066FF') ?>
                <div data-type="label">Chorus</div>
            </div>
        </div>
    </li>
    
    <li data-row="3" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.kueche-more.php") ?>
    </li>
</ul>