<?php 
    include 'functions.php';

    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $komentar = htmlspecialchars($_POST['komentar']);
    date_default_timezone_set("Asia/Jakarta");
    $waktu = date("Y-m-d H:i:s");

    $query = "UPDATE bukutamu SET nama = '$nama', email = '$email', waktu = '$waktu', komentar = '$komentar' WHERE id = $id";

    if(query($query)){
        echo "
            <script>
                alert('Data berhasil diupdate!');
                window.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diupdate!');
                window.location.href = '../index.php';
            </script>
        ";
    }
?>