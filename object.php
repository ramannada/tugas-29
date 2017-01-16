<?php

class Sepeda
{
  //property
  protected $namaSepeda;
  protected $pemilik;
  protected $tipeGear;
  protected $jumlahRoda = 2;

  //method
  public function setNamaSepeda($nama)
  {
    $this->namaSepeda = $nama;
  }
  public function setPemilik($nama)
  {
    $this->pemilik = $nama;
  }
  public function setJumlahRoda($jumlahRoda)
  {
    $this->jumlahRoda = $jumlahRoda;
  }

  public function setGear($tipeGear)
  {
    $this->tipeGear = $tipeGear;
  }
  public function tampil()
  {
    echo "Nama Sepeda: " . $this->namaSepeda ."<br/>";
    echo "Pemilik: " . $this->pemilik ."<br/>";
    echo "Jumlah Roda: " . $this->jumlahRoda ."<br/>";
    echo "Tipe Gear: "  . $this->tipeGear ."<br/>";
  }
}

//membuat objek
$polygon = new Sepeda();

//set property
$polygon->setNamaSepeda("Polygon");
$polygon->setPemilik("Labib");
$polygon->setJumlahRoda(2);
$polygon->setGear("Shimano");
//tampilkan objek
$polygon->tampil();
echo "<br/>";
// ==========================================
class Motor extends Sepeda{
  //property
  protected $mesin, $topSpeed;

  //method
  public function setTopSpeed($speed)
  {
    $this->topSpeed = $speed;
  }
  public function setMesin($mesin)
  {
    $this->mesin = $mesin;
  }
  public function tampilMotor()
  {
    $this->tampil();
    echo "Mesin: " . $this->mesin ."<br/>";
    echo "Top Speed: " . $this->topSpeed . "<br/>";
  }
}
//objek
$mxking = new Motor();

//set property
$mxking->setNamaSepeda("Yamaha MX King");
$mxking->setPemilik("Muhajir");
$mxking->setJumlahRoda(2);
$mxking->setGear("5 Speed");
$mxking->setMesin("150 cc");
$mxking->setTopSpeed("130 km/h");

//tampilkan property objek
$mxking->tampilMotor();
echo "<br/>";

//=====================================================
class Pc{
  protected $cpu, $vga, $hdd, $ssd, $ram;
  private $powerSupply;

  public function setCpu($cpu)
  {
    $this->cpu = $cpu;
  }
  public function setRam($ram)
  {
    $this->ram = $ram;
  }
  public function setVga($vga)
  {
    $this->vga = $vga;
  }
  public function setHdd($hdd)
  {
    $this->hdd = $hdd;
  }
  public function setSsd($ssd)
  {
    $this->ssd = $ssd;
  }
  public function setPowerSupply($watt)
  {
    $this->powerSupply = $watt;
  }
  public function tampilSpek()
  {
    echo "Prosesor: " . $this->cpu . "<br/>";
    echo "VGA Card: " . $this->vga . "<br/>";
    echo "RAM: " . $this->ram . "<br/>";
    if (!empty($this->ssd)) {
      echo "SSD: " . $this->ssd . "<br/>";
    }
    echo "Harddisk: " . $this->hdd . "<br/>";
    if (!empty($this->powerSupply)){
      echo "Power Supply: " . $this->powerSupply . "<br/>";
    }
  }
}

//buat objek
$rig = new Pc();

//set property
$rig->setCpu("Intel Core i7 7300 3.2 GHz Turbo Boost up to 3.7 GHz");
$rig->setRam("Viper 4x8 GB DDR4");
$rig->setVga("Nvidia GTX 980 GDDR5 4 GB");
$rig->setHdd("WD Blue 3 TB");
$rig->setSsd("Corsair 512 GB");
$rig->setPowerSupply("Blue Cobra 450 Watt");

//tampilkan pc
$rig->tampilSpek();
echo "<br/>";
//==============================================
class Laptop extends Pc
{
  //property
  private $layar, $baterai, $berat, $kamera;

  //method
  public function setLayar($layar)
  {
    $this->layar = $layar;
  }
  public function setBaterai($baterai)
  {
    $this->baterai = $baterai;
  }
  public function setBerat($berat)
  {
    $this->berat = $berat;
  }
  public function setKamera($kamera)
  {
    $this->kamera = $kamera;
  }
  public function tampilSpekLaptop()
  {
    echo "Layar " . $this->layar . "<br/>";
    $this->tampilSpek();
    echo "Baterai" . $this->baterai . "<br/>";
    echo "Kamera: " . $this->kamera . "<br/>";
    echo "Berat: " . $this->berat . "<br/>";
  }
}

