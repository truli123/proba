@extends('layouts.app')
<br><br>   
    <h2 style="text-align:center">PREGLED NASLOVA !!!</h2>
<br><br>

<?php

    $slova = range('a','z');
    $slova[] = "č"; $slova[] = "ć"; $slova[] = "dž"; $slova[] = "đ";$slova[] = "lj"; $slova[] = "nj"; $slova[] = "š";	$slova[] = "ž";
    asort($slova);
    echo "| ";
    foreach($slova as $slovo) 
{
    echo "<a href='show/$slovo' >".$slovo."</a> | ";
   
}
   
  
?>

