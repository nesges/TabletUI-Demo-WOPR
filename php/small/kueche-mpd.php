<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="6">
                    <header>K&Uuml;CHE MPD</header>
                    <div data-type="itunes_artwork"
                        data-device="MPD_MCP"
                        data-get='["now_artist","now_album","now_title"]'
                        data-opacity="0.2"
                        data-size=400
                        style="position:absolute;top:20px;left:-10px;"></div>
            
                    <? mpd_streamradio_control('MCP', 'mini') ?>

                    <div style="margin-top:30px">
                        <? mpd_select_station('MCP') ?>
                    </div>
                </li>
                
                <li data-row="7" data-col="1" data-sizex="3" data-sizey="1"></li>
                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-kueche.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>