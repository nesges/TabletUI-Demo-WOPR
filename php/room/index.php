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
    
    <li data-row="4" data-col="6" data-sizex="1" data-sizey="1">
    	<header>ANRUFE</header>
    	<div class="container">
    	    <a style='color:white;text-decoration:none' href="javascript:$.get('<?= $ui->fhemweb_url."?cmd=".urlencode('trigger MISSED_CALL clear') ?>&amp;XHR=1');false;">
    	        <div data-type="label" data-device="MISSED_CALL" data-get="name"></div>
    	        <div data-type="label" data-device="MISSED_CALL" data-get="number"></div>
            </a>
    	    <div data-type="button"
    	        data-device="MISSED_CALL"
    	        data-get-off="&amp;nbsp;"
    	        data-get-on="!off"
    	        data-off-background-color="#505050"
    	        data-on-background-color="#aa6900"
    	        data-icon="fa-phone"
    	        data-url="system-calls.php"
    	    ></div>
        </div>
    </li>    
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
    	<header>AUSSEN</header>
    	<div class="centered" style="margin-bottom:50px">
    	    <div class="left">
    	        <? include("widget/widget.aussen-klima.php") ?>
    	    </div>
        </div>
        <? include("widget/widget.weather-vertical.php") ?>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
        <header>ANWESENHEIT</header>
        <? include("widget/widget.anwesenheit.php") ?>
    </li>
    
    <li data-row="3" data-col="4" data-sizex="3" data-sizey="1">
    	<header>FAVORITEN</header>
    	<? include("widget/widget.favoriten.php") ?>
    </li>
</ul>