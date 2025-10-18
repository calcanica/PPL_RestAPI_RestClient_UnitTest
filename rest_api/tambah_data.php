<?php
//masukan koneksi
require_once("config/koneksi.php");

if (isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['gender']) && isset($_POST['gaji'])) {


//tampung data
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

//simpan data diDB
$query="INSERT INTO tb_pengurus VALUES ('$id', '$nama', '$alamat', '$gender', '$gaji')";
$result=mysqli_query($con,$query);
}
//pesan berhasil
$hasil=array(
    'status'=> 200,
    'message' => "data berhasil disimpan"
);
echo json_encode($hasil);

?>