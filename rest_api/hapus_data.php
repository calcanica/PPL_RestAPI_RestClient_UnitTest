<?php
// masukan koneksi
require_once("config/koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // hapus data
    $query = "DELETE FROM tb_pengurus WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // cek apakah ada baris yang terhapus
        if (mysqli_affected_rows($con) > 0) {
            $hasil = array(
                'status' => 200,
                'message' => "Data dengan ID $id berhasil dihapus"
            );
        } else {
            $hasil = array(
                'status' => 404,
                'message' => "Data dengan ID $id tidak ditemukan"
            );
        }
    } else {
        $hasil = array(
            'status' => 500,
            'message' => "Query gagal dijalankan: " . mysqli_error($con)
        );
    }
} else {
    // jika parameter id tidak dikirim
    $hasil = array(
        'status' => 400,
        'message' => "Parameter 'id' tidak ditemukan"
    );
}

?>
