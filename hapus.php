<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Hapus data berdasarkan ID
    $sql = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