//objek
$msi = new Laptop();

//set property
$msi->setLayar("14 inci Full HD 1080p");
$msi->setCpu("AMD FX8350 3.5 Ghz");
$msi->setRam("2x8 GB DDR4");
$msi->setVga("AMD Radeon R9 290X 4 GB GDDR5");
$msi->setSsd("256 GB");
$msi->setHdd("1 TB");
$msi->setBaterai("6 Cell");
$msi->setKamera("2 Megapiksel");
$msi->setBerat("2 kg");

//tampil objek
$msi->tampilSpekLaptop();
echo  "<br/>";

//============================================================
class Ponsel
{
  //property
  protected $nama, $jaringan, $layar, $internal;

  //method
  public function setNama($nama)
  {
    $this->nama = $nama;
  }
  public function setJaringan($jaringan)
  {
    $this->jaringan = $jaringan;
  }
  public function setLayar($layar)
  {
    $this->layar = $layar;
  }
  public function setInternal($internal)
  {
    $this->internal = $internal;
  }
  public function tampilSpek()
  {
    echo "Nama ponsel: " . $this->nama . "<br/>";
    echo "Jaringan: " . $this->jaringan . "<br/>";
    echo "Layar: " . $this->layar . "<br/>";
    echo "Internal: " . $this->internal . "<br/>";
  }
}

//objek
$nokia = new Ponsel();

//set property
$nokia->setNama("2100");
$nokia->setJaringan("2G");
$nokia->setLayar("2 inci");
$nokia->setInternal("70 mb");

$nokia->tampilSpek();
echo  "<br/>";

class PonselPintar extends Ponsel
{
 public $prosesor, $ram, $kamera;

 public function tampilSpekPonsel()
 {
   $this->tampilSpek();
   echo "Prosesor: " . $this->prosesor . "<br/>";
   echo "RAM: " . $this->ram . "<br/>";
   echo "Kamera: " . $this->kamera. "<br/>";
 }
}

//objek
$lg = new PonselPintar();

$lg->setNama("LG V20");
$lg->setJaringan("4G LTE with VoLTE");
$lg->setLayar("5,5 inci");
$lg->setInternal("64 GB");
$lg->prosesor = "Snapdragon 820";
$lg->ram = "4 GB";
$lg->kamera = "16 megapiksel + 8 megapiksel";

$lg->tampilSpekPonsel();
echo "<br/>";
//================================================================

class PonselOutdoor extends Ponsel
{
  protected $ketahanan, $sertifikat;

  public function setProperty($nama, $jaringan, $layar,
    $internal, $ketahanan, $sertifikat)
  {
    $this->nama = $nama;
    $this->jaringan = $jaringan;
    $this->layar = $layar;
    $this->internal = $internal;
    $this->ketahanan = $ketahanan;
    $this->sertifikat = $sertifikat;

  }
  public function tampilSpekOutdoor()
  {
    $this->tampilSpek();
    echo "Ketahanan: " . $this->ketahanan . "<br/>";
    echo "Sertifikat: " . $this->sertifikat . "<br/>";
  }
}

//objek
$cat = new PonselOutdoor();

$cat->setProperty("E11", "2G", '2.7 inci', "128 MB", "Debu dan Air", "IP68");

$cat->tampilSpekOutdoor();
echo "<br/>";

//======================================================
class PonselPintarOutdoor extends PonselOutdoor
{
  private $prosesor, $ram, $kamera;

  public function setSpek($nama, $jaringan, $layar,
    $internal, $ketahanan, $sertifikat, $prosesor, $ram, $kamera)
  {
    $this->setProperty($nama, $jaringan, $layar, $internal, $ketahanan,
    $sertifikat);
    $this->prosesor = $prosesor;
    $this->ram = $ram;
    $this->kamera = $kamera;
  }

  public function tampilSpekPonselOutdoor()
  {
    $this->tampilSpekOutdoor();
    echo "Prosesor: " . $this->prosesor . "<br/>";
    echo "RAM: " . $this->ram . "<br/>";
    echo "Kamera: " . $this->kamera . "<br/>";
  }
}

//objek
$cat_smart = new PonselPintarOutdoor();

