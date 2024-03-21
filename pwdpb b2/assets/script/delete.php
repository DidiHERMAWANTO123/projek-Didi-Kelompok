<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insertID = $_POST["idpc"];
    $insertNoperawatan = $_POST["noperawatan"];

    $query = "DELETE FROM detailperawatan WHERE nokeluhan = $insertNoperawatan";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil Hapus Formulir";
        header('Location: ../../tabelhasilform.php');
    } else {
        echo "Gagal Hapus Formulir. Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>