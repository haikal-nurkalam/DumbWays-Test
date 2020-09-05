<?php
require 'functions.php';

$brand = query("SELECT * FROM brand");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Brand</title>
</head>

<link rel="stylesheet" href="style/css/bootstrap.css">

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Dealer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link text-white" href="index.php">Home</a>
                    <a class="nav-link text-white" href="mobil.php">Mobil</a>
                    <a class="nav-link text-white" href="brand.php">Brand</a>
                    <a class="nav-link text-white" href="customer.php">Customer</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mt-3">
        <div class="container">
            <a href="brand_tambah.php" class="btn btn-sm btn-primary mt-3">Tambah Data</a>
        </div>
    </div>

    <div class="container mt-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">name</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php $z = 1; ?>
                <?php foreach ($brand as $brn) : ?>
                    <tr>
                        <th scope="row"><?= $z ?></th>
                        <td><?= $brn["name_brand"] ?></td>
                        <td>
                            <a href="brand_hapus.php?id=<?= $brn["id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ?')">Delete</a>
                            <a href="brand_ubah.php?id=<?= $brn["id"]; ?>" class="btn btn-sm btn-warning">Update</a>
                        </td>
                    </tr>
                    <?php $z++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="style/js/bootstrap.js"></script>

</body>

</html>