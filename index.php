<?php
require ("C:/home/includes/index_include.php");
#require ("index_include2.php");

GISoost_home0("GISoost - homepage");

$message="
<h1>GISoost</h1>
<blockquote>
<P>Dit is de website van GISoost, het GIS-samenwerkingsverband van de provincie Oost-Vlaanderen
met haar gemeenten. Extra informatie over deze samenwerking vind je onder de rubriek <A href='extranet.php'>lokale besturen</A>.
</P>

<P>In de <a href='gis_projecten.php'>geoloketten</A> kan je d.m.v. een standaard browser
verschillende GIS-thema's analyseren en visualiseren. Voor onder andere de Atlas van de buurtwegen en de Atlas van de waterlopen kan u ook de gegevens <a href='download.php?MENU=DATA'> downloaden </A> of bevragen via <a href='geodiensten.php'> geografische webservices</A>. Meer informatie over de gebruikte gegevens vind je bij de <a href='metadata.php'>metadata</a>. U kan zich inschrijven op onze <a href='/home/forms/nieuwsbrief.php'>nieuwsbrief</a> om op de hoogte te blijven van algemeen GISoost-nieuws en de meest recente wijzigingen op deze website</p><br>
</blockquote>
<h1>Geolokaal</h1>
<blockquote>
Een GIS-gerelateerde vraag binnen uw lokaal bestuur? Neem contact op met de 5 provinciale GIS-coördinatoren op <a href='https://sites.google.com/a/geolokaal.be/geolokaal/contactformulier'>www.geolokaal.be</A> of raadpleeg de <a href='https://sites.google.com/a/geolokaal.be/geolokaal/kennisdatabank'>de kennisdatabank</A>.
</blockquote>
";

GISoost_home($message);

?>