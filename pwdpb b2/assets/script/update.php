<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insertID = $_POST["idpc"];
    $insertNoperawatan = $_POST["noperawatan"];
    $insertUser = $_POST["username"];
    $insertDate = $_POST["tanggal"];
    $insertSparePart = $_POST["gantisparepart"];
    $insertService = $_POST["perbaikan"];
    $insertSignature = $_POST["paraf"];

    $query = "UPDATE detailperawatan SET idpc = '$insertID', username = '$insertUser', tanggal = '$insertDate',
    servis = '$insertService', gantisparepart = '$insertSparePart', paraf = '$insertSignature' WHERE nokeluhan = '$insertNoperawatan'";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil Ubah Formulir";
        header('Location: ../../tabelhasilform.php');
    } else {
        echo "Gagal Ubah Formulir. Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>