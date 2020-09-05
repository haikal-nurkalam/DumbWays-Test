<?php
$conn = mysqli_connect("localhost", "root", "", "dealerapp");

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function untuk tabel Mobil
function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $brand_id = htmlspecialchars($data["brand_id"]);
    $color = htmlspecialchars($data["color"]);
    $stok = htmlspecialchars($data["stok"]);
    $description = htmlspecialchars($data["description"]);
    // $create_time = time();
    // $update_time = time();
    // upload gambar
    $image = upload();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO cars
				VALUES
			  ('', '$nama', '$brand_id', '$image', '$color', '$description', '$stok', '', '')
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiImageValid = ['jpg', 'jpeg', 'png'];
    $ekstensiImage = explode('.', $namaFile);
    $ekstensiImage = strtolower(end($ekstensiImage));
    if (!in_array($ekstensiImage, $ekstensiImageValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiImage;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id_mobil)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM cars WHERE id = $id_mobil");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["name_mobil"]);
    $brand_id = htmlspecialchars($data["brand_id"]);
    $color = htmlspecialchars($data["color"]);
    $stok = htmlspecialchars($data["stok"]);
    $description = htmlspecialchars($data["description_mobil"]);
    $imageLama = htmlspecialchars($data["imageLama"]);
    $create_time = htmlspecialchars($data["create_time"]);
    $update_time = time();


    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['image']['error'] === 4) {
        $image = $imageLama;
    } else {
        $image = upload();
    }

    $query = "UPDATE cars SET
				name_mobil = '$nama',
				brand_id = '$brand_id',
                image_mobil = '$image', 
				color = '$color',
				description_mobil = '$description',
				stok = '$stok',
                create_time = '$create_time',
                update_time = '$update_time'
			  WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Akhir function tabel mobil

// Awal function tabel brand
function brandTambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama_brand"]);

    $query = "INSERT INTO brand
				VALUES
			  ('', '$nama')
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function brandHapus($id_brand)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM brand WHERE id = $id_brand");
    return mysqli_affected_rows($conn);
}

function brandUbah($data)
{
    global $conn;

    $id_brand = $data['id'];
    $nama = htmlspecialchars($data["nama_brand"]);

    $query = "UPDATE brand SET
            name_brand = '$nama'
            WHERE id = $id_brand
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Akhir function tabel brand

// Awal function tabel customer
function customerTambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $address = htmlspecialchars($data["address"]);

    $query = "INSERT INTO customer
				VALUES
			  ('', '$nama', '$email', '$address')
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function customerHapus($id_customer)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM customer WHERE id = $id_customer");
    return mysqli_affected_rows($conn);
}

function customerUbah($data)
{
    global $conn;

    $id_customer = $data['id'];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $address = htmlspecialchars($data["address"]);

    $query = "UPDATE customer SET
            name_customer = '$nama',
            email = '$email',
            address_customer = '$address'
            WHERE id = $id_customer
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
