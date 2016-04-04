<?php

?>
<form id="contactForm" action="php/mail.php" method="POST">
    <input class="form-control" type="text" name="naam" placeholder="Naam" required></input>
    <input class="form-control" type="text" name="email" placeholder="E-mail adres" required></input>
    <textArea class="form-control" type="text" name="message" placeholder="je bericht" required></textArea>
    <input type="submit" class="btn btn-success" value="verstuur"/>
    
    <br><br><p><b>Of bel ons! Tel: +32 (0)479 99 79 99</b></p>
</form>

<div id="mapid"></div>

<script>
    //init leaflet
    var mymap = L.map('mapid').setView([51.09200, 4.366033], 15);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'sammerobbroeckx.pih4612k',
        accessToken: 'pk.eyJ1Ijoic2FtbWVyb2Jicm9lY2t4IiwiYSI6ImNpbWhudHg4MDAwMHF2d2x5dTYwMmprdWoifQ.8K-5_OLy7DS3kehI6SmXHw'
    }).addTo(mymap);
    
    var marker = L.marker([51.086486, 4.366033]).addTo(mymap);
    
    marker.bindPopup("<b>De Zoete Zonde</b><br>Antwerpsestraat 5,<br> 2850 Boom").openPopup();
</script>