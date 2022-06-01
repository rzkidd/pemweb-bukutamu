<?php 
    include 'functions.php';

    $id = $_GET['id'];
    $query = "DELETE FROM bukutamu WHERE id = $id";

    if (query($query)){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                window.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                window.location.href = '../index.php';
            </script>
        ";
    }
?>