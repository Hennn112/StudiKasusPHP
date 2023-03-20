<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Memeriksa apakah form telah dikirim dengan method "POST"
	
	// Mengambil nilai input dari pengguna
	$numbers = $_POST['numbers'];
	
	// Memisahkan string input pengguna menjadi array bilangan bulat
	$numbers_array = explode(" ", $numbers);

	// Menginisialisasi variabel untuk menyimpan bilangan terbesar
	$max_number = $numbers_array[0];

	// Melakukan iterasi pada array bilangan bulat untuk mencari bilangan terbesar
	foreach ($numbers_array as $number) {
	    if ($number > $max_number) {
	        $max_number = $number;
	    }
	}

	// Mencetak bilangan terbesar
	echo "Bilangan terbesar adalah: " . $max_number;
	
} else {
	// Jika form tidak dikirim dengan method "POST", maka akan menampilkan pesan error
	echo "Error: Form harus dikirim dengan method POST!";
}
?>
