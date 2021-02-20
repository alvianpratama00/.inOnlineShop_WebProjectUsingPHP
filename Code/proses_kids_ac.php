<?php

//data dari form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$foto = $_FILES['foto'];


//dapatkan ekstensi file
$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);



// buat array yang berisi daftar ekstensi yang diperbolehkan
$ext_boleh = ['jpg', 'png', 'jpeg'];


// cek apakah file yang diupload memiliki ext yang valid
if(in_array($ext, $ext_boleh)){
 $sumber = $foto['tmp_name'];
 $tujuan = 'kategori_image/kids/ac/' . $foto['name'];
 move_uploaded_file($sumber, $tujuan);

 $k = new PDO("mysql:host=localhost;dbname=onlineshop","root","");
 $sql = "INSERT INTO img_kids (nama, harga, foto, kategori) VALUES (?, ?, ?,'AC')";

 $result = $k->prepare($sql);
 $result->execute([$nama, $harga, $tujuan]);

 
echo "<script>alert('File berhasil dimasukkan');window.location='form_kids_ac.php'</script>";
}else{
 echo "<script>alert('File tidak valid');window.location='form_kids_ac.php'</script>";
}


?>