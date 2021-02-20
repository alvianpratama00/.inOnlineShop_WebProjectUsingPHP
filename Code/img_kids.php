<?php  
	include "conn.php";
  $sql="SELECT * FROM img_kids";
  $hasil=$connection->prepare($sql);
  $hasil->execute();
  
?>


<<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Gallery</title>  
           <script src="jquery-3.3.1.min.js"></script>  
           <link rel="stylesheet" href="bootstrap.min.css" />  
           <script src="bootstrap.min.js"></script>
           <style>  
            
            img { 
                width: 100px; 
                height: 100px; 
                object-fit: contain; 
            } 
        </style>  
      </head>  
      <body> 
           <br />  
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
              <td><?php echo $row ['harga'] ?> </td>
              <td><img src= <?php echo $row['foto']?>>  </a>
              </td>
            
                          <?php  
                               }  
                         
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>