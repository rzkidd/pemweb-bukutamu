<?php 
    include '../functions/functions.php';

    $id = $_GET['id'];
    $data = select("SELECT * FROM bukutamu WHERE id = $id");
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
            <?php include 'navbar.php'; ?>

            <!-- form -->
            <form action="../functions/edit.php" method="post" class="form-group mt-3">
                <div class="d-flex align-items-center mb-3">
                    <label for="nama" class="form-label me-5 col-md-1">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required value="<?= $data[0]['nama'] ?>">
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label for="email" class="form-label me-5 col-md-1">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required value="<?= $data[0]['email'] ?>">
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label for="komentar" class="form-label me-5 col-md-1">Komentar</label>
                    <input type="text" name="komentar" id="komentar" class="form-control" required value="<?= $data[0]['komentar'] ?>">
                </div>
                <input type="hidden" value="<?= $data[0]['id'] ?>" name="id">
                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#update').addClass("active");
    </script>
</body>

</html>