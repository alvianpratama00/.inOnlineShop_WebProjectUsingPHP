<!DOCTYPE html>
<html>
<head>
  <title>.In</title>
  <script src="jquery-3.3.1.min.js"></script>  
  <link rel="stylesheet" href="bootstrap.min.css" />  
  <script src="bootstrap.min.js"></script>
</head>
<body>
  <img src="img/logoin.jpg" width="80px"><br>


  <center class = "isicontent">

    <?php 
    echo "<h1>Pesanan telah dibuat</h1>";
    echo "<br>";
    echo "<h1>Kurir akan mengirimkan pesanan anda</h1>";
    echo "<br>";
    echo "<h1>Jangan lupa siapkan uang pas ya</h1>";
    echo "<br>";
    ?>
    <a href="destroy_session.php?id=<?php echo ( isset ( $rows['id'] ) ? $rows['id'] : '' ) ?>" class="btn btn-dark" id ="Cart">Kembali Ke Halaman Utama</a> 
  </center>

</body>
<style>
#logout {
 
  
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}
.isicontent{
padding: 180px;
}


</style>
</html>








