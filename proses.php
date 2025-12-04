<?php 
    require 'koneksi.php';

    //insert
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $query = "INSERT INTO tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
        $sql = $koneksi->query($query);

        if ($sql){
            header('Location: index.php');
        } else {
            echo "Gagal simpan data";
        }
    }

    //delete
    if (isset($_GET['id'])) {
        $query = "DELETE FROM tamu WHERE id = $_GET[id]";
        $sql = $koneksi->query($query);
        if ($sql) {
            header("Location: index.php?page=bukutamu");
            exit();
        } else {
            echo "Delete data gagal";
        }
    }
    
    //update
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $query = "UPDATE tamu SET nama='$nama', email='$email', komentar='$komentar' WHERE id=$id";
        $sql = $koneksi->query($query);

        if($sql){
            header('Location: index.php?page=bukutamu');
        } else {
            echo "Gagal update data";
        }
    }
?>