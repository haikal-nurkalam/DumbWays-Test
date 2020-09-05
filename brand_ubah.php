<?php
require 'functions.php';

// ambil data di URL
$id_brand = $_GET["id"];

// query data mahasiswa berdasarkan id
$brn = query("SELECT * FROM brand WHERE id = $id_brand")[0];

if (isset($_POST["submit"])) {
    if (brandUbah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil di ubah');
                document.location.href = 'brand.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal di ubah');
                document.location.href = 'brand.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Brand</title>
</head>

<link rel="stylesheet" href="style/css/bootstrap.css">

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="4.php">Dealer</a>
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

    <div class="row">
        <div class="container">
            <h5>Form Ubah data Brand</h5>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $brn['id'] ?>">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" name="nama_brand" id="nama" value="<?= $brn['name_brand'] ?>">
                </div>
                <button type="submit" name="submit">Ubah</button>
            </form>
        </div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="style/js/bootstrap.js"></script>

</body>

</html>