<?php
require 'functions.php';

$id_brand = $_GET["id"];

if (customerHapus($id_brand) > 0) {
    echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'customer.php';
		</script>
	";
} else {
    echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'customer.php';
		</script>
	";
}
