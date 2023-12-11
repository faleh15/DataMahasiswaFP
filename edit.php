<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Ambil data mahasiswa berdasarkan ID
    $result = $koneksi->query("SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id'");

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        // Tampilkan formulir edit dengan data yang sudah ada
        echo "
            <form method='post' action='proses_edit.php'>
                <input type='hidden' name='id' value='" . $data["id_mahasiswa"] . "'>
                <label for='name'>Nama:</label>
                <input type='text' id='name' name='name' value='" . $data["Nama"] . "' required>
                <label for='angkatan'>Angkatan:</label>
                <input type='text' id='angkatan' name='angkatan' value='" . $data["Angkatan"] . "' required>
                <label for='NPM'>NPM:</label>
                <input type='number' id='NPM' name='NPM' value='" . $data["NPM"] . "' required>
                <button type='submit' name='submit_edit'>Simpan Perubahan</button>
            </form>
        ";
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>
