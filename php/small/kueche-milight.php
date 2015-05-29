<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="7">
                    <header>K&Uuml;CHE BELEUCHTUNG</header>
                    <? milight('MILIGHT_Zone3_Kueche'); ?>
                </li>
                
                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-kueche.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>