<?
    include("ui.php");
    $ui = new UI();
    
    function wecker_preset($time) {
?>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="WECKER"
                data-get-on="<?=$time?>"
                data-get-off="!on"
                data-set-on="<?=$time?>"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label"><?=$time?></div>
        </div>
<?
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
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
                data-fhem-cmd="<?=urlencode('{wecker_off()}')?>" 
                data-icon="fa-power-off" 
                data-color="#aa3333" 
                class="left"></div>
        </div>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="3">
        <header>SCHNELLWAHL</header>
        <div class="centered container" style="margin-top:10px">
        <?
            wecker_preset('01:00');
            wecker_preset('02:00');
            wecker_preset('03:00');
            wecker_preset('04:00');
            wecker_preset('05:00');
            wecker_preset('05:30');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('06:00');
            wecker_preset('06:30');
            wecker_preset('07:00');
            wecker_preset('07:30');
            wecker_preset('08:00');
            wecker_preset('08:30');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('09:00');
            wecker_preset('10:00');
            wecker_preset('11:00');
            wecker_preset('12:00');
            wecker_preset('13:00');
            wecker_preset('14:00');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('15:00');
            wecker_preset('16:00');
            wecker_preset('17:00');
            wecker_preset('18:00');
            wecker_preset('19:00');
            wecker_preset('20:00');
        ?>
        </div>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
    	<header>SCHLAFZIMMER</header>
        <? include("widget/widget.schlafzimmer-switches.php") ?>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.schlafzimmer-more.php") ?>
    </li>
</ul>