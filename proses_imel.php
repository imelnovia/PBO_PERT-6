<?php
$nomor = $GET ['nomor']; 
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$provinsi = $_GET['provinsi'];
$id = $_GET['id'];
$npwp = $_GET['npwp'];
$hp = $_GET['hp'];
$nama_kapal = $_GET['nama_kapal'];
$bendera = $_GET['bendera'];
$bahan_bakar = $_GET['bahan_bakar'];
$jumlah_penumpamg = $_GET['jumlah_penumpang'];
$tahun = $_GET ['tahun'];
$jenis = $_GET['jenis'];
$ijin = $_GET ['ijin'];
$tombol = $_GET['tombol'];

echo "<h1>DATA KEPEMILIKAN</h1>";
echo "Nomor Tanda Pendaftaran  : ".$nomor_tanda_pendaftaran."<br>";
echo "Nama                     : ".$nama."<br>";
echo "Alamat                   : ".$alamat."<br>";
echo "Provinsi                 : ".$provinsi."<br>";
echo "ID Pemilik               : ".$id."<br>";
echo "Nomor NPWP               : ".$npwp."<br>";
echo "Nomor Telepon/HP         : ".$hp."<br>";
echo "Nama Kapal               : ".$nama_kapal."<br>";
echo "Bendera Daerah           : ".$jenis_kapal."<br>";
echo "Bahan Bakar              : ".$bahan_bakar."<br>";
echo "Jumlah Penumpang         : ".$jumlah_penumpang."<br>";
echo "Tahun Pembuatan          : ",.$tahun."<br>";
echo "Jenis Kapal              : ".$jenis."<br>";
echo "Nomor Ijin Kapal         : ".$ijin."<br>";


?>