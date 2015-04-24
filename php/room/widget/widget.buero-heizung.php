<div class="centered container">
    <?
        temperature('B_THERMO');
    ?>
    <div style="padding-top:84px !important">
    <?
        thermostat('B_HEIZUNG');
    ?>
    </div>
    <? battery('B_HEIZUNG', 'position:absolute;bottom:0;left:0;') ?>
</div>