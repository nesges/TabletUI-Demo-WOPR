<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="7">
                    <iframe src="/kodilib/?client=MPD_WOPR&backlink=/tui/small/wohnzimmer-mpd.php&dir=<?=$_GET['dir']?>&size=mini" width="100%" height="100%"></iframe>
                </li>

                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-wohnzimmer.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>