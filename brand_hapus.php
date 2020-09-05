<?php
require 'functions.php';

$id_brand = $_GET["id"];

if (brandHapus($id_brand) > 0) {
    echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'brand.php';
		</script>
	";
} else {
    echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'brand.php';
		</script>
	";
}
