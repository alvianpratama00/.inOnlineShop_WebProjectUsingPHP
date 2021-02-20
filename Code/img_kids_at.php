<?php  
	include "conn.php";
  $sql="SELECT * FROM img_kids where kategori ='at'";
  $hasil=$connection->prepare($sql);
  $hasil->execute();
  
?>


<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Gallery</title>  
           <script src="jquery-3.3.1.min.js"></script>  
           <link rel="stylesheet" href="bootstrap.min.css" />  
           <script src="bootstrap.min.js"></script>
           <style>  
            
            .foto_galeri{ 
                width: 100px; 
                height: 100px; 
                object-fit: contain; 
            } 
        </style>  
      </head>  
      <body> 
                      <!-- NAVBAR-->
          <nav class="navbar navbar-expand-sm bg-danger navbar-danger" >
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
              <img src="img/logoin.jpg" alt="logo" style="width:50px;">
            </a>
            
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn btn-danger " href="main.php">Home</a>
              </li>
              <li class="nav-item">
              <div class="dropdown show">
                    <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Men Clothes
                    </a>

                    <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item text-white" value="Atasan" onclick="window.location.href='img_men_at.php'"> Atasan </a>
                      <a class="dropdown-item text-white" value="Bawahan" onclick="window.location.href='img_men_bw.php'">Bawahan</a>
                      <a class="dropdown-item text-white" value="Accessories" onclick="window.location.href='img_men_ac.php'">Aksesoris</a>
                    </div>
              </div>
              <li class="nav-item">
                  <div class="dropdown show">
                    <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Women Clothes
                    </a>

                    <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item text-white" value="Atasan" onclick="window.location.href='img_women_at.php'"> Atasan </a>
                      <a class="dropdown-item text-white" value="Bawahan" onclick="window.location.href='img_women_bw.php'">Bawahan</a>
                      <a class="dropdown-item text-white" value="Accessories" onclick="window.location.href='img_women_ac.php'">Aksesoris</a>
                    </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown show">
                    <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kids Clothes
                    </a>

                    <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item text-white" value="Atasan" onclick="window.location.href='img_kids_at.php'"> Atasan </a>
                      <a class="dropdown-item text-white" value="Bawahan" onclick="window.location.href='img_kids_bw.php'">Bawahan</a>
                      <a class="dropdown-item text-white" value="Accessories" onclick="window.location.href='img_kids_ac.php'">Aksesoris</a>
                    </div>
                  </div>
              </li>

            </ul>
          </nav>
          <!-- NAVBAR --> 
           <div class="container" style="width:500px;">  
                <h3 align="">Gallery</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Nama</th>  
                               <th>Harga</th>
                               <th>Foto</th>
                          </tr>
                          <a href="cart_kids_at.php?id=<?php echo ( isset ( $rows['id'] ) ? $rows['id'] : '' ) ?>" class="btn btn-dark" id ="Cart">Masuk ke Cart</a> 
                          <?php
                          
             
                while($row = $hasil->fetch()){
                 
                ?>
                          

                <tr>
                  
              <div class="image">
              <td><?php echo $row ['nama'] ?> </td>
              <td><?php echo "Rp. ". number_format($row['harga'], 2, ".", ","); ?> </td>
              <td><img class="foto_galeri" src= <?php echo $row['foto']?>>  </a>
              </td>
            
                          <?php  
                               }  
                         
                          ?>  
                     </table>  
                </div>  
           </div>  
          <div class="footer">
 
          <div class="card bg-danger text-white">
            <div class="card-body">
            <P>.In</P>
            <p>Best Choices for Your Lifestyle</p>
              Email      :<a href="#" class="card-link">.in@gmail.com</a><br>
              Call       :<a href="#" class="card-link">0003342553</a>
            </div>
          </div>
        </div> 
      </body>
      <style>
         #Cart {
         
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          position: fixed;
          top: 0px;
          right: 0px; 
      }

    </style>   
 </html>