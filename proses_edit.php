<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_edit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $angkatan = $_POST["angkatan"];
    $NPM = $_POST["NPM"];

    // Lakukan update data di tabel
    $sql = "UPDATE tb_mahasiswa SET Nama='$name', Angkatan='$angkatan', NPM='$NPM' WHERE id_mahasiswa='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
