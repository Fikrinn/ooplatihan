<?php
{
    //property / atribut
    class kucing{
public $warna = "Hitam";
public $jumlahkaki = 4;
public $jenisbulu = "panjang";
public $makananfavorit = "ikan pindang";

//method berhavior
public function bersuara()
{
    return "Meong... Meong... Meong...";
}

public function berburu()
{
    return "Berburu ikan";
}
}

//incase you need
$kucing1 = new kucing();
echo "Warna kucing = ". $kucing1 -> warna;
echo "<br>";
echo "Suara = ". $kucing1 ->berburu();
}