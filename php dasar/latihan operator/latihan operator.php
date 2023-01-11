<?php
// operator , aritmatika ,(+-*:)= matematika //
$x = 78;
$y = 76;
echo $x + $y;
// operator assignment = penugasan //
// = (sama dengan), += (pertambahan) , -= (pengurangan) , *= (perkalian) , /= (pembagian) , %= (modulus), .= (titik sama dengan) //
$a = 1;
$a += 5;
echo "$a";
echo " " ;
$nama="agung";
$nama=" ";
$nama.="gumelar";
echo ' ';
echo " " ;
// operator perbandingan //
// < (lebih kecil dari) , > (lebih besar dari) , <=(lebih kecil sama dengan) , >=( lebih besar sama dengan) , == (sama dengan2) != (tidak sama dengan)//
var_dump(1<5);
var_dump(1>5);
var_dump(1=="1");
echo ' ';
// operator identitas //
// === (sama dengan3) , !== (tidak sama dengan2)//
var_dump(1==="1");

//operator logika//
// && (dan) , || (or) ,! (not)//
$f=30;
var_dump($f < 20 && $f % 3 == 0);
var_dump($f > 20 || $f % 3 == 0);
?>