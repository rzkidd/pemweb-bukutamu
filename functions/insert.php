<?php 
    include 'functions.php';

    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $komentar = htmlspecialchars($_POST['komentar']);
    date_default_timezone_set("Asia/Jakarta");
    $waktu = date("Y-m-d H:i:s");

    $query = "INSERT INTO bukutamu (nama, email, waktu, komentar) VALUES ('$nama', '$email', '$waktu', '$komentar')";

    if(query($query)){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                window.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = '../index.php';
            </script>
        ";
    }
?>