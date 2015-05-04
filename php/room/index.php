<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <li data-row="1" data-col="2" data-sizex="1" data-sizey="3">
    	<header>WOHNZIMMER</header>
        <? include("widget/widget.wohnzimmer-heizung.php") ?>
    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
    	<header>B&Uuml;RO</header>
    	<? include("widget/widget.buero-heizung.php") ?>
    </li>
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;CHE</header>
    	<? include("widget/widget.kueche-klima.php") ?>
    </li>
    <li data-row="2" data-col="4" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;HLSCHRANK</header>
    	<? include("widget/widget.kuehlschrank-klima.php") ?>
    </li>
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="2">
    	<header>SCHLAFZIMMER</header>
    	<? include("widget/widget.schlafzimmer-klima.php") ?>
    </li>
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="2">
    	<header>BAD</header>
    	<? include("widget/widget.bad-klima.php") ?>
    </li>
        
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
    	<header>AUSSEN</header>
    	<div class="centered" style="margin-bottom:25px">
    	    <div class="left">
    	        <? include("widget/widget.aussen-klima.php") ?>
    	    </div>
        </div>
        <? include("widget/widget.weather-vertical.php") ?>
        <div class="centered" style="padding-top:10px !important;padding-bottom:15px !important">
            <a href="aussen.php">
                <div class="left">
                    <div data-type="weather" 
                        data-device="Wetter"
                        data-get="fc2_condition"
                        data-imageset="meteocons"
                        style="font-size:12px;padding:0;margin:0;margin-top:-5px;"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc2_high_c" data-unit="&deg;C"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc2_day_of_week"></div>
                </div>
                <div class="left" style="padding-left:10px;padding-right:10px">
                    <div data-type="weather" 
                        data-device="Wetter"
                        data-get="fc3_condition"
                        data-imageset="meteocons"
                        style="font-size:12px;padding:0;margin:0;margin-top:-5px;"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc3_high_c" data-unit="&deg;C"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc3_day_of_week"></div>
                </div>
                <div class="left">
                    <div data-type="weather" 
                        data-device="Wetter"
                        data-get="fc4_condition"
                        data-imageset="meteocons"
                        style="font-size:12px;padding:0;margin:0;margin-top:-5px;"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc4_high_c" data-unit="&deg;C"></div>
                    <div data-type="label" data-device="Wetter" data-get="fc4_day_of_week"></div>
                </div>
            </a>
        </div>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="3" data-sizey="1">
        <header>ANWESENHEIT</header>
        <? include("widget/widget.anwesenheit.php") ?>
    </li>
    <li data-row="4" data-col="5" data-sizex="2" data-sizey="1">
    	<header>VERSCHIEDENES</header>
    	
    	<div class="centered container">
    	    <div class="left">
                <div data-type="circlemenu" class="cell circlemenu">
                    <ul class="menu">
                        <li><div data-type="symbol" id="room_system" data-icon="fa-sliders" data-off-color="#505050" data-background-icon="fa-circle-thin"></div></li>
                        <li><? button('', 'system-options.php',   'fa-gears',       '#aa6900', true) ?></li>
                        <li><? button('', 'system-light.php',     'fa-lightbulb-o', '#aa6900', true) ?></li>
                        <li><? button('', 'system-its150.php',    'fa-mobile',      '#aa6900', true) ?></li>
                    </ul>
                </div>
                <div data-type="label" class="cell">Optionen</div>
            </div>
    	    
    	    <div class="left">
                <div data-type="circlemenu" class="cell circlemenu">
                    <ul class="menu">
                        <li><div data-type="symbol" data-icon="fa-clock-o" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                        <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',600)}" data-icon="" data-off-background-color="#aa6900">10</div></li>
                        <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',900)}" data-icon="" data-off-background-color="#aa6900">15</div></li>
                        <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',1800)}" data-icon="" data-off-background-color="#aa6900">30</div></li>
                        <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice handy" data-icon="fa-mobile" data-off-background-color="#9933FF"></div></li>
                        <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice monitroid" data-icon="fa-tablet" data-off-background-color="#9933FF"></div></li>
                        <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice fritz" data-icon="fa-phone" data-off-background-color="#9933FF"></div></li>
                        <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',300)}" data-icon="" data-off-background-color="#aa6900">5</div></li>
                    </ul>
                </div>
                <div data-type="label" class="cell" data-device="TIMER1" data-get="signaldevice"></div>
            </div>
    	    
    	    <div class="left">
    	        <div data-type="button"
    	            data-device="MISSED_CALL"
    	            data-get-off="&amp;nbsp;"
    	            data-get-on="!off"
    	            data-off-background-color="#505050"
    	            data-on-background-color="#aa6900"
    	            data-icon="fa-phone"
    	            data-url="system-calls.php"
    	            class="cell"
    	        ></div>
    	        <a style='color:white;text-decoration:none' href="javascript:$.get('<?= $ui->fhemweb_url."?cmd=".urlencode('trigger MISSED_CALL clear') ?>&amp;XHR=1');false;">
    	            <div data-type="label" data-device="MISSED_CALL" data-get="name"></div>
    	            <div data-type="label" data-device="MISSED_CALL" data-get="number"></div>
                </a>
            </div>
        </div>
    </li>    

    
    <li data-row="3" data-col="4" data-sizex="3" data-sizey="1">
    	<header>FAVORITEN</header>
    	<? include("widget/widget.favoriten.php") ?>
    </li>
</ul>