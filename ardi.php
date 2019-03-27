<?php

// arraytotable.php
$array = array("Atta Halilintar","Ria Ricis","Jes No Limit","MiawAug","Dedy Courbuzier");
echo "<table border='1'";
echo "<tr><th>NAMA YOUTUBER SUKSES DI INDONESIA</th></tr>";
foreach ($array as $data) {
 
	echo "<tr><td>". $data ."</td></tr>";
}
echo "</table>";
echo"</br>";

// arraytotable.php
$array = array("Captain America","Iron-Man","Thor","Spider-Man","Hulk");
echo "<table border='1'";
echo "<tr><th>NAMA SUPER HERO DI MARVEL</th></tr>";
foreach ($array as $data) {
 
	echo "<tr><td>". $data ."</td></tr>";
}
echo "</table>";
echo"</br>";


// arraytotable.php
$array = array("Iphone","Xiaomi","OPPO","VIVO","ADVAN");
echo "<table border='1'";
echo "<tr><th>MERK SMARTPHONE TERKENAL DI INDONESIA</th></tr>";
foreach ($array as $data) {
 
	echo "<tr><td>". $data ."</td></tr>";
}
echo "</table>";
echo"</br>";


// arraytotable.php
$array = array("FLOYD MAYWEATHER : PETINJU","MANNY PACQUIAO : PETINJU","C.RONALDO : SEPAK BOLA","LIONEL MESSI : SEPAK BOLA","ROGER FEDERER : PETENIS");
echo "<table border='1'";
echo "<tr><th>ATLET TERKAYA DI DUNIA</th></tr>";
foreach ($array as $data) {
 
	echo "<tr><td>". $data ."</td></tr>";
}
echo "</table>";
?>