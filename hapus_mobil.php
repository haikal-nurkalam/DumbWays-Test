<?php
require 'functions.php';

$id_mobil = $_GET["id"];

if (hapus($id_mobil) > 0) {
    echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'mobil.php';
		</script>
	";
} else {
    echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'mobil.php';
		</script>
	";
}
