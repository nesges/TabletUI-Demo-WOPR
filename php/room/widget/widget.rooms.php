<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "room_" + path.substring(path.lastIndexOf('/') + 1, Math.min(path.lastIndexOf('.'), (path.lastIndexOf('-')>0?path.lastIndexOf('-'):9999)));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <?
    //<div data-type="pagetab" data-url="index.php"  data-icon="fa-home" class="cell"></div>
    //<div data-type="pagetab" data-url="wohnzimmer.php" data-icon="nesges-sofa" class="cell"></div>
    //<div data-type="pagetab" data-url="kueche.php" data-icon="fa-cutlery" class="cell"></div>
    //<div data-type="pagetab" data-url="schlafzimmer.php" data-icon="fa-bed" class="cell"></div>
    //<div data-type="pagetab" data-url="bad.php" data-icon="fa-female" class="cell"></div>
    //<div data-type="pagetab" data-url="buero.php" data-icon="nesges-user-tie" class="cell"></div>
    //<div data-type="pagetab" data-url="aussen.php" data-icon="fa-sun-o" class="cell"></div>
    //<div data-type="pagetab" data-url="system-light.php" data-icon="fa-gears" class="cell"></div>
    ?>
        
    <? button('room_index',         'index.php',        'fa-home')      ?>
    <? button('room_wohnzimmer',    'wohnzimmer.php',   'nesges-sofa')  ?>
    <? button('room_kueche',        'kueche.php',       'fa-cutlery')   ?>
    <? button('room_schlafzimmer',  'schlafzimmer.php', 'fa-bed')       ?>
    <? button('room_bad',           'bad.php',          'fa-female')    ?>
    <? button('room_buero',         'buero.php',        'nesges-user-tie')    ?>
    <? button('room_aussen',        'aussen.php',       'fa-sun-o')     ?>
    <? button('options',            'system-light.php', 'fa-sliders', 'rgb(80,80,80)')    ?>

    <div style="padding-top:30px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock"></div>
</div>
