<?php
header("HTTP/1.1 301 Moved Permanently"); 
$nuevaURL = 'https://www.srcodigofuente.es';
header('Location: '. $nuevaURL);
?>