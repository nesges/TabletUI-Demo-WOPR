<?
    include("ui.php");
    $ui = new UI();
    
    // max iframe size
    $width=680;
    $height=553;
    
    switch($_GET['content']) {
        default:
            $url = $_GET['content']; 
            break;
        case "meteogram":       $url = "http://www.yr.no/place/Germany/Rhineland-Palatinate/L%C3%BCnebach/avansert_meteogram.png"; break;
        case "austro_sat":      $url = "https://www.austrocontrol.at/jart/met/radar/satloop.gif"; break;
        case "kontor_de":       $url = "http://img.wetterkontor.de/karten/deutschland0.jpg"; break;
        case "dwd_de":          
            $url = "http://www.dwd.de/wundk/wetter/de/Deutschland.jpg"; 
            $width=540;
            $height=500;
            break;
        case "dwd_de_nacht":    
            $url = "http://www.dwd.de/wundk/wetter/de/Deutschland_heute_nacht.jpg"; 
            $width=540;
            $height=500;
            break;
        case "dwd_de_morgen":   
            $url = "http://www.dwd.de/wundk/wetter/de/Deutschland_morgen_spaet.jpg"; 
            $width=540;
            $height=500;
            break;
        case "dwd_radar":       
            $url = "http://www.dwd.de/wundk/radar/Radarfilm_WEB_DL.gif"; 
            $width=540;
            $height=500;
            break;
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe id="aussen_iframe" src="<?=$url?>" width='<?=$width?>' height='<?=$height?>' scrolling='auto' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="1">
    	<header>KLIMA</header>
    	<? include("widget/widget.aussen-klima.php") ?>
    </li>
    <li data-row="2" data-col="7" data-sizex="1" data-sizey="3">
        <header>WEITER</header>
        <? include("widget/widget.aussen-more.php") ?>
    </li>
</ul>