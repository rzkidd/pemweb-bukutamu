<?php 
    $connection = new mysqli("localhost", "root", "", "buku_tamu");

    function select($query)
    {
        global $connection;

        if ($result = $connection->query($query)){
            $row = $result->fetch_all(MYSQLI_ASSOC);
            return $row;
        } else {
            return 0;
        }
    }

    function query($query)
    {
        global $connection;

        if($result = $connection->query($query)){
            return 1;
        }else {
            return 0;
        }
    }
?>