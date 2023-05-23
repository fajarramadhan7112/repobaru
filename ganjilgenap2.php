<?php
class cariBilangan
{
    public function ganjil_genap($angka)
    {
        if ($angka % 2 == 0) $bil = "genap";
        else $bil = "ganjil";
        echo "angka" . $angka . "termasuk bilangan" . $bil;
    }
}
$obj = new cariBilangan();
$obj->ganjil_genap(10);
