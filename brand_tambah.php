<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (brandTambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil di tambahkan');
                document.location.href = 'brand.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal di tambahkan');
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
    <title>Index</title>
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
            <h5>Form Tambah data Brand</h5>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" name="nama_brand" id="nama">
                </div>
                <button type="submit" name="submit">Tambah</button>
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