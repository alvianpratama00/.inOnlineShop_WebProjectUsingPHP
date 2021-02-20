<?php  
	include "conn.php";
  $sql="SELECT * FROM img_kids where kategori ='ac'";
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
            
            .foto_galeri { 
                width: 100px; 
                height: 100px; 
                object-fit: contain; 
            } 
        </style>  
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
                          <?php
                          
             
                while($row = $hasil->fetch()){
                 
                ?>
                          

                <tr>
                  
              <div class="image">
              <td><?php echo $row ['nama'] ?> </td>
              <td><?php echo "Rp. ". number_format($row['harga'], 2, ".", ","); ?> </td>
              <td><img class="foto_galeri"src= <?php echo $row['foto']?>>  </a>
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

    </style>   
 </html>
