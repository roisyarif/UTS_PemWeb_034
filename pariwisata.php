  <?php

class Pariwisata {
	public 	$nama = "nama", 
			$lokasi = "lokasi", 
			$harga = 0;

	public function __construct($nama, $lokasi, $harga){
		$this->nama = $nama;
		$this->lokasi = $lokasi;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->nama, $this->lokasi";
	}

}
class CetakInfoPariwisata{
	public function cetak (Pariwisata $Pariwisata)
	{
		$str = "{$Pariwisata->nama} | {$Pariwisata->getLabel()} (Rp. {$Pariwisata->harga})";
		return $str;
	}
}



$pariwisata1 = new Pariwisata("Parangtritis", "Yogyakarta", 5000);
$pariwisata2 = new Pariwisata("Candi Borobudur", "Magelang", 30000);

echo "Wisata Alam : ". $pariwisata1->getLabel();
echo "<br>";
echo "Wisata Budaya : ". $pariwisata2->getLabel();
echo "<br>";

$infoPariwisata1 = new CetakInfoPariwisata();
echo $infoPariwisata1->cetak($pariwisata1);