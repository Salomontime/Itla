<?php
 //$dolar=52.25;
 //$euro=56.00;
// $peso=200;




function ConvierteDolares($dolar=52.25,$peso=200)
{
    $TotalDolares = $peso/$dolar; 
    print "El Resultado de Convertir a Dolares Es : $TotalDolares\n";
}

function ConvierteEuros($euro=56.00,$peso=200)
{
    $TotalEuros = $peso/$euro; 
    print "El Resultado de Convertir a Euros Es : $TotalEuros\n";
}

ConvierteDolares();
echo "<br>"; 
echo "<br>"; 
ConvierteEuros();





?>