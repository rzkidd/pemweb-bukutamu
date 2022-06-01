<?php 
    include 'functions/functions.php';

    $datas = select("SELECT * FROM bukutamu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="bg-black bg-opacity-10">
    <div class="row">
        <div class="col-md-5 mx-auto mt-5 rounded bg-white">
            <!-- navbar -->
            <?php include 'view/navbar.php'; ?>

            <!-- tabel -->
            <table class="table table-responsive bg-white mt-3">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Waktu</td>
                        <td>Komentar</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; foreach($datas as $row) : ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['waktu'] ?></td>
                        <td><?= $row['komentar'] ?></td>
                        <td>
                            <a href="view/edit.php?id=<?= $row['id'] ?>" class="badge bg-info"><i class="bi bi-pencil-square"></i></a>
                            <a href="functions/delete.php?id=<?= $row['id'] ?>" class="badge bg-danger" onclick="confirm('Anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php $count++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#read').addClass("active");
    </script>
</body>

</html>