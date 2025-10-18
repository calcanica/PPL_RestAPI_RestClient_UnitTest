<?php
require_once("config/koneksi.php");

header('Content-Type: application/json'); // pastikan header JSON

$hasil = [];

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_pengurus WHERE id='$id'";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)){
        $hasil[] = $row;
    }

} else {
    $query = "SELECT * FROM tb_pengurus";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)){
        $hasil[] = $row;
    }
}

// kembalikan JSON konsisten
echo json_encode([
    'status' => 'success',
    'data' => $hasil
]);
?>
