<?php
class kendaraan{
	private $warna;
	private $jumlah_pntu;
	private $jumlah_roda;
	private $harga;
	private $merk;
	public function construct(){
		echo "ini adalah objek kendaraan.<br>";
	}
	public function set_harga($harga){
		$this->harga = $harga;}
	public function show_harga (){
		echo "harga kendaraan: Rp.".$this->harga.'.<br>';
	}
	public function jalan (){
		echo"broom";
	}

}
$saya_adalah_object = new kendaraan;
// $saya_adalah_object ->set_harga;
// $saya_adalah_object ->show_harga;
$saya_adalah_object ->jalan();
?>