$cat_smart->setSpek("S225", "4G LTE", "5 inci HD", "32 GB", "Benturan,
Debu dan Air", "IP58", "Snapdragon 625 octa core", "2 GB", "12 megapiksel");

$cat_smart->tampilSpekPonselOutdoor();
echo  "<br/>";

//=============================================
class PonselKamera extends PonselPintar
{
  private $fiturKamera, $lensa;

  public function setPonselKamera($nama, $jaringan, $layar, $internal, $prosesor, $ram,
  $kamera, $fitur, $lensa)
  {
    $this->setNama($nama);
    $this->setJaringan($jaringan);
    $this->setLayar($layar);
    $this->setInternal($internal);
    $this->prosesor = $prosesor;
    $this->ram = $ram;
    $this->kamera = $kamera;
    $this->fiturKamera =  $fitur;
    $this->lensa = $lensa;
  }

  public function tampilPonselKamera()
  {
    $this->tampilSpekPonsel();
    echo "Fitur: " . $this->fiturKamera . "<br/>";
    echo "Lensa: " . $this->lensa . "<br/>";
  }
}

//objek
$galaxy_zoom = new PonselKamera();

$galaxy_zoom->setPonselKamera("Galaxy Zoom 17", "4G", "5 inci", "32 GB", "Snapdragon 808",
"3 GB", "2 x 12 megapiksel", "Manual Focus, Shutter Speed, ISO","ISOCELL 4000");

$galaxy_zoom->tampilPonselKamera();
echo "<br/>";
//=========================================
class Buku
{
  private $merek;
  protected $halaman, $sampul;

  public function setBuku($merek, $hal, $gambar)
  {
    $this->merek = $merek;
    $this->halaman = $hal;
    $this->sampul = $gambar;
  }

  public function tampilBuku()
  {
    if (isset($this->merek)) {
      echo "Merek: " . $this->merek . "<br/>";
    }
    echo "Sampul: " . $this->sampul . "<br/>";
    echo "Halaman: " . $this->halaman . " halaman <br/>";
  }
}
//objek
$kiko = new Buku();
$kiko->setBuku("Kiko", 32, "Beruang");
$kiko->tampilBuku();
echo  "<br/>";
//===========================================
class Novel extends Buku
{
  private $judul, $pengarang, $kategori;

  public function setNovel($judul, $pengarang, $kategori, $halaman, $sampul)
  {
    $this->judul = $judul;
    $this->pengarang = $pengarang;
    $this->kategori = $kategori;
    $this->halaman = $halaman;
    $this->sampul = $sampul;
  }
  public function tampilNovel()
  {
    echo "Judul: " . $this->judul . "<br/>";
    echo "Pengarang: " . $this->pengarang . "<br/>";
    echo "Kategori: " . $this->kategori . "<br/>";
    echo "Halaman: " . $this->halaman . " halaman" . "<br/>";
    echo "Sampul: " . $this->sampul . "<br/>";
  }
}

$novel = new Novel();
$novel->setNovel("Phoenix Sang Nyala Api", "Eljeer", "Mitologi", 200, "Phoenix Terbang");
$novel->tampilNovel();
echo "<br/>";

//========================================================
class Biografi extends Buku
{
  private $penulis, $tokoh, $judul;

  public function setBiografi($judul, $penulis, $tokoh, $hal, $sampul)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->tokoh = $tokoh;
    $this->halaman = $hal;
    $this->sampul = $sampul;
  }

  public function tampilBiografi()
  {
    echo "Judul: " . $this->judul . "<br/>";
    echo "Penulis: " . $this->penulis . "<br/>";
    echo "Tokoh: " . $this->tokoh .  "<br/>";
    echo "Halaman: " . $this->halaman .  "<br/>";
    echo "Sampul: " . $this->sampul .  "<br/>";
  }
}

$biografi = new Biografi();
$biografi->setBiografi("Jayabaya yang menerka", "Seorang", "Jayabaya", 300, "Pemandangan");
$biografi->tampilBiografi();
echo "<br/>";

//=================================================
class Kamus extends Buku
{
  private $judul, $bahasa, $penyusun;

  public function setKamus($judul, $bahasa, $penyusun, $hal, $sampul)
  {
    $this->judul = $judul;
    $this->bahasa = $bahasa;
    $this->penyusun = $penyusun;
    $this->halaman = $hal;
    $this->sampul = $sampul;
  }
  public function tampilKamus()
  {
    echo "Judul " . $this->judul . "<br/>";
    echo "Bahasa " . $this->bahasa . "<br/>";
    echo "Penyusun " . $this->penyusun . "<br/>";
    echo "Halaman " . $this->halaman . "<br/>";
    echo "Sampul " . $this->sampul . "<br/>";
  }
}

$kamus = new Kamus();
$kamus->setKamus("Yang membuat jelas", "Sansekerta Indonesia", "Seorang", 500, "Teks");
$kamus->tampilKamus();
echo "<br/>";

