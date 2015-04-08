<div class="centered container">
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-globe" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=meteogram" data-icon="fa-line-chart"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de" data-icon="fa-globe"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_nacht" data-icon="fa-moon-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_morgen" data-icon="fa-forward"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_radar" data-icon="fa-wifi"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Karten</div>
    </div>
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-line-chart" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_TEMP&nonav&dark&nolegend")?>" data-icon="fa-sun-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_HUM&nonav&dark&nolegend")?>" data-icon="fa-tint"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_WINDSPEED&nonav&dark&nolegend")?>" data-icon="fa-cloud"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_PRESSURE&nonav&dark&nolegend")?>" data-icon="fa-cloud-download"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_VIS&nonav&dark&nolegend")?>" data-icon="fa-binoculars"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Plots 1</div>
    </div>
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-line-chart" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_CHOFRAIN&nonav&dark&nolegend")?>" data-icon="fa-tint"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_BEWOELKUNG&nonav&dark&nolegend")?>" data-icon="fa-cloud"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Plots 2</div>
    </div>
</div>