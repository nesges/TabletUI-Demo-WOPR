<div class="centered container">
    <?
        temperature('W_HUMID');
        humidity('W_HUMID');
    ?>
    <div style="padding-top:33px !important">
    <?
        thermostat('W_HEIZUNG', 'W_HEIZUNG_BALKON');
    ?>
    </div>
    <div data-type="symbol" data-device="W_FENSTER_Balkon" class="cell" data-subtype="MAX"></div>
</div>