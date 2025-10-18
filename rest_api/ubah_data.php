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

//ubah data diDB
$query="UPDATE tb_pengurus SET nama='$nama', alamat='$alamat', gender= '$gender', gaji='$gaji' WHERE id='$id'";
$result=mysqli_query($con,$query);

}

//pesan berhasil diubah
$hasil=array(
    'status'=> 200,
    'message' => "data berhasil diubah"
);
echo json_encode($hasil);
?>