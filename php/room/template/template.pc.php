<?
    function pc($host) {
        $xbmc['MIST'] = 'B_XBMC';
        $xbmc['REVO'] = 'S_XBMC';
        $xbmc['WATER'] = 'W_XBMC';
?>
<li data-row="1" data-col="2" data-sizex="3" data-sizey="2">
	<header>WINAMP</header>
    <div class="centered container">
	    <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'rockantenne') }", 'fa-bolt', '#2E8AE6') ?>
	        <div data-type="label">RA Metal</div>
        </div>
	    <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'rockantenneclassic') }", 'fa-bolt', '#2E8AE6') ?>
	        <div data-type="label">RA Classic</div>
        </div>
	    <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'rockantennealternative') }", 'fa-bolt', '#2E8AE6') ?>
	        <div data-type="label">RA Alternative</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'rockradiodeathmetal') }", 'fa-bolt', '#2E8AE6') ?>
	        <div data-type="label">RR Death</div>
        </div>
    </div>
    <div class="centered container">
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Start')}", 'fa-play-circle') ?>
            <div data-type="label">Ein</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'tormentedradio') }", 'fa-gears', '#2E8AE6') ?>
	        <div data-type="label">tormented</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'digitalgunfire') }", 'fa-gears', '#2E8AE6') ?>
	        <div data-type="label">DGunfire</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'ebmradio') }", 'fa-gears', '#2E8AE6') ?>
	        <div data-type="label">EBMr</div>
        </div>
    </div>
    <div class="centered container">    
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Exit')}", 'fa-power-off') ?>
	        <div data-type="label">Aus</div>
	    </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'dlf') }", 'fa-comment-o', '#2E8AE6') ?>
	        <div data-type="label">DLF</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'dkultur') }", 'fa-comment-o', '#2E8AE6') ?>
	        <div data-type="label">DKultur</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{ winamp_streamradio('".$host."', 'dradiowissen') }", 'fa-comment-o', '#2E8AE6') ?>
	        <div data-type="label">DWissen</div>
        </div>
    </div>
</li>
<li data-row="1" data-col="5" data-sizex="3" data-sizey="2">
    <div data-type="itunes_artwork"
        data-device="<?=$host?>_INFO"
        data-get='["WinampSongTitle"]'
        data-stripbrackets="true"
        data-notfoundimg="../images/empty.svg"
        data-stripregex=" -"
        data-opacity="0.2"
        data-size=280
        style="position:absolute;bottom:-5px;left:50px;"></div>
    <div class="centered container" style="margin-top:20px !important">
	    <div class="left">
	        <? button_fhem('', "{winamp('".$host."', 'Play Toggle')}", 'fa-play', '#FFCC00') ?>
	        <? button_fhem('', "{winamp('".$host."', 'Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
	        <? button_fhem('', "{winamp('".$host."', 'Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
        </div>
    </div>
    <div class="centered container" style="margin-top:20px !important">
	    <div class="left">
	        <? button_fhem('', "{winamp('".$host."', 'Previous')}", 'fa-step-backward') ?>
	        <? button_fhem('', "{winamp('".$host."', 'Next')}", 'fa-step-forward') ?>
	    </div>
    </div>
    <div class="centered container" style="margin-top:10px !important">
        <div data-type="label" 
            data-device="<?=$host?>_INFO" 
            data-get="WinampSongTitle"
            data-substitution="s/(.*?)\s*-\s*(.*)\s*(\(.*?\))/$3<br>$1 - $2/"
            ></div>
    </div>
    <div class="centered container" style="margin-top:15px !important">
	    <div class="left">
	        <div data-type="slider"
	            data-device="<?=$host?>"
	            data-cmd="setreading"
	            data-get="winampVolume"
	            data-set="winampVolume"
	            class="horizontal"
	            style="width:200px"></div>
	    </div>
    </div>
    <style>
        .range-handle, .range-bar {
            box-shadow:0px 0px 20px white;
        }
        [data-type=slider] {
            padding-left:35px;
        }
    </style>
</li>

<li data-row="3" data-col="2" data-sizex="6" data-sizey="1">
	<header>KODI</header>
	<div class="centered container">
	    <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="nesges-kodi" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Start')}" data-icon="fa-play-circle" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Focus')}" data-icon="fa-bullseye" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Exit')}" data-icon="fa-power-off" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
        </div>
	    <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'KODI Play')}", 'fa-play', '#FFCC00') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Down')}", 'fa-angle-down', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Up')}", 'fa-angle-up', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Info')}", 'fa-info') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Back')}", 'fa-arrow-circle-o-left') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Fullscreen')}", 'fa-desktop') ?>
        </div>
    </div>

	<div style="display:none" id="xbmc_playstatus"    data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="playStatus" data-fix=0></div>
	<div style="display:none" id="xbmc_show"    data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentShowtitle" data-fix=0></div>
	<div style="display:none" id="xbmc_season"  data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="season" data-fix=0></div>
	<div style="display:none" id="xbmc_episode" data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="episode" data-fix=0></div>
	<div style="display:none" id="xbmc_title"   data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentTitle" data-fix=0></div>
	<div style="display:none" id="xbmc_artist"  data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentArtist" data-fix=0></div>
	<div style="display:none" id="xbmc_album"   data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentAlbum" data-fix=0></div>
    <div class="centered container">
        <div id="xbmc_status" data-type="label" style="margin-top:20px !important"></div>
    </div>
</li>

<li data-row="4" data-col="4" data-sizex="2" data-sizey="1">
	<header>PC</header>
	<div class="centered container">
	    <div class="left">
            <div data-type="circlemenu" class="cell circlemenu keepopen">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-volume-up" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Mute Toggle')}" data-icon="fa-volume-off" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Volume Up')}" data-icon="fa-volume-up" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Volume Down')}" data-icon="fa-volume-down" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Volume</div>
        </div>
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-power-off" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Shutdown')}" data-icon="fa-power-off" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Hibernate')}" data-icon="fa-pause" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Restart')}" data-icon="fa-repeat" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Shutdown</div>
        <div>
    </div>
</li>

<?
    }
?>