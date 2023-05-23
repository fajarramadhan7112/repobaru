<?php
 class cariBilangan{
 	public function ganjil_genap($angka){
 		$this ->angka= $angka;
 	}
 	public function ganjil_geanp_2(){
 		if ($this->angka % 2==0){
 			echo $this->angka ."adalah bilangan genap";
 		}else{
 			echo $this->angka."adalah bilangan ganjil";
 		}
 	}
 }
 $obj = new cariBilangan();
 $obj->ganjil_genap(10);
?>