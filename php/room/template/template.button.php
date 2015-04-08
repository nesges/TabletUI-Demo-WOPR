<?
    function button($id, $url, $icon='fa-power-off', $color='rgb(111,69,0)') {
?>
<div id="<?=$id?>" data-type="button" data-url="<?=$url?>" data-icon="<?= $icon ?>" data-color="<?=$color?>" class="cell"></div>
<?
    }
    
    function button_fhem($id, $cmd, $icon='fa-power-off', $color='rgb(111,69,0)') {
        global $ui;
?>
<div id="<?=$id?>" data-type="button" data-fhem-cmd="<?= urlencode($cmd) ?>" data-icon="<?= $icon ?>" data-color="<?=$color?>" class="cell"></div>
<?
    }
?>