<?php
// class Nama
// {
//     public static $nilai = 0;

//     public static function halo()
//     {
//         return "Halo " . self::$nilai++;
//     }
// }

// echo Nama::$nilai;
// echo "<hr>";
// echo Nama::halo();
// echo Nama::halo();
// echo Nama::halo();
// echo Nama::halo();


class Nama
{
    public static $nilai = 0;
    public function halo()
    {
        return "Halo " . self::$nilai++ . " kali <br>";
    }
}

$alif = new Nama();
echo $alif->halo();
echo $alif->halo();
echo $alif->halo();

echo "<hr>";
$adit = new Nama();
echo $adit->halo();
echo $adit->halo();
echo $adit->halo();
echo $adit->halo();
