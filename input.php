<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$connect= new mysqli("localhost", "root", "", "2106102_bagus");

	if ($connect->connect_error) {
    	  die("Koneksi gagal: " . $connect->connect_error);
	}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_peserta = $_POST['nama_peserta'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        $data = "INSERT INTO Penyesalan (nama_event, tanggal, deskripsi, banyak, solusi)
        VALUES ('$nama_peserta', '$nohp', '$email', '$alamat')";

       if ($connect->query($data) === TRUE) {
         echo "Data berhasil disimpan! Semoga kamu mendapatkan solusi terbaik dalam hidup ini, Terus Semangat yaa :)";
       } else {
         echo "Error: " . $sql . "<br>" . $connect->error;
       }
    }
        $connect->close();
  ?>
</body>
</html>