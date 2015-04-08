<?
    include('../../secrets.php');
    
    include_once("template/template.button.php");
    include_once("template/template.milight.php");
    include_once("template/template.light.php");
    include_once("template/template.pc.php");
    include_once("template/template.its150.php");
    include_once("template/template.kodi.php");
    include_once("template/template.klima.php");

    $ftui="../fhem-tablet-ui/www/tablet/";

    class UI {
        function __construct($fhemweb_url='/fhem', $longpoll=1, $widget_base_width=120, $widget_base_height=131, $daydream=1) {
            global $ftui;
            
            $this->fhemweb_url = $fhemweb_url;
            $this->longpoll = $longpoll;
            $this->widget_base_width = $widget_base_width;
            $this->widget_base_height = $widget_base_height;
            $this->daydream=$daydream;
?>
<!doctype html>
<html>
<head>
    <title>TUI</title>
    <?
        if ($_SERVER['REMOTE_ADDR'] == '192.168.178.88') {
            // monitroid
            ?><meta name="viewport" content="width=device-width, initial-scale=1.15, maximum-scale=1.15 user-scalable=no"><?
        } else if ($_SERVER['REMOTE_ADDR'] == '192.168.178.49' || $_SERVER['REMOTE_ADDR'] == '2003:7a:cf25:f700:4b3:2521:7e23:700a' ) {
            // iPad
            ?><meta name="viewport" content="width=device-width, initial-scale=1.1, maximum-scale=1.1 user-scalable=no"><?
        } else if ($_SERVER['REMOTE_ADDR'] == '192.168.178.51') {
            // handy
            ?><meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes"><?
        } else {
            ?><meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes"><?
            //print_r($_SERVER);
        }
    ?>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="widget_base_width" content="<?=$this->widget_base_width?>">
    <meta name="widget_base_height" content="<?=$this->widget_base_height?>">
    <meta name="fhemweb_url" content="<?=$this->fhemweb_url?>">
    <meta name="longpoll" content="<?=$this->longpoll?>">
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
    
    <link rel="stylesheet" href="<?= $ftui ?>lib/jquery.gridster.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>css/fhem-tablet-ui.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/jquery.toast.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/powerange.min.css" />

    <link rel="stylesheet" href="../css/wopr.css">
    
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.knob.mod.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.toast.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/fa-multi-button.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/powerange.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.circlemenu.js"></script>
    
    <script type="text/javascript" src="../js/subtype-defaults.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>js/fhem-tablet-ui.js"></script>

    <script type="text/javascript" src="../js/devices.js"></script>
    <script type="text/javascript" src="../js/colors.js"></script>
<?
            if($daydream) {
?>
    <meta name="daydream_starttime" content="1800000">
    <meta name="daydream_slowdown" content="10000">
    <script type="text/javascript" src="../js/daydream.js"></script>
<?
            }
?>
</head>
<body>
    <div class="gridster">
<?
        }


        function __destruct() {
?>
    </div>
</body>
</html>
<?
        }
    }
?>
