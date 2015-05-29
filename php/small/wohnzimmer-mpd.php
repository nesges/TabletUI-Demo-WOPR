<?
    include("ui.php");
?>
<html>
    <body>
        <div class="gridster">
            <ul>
                <li data-row="1" data-col="1" data-sizex="3" data-sizey="7">
                    <header>WOHNZIMMER MPD</header>
                    <div data-type="itunes_artwork"
                        data-device="MPD_WOPR"
                        data-get='["now_artist","now_album","now_title"]'
                        data-opacity="0.2"
                        data-size=400
                        style="position:absolute;top:20px;left:-10px;"></div>
            
                    <? mpd_streamradio_control('WOPR', 'mini') ?>

                    <div style="margin-top:30px">
                        <? mpd_select_station('WOPR') ?>
                    </div>
                </li>

                <li data-row="8" data-col="1" data-sizex="3" data-sizey="1" data-template="menu-wohnzimmer.php"></li>
                <li data-row="9" data-col="1" data-sizex="3" data-sizey="1" data-template="menu.php"></li>
            </ul>
        </div>
    </body>
</html>