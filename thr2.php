<?php
class caripdam{
    public function cekpemakaian($angka){
        if($angka<=20){
            $hasil = $angka * 150;
        }elseif($angka<=40){
            $hasil =(angka-20 ) * 170 + 3000;
        }elseif($angka<=60){
            $hasil =(angka-40 ) * 210 + 3400 + 3000;
        }else{
            $hasil =(angka-60 ) * 250 + 4200 + 3400  + 3000;
        }
        echo "total biaya adalah ".$hasil;
    }
}
$cari =new caripdam();
$angka = 65;
$cari ->cekpemakaian($angka)