//================================
class Resep extends Buku
{
  private $masakan;

  public function setResep($masakan, $hal, $sampul)
  {
    $this->masakan = $masakan;
    $this->halaman = $hal;
    $this->sampul = $sampul;
  }
  public function tampilResep()
  {
    echo "Masakan: " . $this->masakan . "<br/>";
    echo "Hal: " . $this->halaman . "<br/>";
    echo "Sampul:" . $this->sampul . "<br/>";
  }
}
$padang = new Resep();
$padang->setResep("Padang","30","Makanan");
$padang->tampilResep();
echo  "<br/>";
//=======================================================
class Kamera
{
  protected $tipe, $lensa, $flash, $simpan, $baterai;

  public function setKamera($tipe, $lensa, $flash, $simpan, $baterai)
  {
    $this->tipe = $tipe;
    $this->lensa = $lensa;
    $this->flash = $flash;
    $this->simpan = $simpan;
    $this->baterai = $baterai;
  }
  public function tampilKamera()
  {
    echo "Tipe " . $this->tipe .  "<br/>";
    echo "Lensa " . $this->lensa .  "<br/>";
    echo "Flash " . $this->flash .  "<br/>";
    echo "Penyimpanan " . $this->simpan .  "<br/>";
    echo "Baterai " . $this->baterai .  "<br/>";
  }
}

$kodak = new Kamera();
$kodak->setKamera("X034", "Carl Zeiss", "Xenon", "Film", "AA dry cell");
$kodak->tampilKamera();
echo "<br/>";

//======================================
class KameraDigital extends Kamera
{
  protected $chip;
  protected $simpan = "Micro SD";


  public function setKameraDigital($chip, $tipe, $lensa, $flash, $baterai)
  {
    $this->tipe = $tipe;
    $this->chip = $chip;
    $this->lensa = $lensa;
    $this->flash = $flash;
    $this->baterai = $baterai;
  }
  public function tampilKameraDigital()
  {
    echo "Tipe: " . $this->tipe .  "<br/>";
    echo "Chip: " . $this->chip . "<br/>";
    echo "Lensa: " . $this->lensa .  "<br/>";
    echo "Flash: " . $this->flash .  "<br/>";
    echo "Penyimpanan: " . $this->simpan .  "<br/>";
    echo "Baterai: " . $this->baterai .  "<br/>";
  }
}

$sony = new KameraDigital();

$sony->setKameraDigital("Sony x541", "Cybershot 76", "Zeiss Optic",
"Xenon", "Li-Ion 2000 mAh");
$sony->tampilKameraDigital();
echo "<br/>";

class Mobil
{
  protected $merek, $tipe, $mesin, $roda;

  public function set($merek, $tipe, $mesin, $roda)
  {
    $this->merek = $merek;
    $this->tipe = $tipe;
    $this->mesin = $mesin;
    $this->roda = $roda;
  }
  public function tampil()
  {
    echo "Merek: " . $this->merek . "<br/>";
    echo "Tipe: " . $this->tipe . "<br/>";
    echo "Mesin: " . $this->mesin . "<br/>";
    echo "Roda: " . $this->roda . "<br/>";
  }
}
$pajero = new Mobil();
$pajero->set("Mitsubishi", "Pajero Sport", "1500 cc", 5);
$pajero->tampil();
echo "<br/>";

//========================================================
class Truk extends Mobil{};

$fuso = new Truk();
$fuso->set("Fuso", "001", "3000 cc", 8);
$fuso->tampil();
echo "<br/>";

class User
{
  public $data_user;
  protected $id, $user, $pass;
  protected $status = "user";

  public function set($id, $user, $pass)
  {
    $this->id = $id;
    $this->user = $user;
    $this->pass = $pass;
  }
  public function getId()
  {
    return $this->id;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function getPass()
  {
    return $this->pass;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

$labib = new User();
$labib->set("001","labib","123");


$muhajir = new User();
$muhajir->set("002","muhajir","123");


$user[] = [
  $labib->getId(),
  $labib->getUser(),
  $labib->getPass(),
  $labib->getStatus(),
];
$user[] = [
  $muhajir->getId(),
  $muhajir->getUser(),
  $muhajir->getPass(),
  $muhajir->getStatus(),
];
var_dump($user);
echo "<br/>";

//===============================================
class Admin extends User
{
  protected $status = "admin";
}

$aji = new Admin();
$aji->set("101", "aji", "123");

$admin[] = [
  $aji->getId(),
  $aji->getUser(),
  $aji->getPass(),
  $aji->getStatus(),
];
var_dump($admin);

?>
