<?php
class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class anjing extends animal
{
    function bersuara()
    {
        return "gokgokgok";
    }
}

class kambing extends animal
{
    function bersuara()
    {
        return "mbekkkkk";
    }
}

class gagak extends animal
{
    function bersuara()
    {
        return "kwakkwak";
    }
}

class ayam extends animal
{
    function bersuara()
    {
        return "kukuriuk";
    }
}


// anjing
$anto = new anjing;
$anto->jumlah_kaki = 4;
$anto->bisa_terbang = "tidak bisa terbang";

echo "anto adalah anjing <br>";
echo "punya kaki sebanyak:" . $anto->jumlah_kaki . "<br>";
echo $anto->bisa_terbang . "<br>";
echo "suaranya: " . $anto->bersuara();

echo "<hr>";


// kambing
$sunar = new kambing;
$sunar->jumlah_kaki = 4;
$sunar->bisa_terbang = "tidak bisa terbang";

echo "sunar adalah kambing <br>";
echo "punya kaki sebanyak:" . $sunar->jumlah_kaki . "<br>";
echo $sunar->bisa_terbang . "<br>";
echo "suaranya: " . $sunar->bersuara();

echo "<hr>";


// gagak
$uye = new gagak;
$uye->jumlah_kaki = 2;
$uye->bisa_terbang =  "bisa terbang";

echo "uye adalah gagak <br>";
echo "punya kaki sebanyak:" . $uye->jumlah_kaki . "<br>";
echo $uye->bisa_terbang . "<br>";
echo "suaranya: " . $uye->bersuara();

echo "<hr>";


// ayam
$adre = new ayam;
$adre->jumlah_kaki = 2;
$adre->bisa_terbang = "bisa terbang";

echo "adre adalah ayam <br>";
echo "punya kaki sebanyak:" . $adre->jumlah_kaki . "<br>";
echo $adre->bisa_terbang . "<br>";
echo "suaranya: " . $adre->bersuara();

echo "<hr>";
