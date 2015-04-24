<?
    include("ui.php");
    $ui = new UI();
    
    function streamradio_station($id,$alias,$icon) {
        ?>
        <div style="display:table">
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="{kodi_streamradio('MCP_KODI','<?=$id?>')}" data-icon="<?=$icon?>" 
                data-on-color="#ffffff"
                data-on-background-color="#0066FF"
                data-off-background-color="#2E8AE6"
                data-device="MCP_KODI_STATION" 
                data-get-on="<?=$id?>" 
                data-get-off="!on"
                class="cell"></div>
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
        <div data-type="iframe"
            data-check-src="/kodi/mcp/addons/webinterface.chorus/"
            data-src="http://<?=$mcp_user?>:<?=$mcp_pass?>@192.168.178.34:80/addons/webinterface.chorus/"
            data-fill="yes"></div>
    </li>
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="2">
        <header>PLAYER</header>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI exec skipprevious", 'fa-backward', '#AA6900') ?>
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="set MCP_KODI exec pause" data-icon="fa-pause" 
                data-on-background-color="#aa6900"
                data-off-background-color="#505050"
                data-device="MCP_KODI"
                data-get="playStatus"
                data-get-on="playing" 
                data-get-off="stopped|paused"
                class="cell"></div>
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="IF ( [MCP_KODI:playStatus] ne 'stopped' ) ( set MCP_KODI exec play ) ELSE ( {kodi_streamradio('MCP_KODI', Value('MCP_KODI_STATION'))} )" data-icon="fa-play" 
                data-on-background-color="#FFCC00"
                data-off-background-color="#505050"
                data-device="MCP_KODI"
                data-get="playStatus"
                data-get-on='paused|stopped'
                data-get-off="playing"
                class="cell"></div>
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="set MCP_KODI exec stop" data-icon="fa-stop" 
                data-on-background-color="#FFCC00"
                data-off-background-color="#505050"
                data-device="MCP_KODI"
                data-get="playStatus"
                data-get-on='paused|playing'
                data-get-off="stopped"
                class="cell"></div>
            <? button_fhem('', "set MCP_KODI exec skipnext", 'fa-forward', '#AA6900') ?>
        </div>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI mute", 'fa-volume-off', '#aa3333') ?>
            <? button_fhem('', "set MCP_KODI volumeDown", 'fa-volume-down') ?>
            <? button_fhem('', "set MCP_KODI volumeUp", 'fa-volume-up') ?>
            <? button_fhem('', "set MCP_KODI volume 100", 'fa-volume-up bold', '#aa3333') ?>
        </div>
        <div class="centered">
            <? button_fhem('', "set MCP_KODI repeat off", 'fa-long-arrow-right', '#339999') ?>
            <? button_fhem('', "set MCP_KODI repeat one", 'nesges-repeat-one', '#339999') ?>
            <? button_fhem('', "set MCP_KODI repeat all", 'nesges-repeat', '#339999') ?>
            <? button_fhem('', "set MCP_KODI shuffle off", 'nesges-ordered', '#9933FF') ?>
            <? button_fhem('', "set MCP_KODI shuffle on", 'fa-random', '#9933FF') ?>
        </div>
        <div class="centered">
            <div class="left">
                <div data-type="switch"
                    data-device="K_SWITCH_A3_Boxen"
                    data-icon="fa-power-off"
                    data-on-background-color="#505050"
                    data-on-color="#aa6900"
                    class="cell"></div>
            </div>
            <div class="left">
                <div id="<?=$id?>" 
                    data-type="button" 
                    data-fhem-cmd="set MCP_KODI reboot" data-icon="fa-refresh" 
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    data-device="MCP"
                    data-get-on='present'
                    data-get-off="absent"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    class="cell"></div>
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
            </div>
            <div class="left">
                <? button('', "kueche-streamradio-chorus.php", 'fa-star', '#0066FF') ?>
            </div>
        </div>
    </li>
    
    <li data-row="3" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.kueche-more.php") ?>
    </li>
</ul>