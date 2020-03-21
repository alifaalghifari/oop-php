<?php

define('NAMA', "Alif alghifari"); // Tidak bisa digunakan dalam class

const UMUR = 19;


echo NAMA;
echo "<hr>";
echo UMUR;

class Buah
{
    public const NAMA_BUAH = "APEL";
    public function getNama()
    {
        return self::NAMA_BUAH;
    }
    public $kelas = __CLASS__;
}

$apel = new Buah();
echo "<hr>";
echo $apel->getNama();
echo "<hr>";
echo $apel->kelas;
