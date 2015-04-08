<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <iframe src="http://<?=$kodi_user?>:<?=$kodi_pass?>@192.168.178.31:8080/addons/webinterface.chorus" width='767' height='553' scrolling='auto' allowtransparency='true' frameborder='0'></iframe>
    </li>
</ul>