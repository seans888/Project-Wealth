<?php  
 $connect = mysqli_connect("localhost", "root", "", "stock");  
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {  
      $sql = "SELECT * FROM product ORDER BY product_id DESC";  
      $result = mysqli_query($connect, $sql);  
     
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>    
                          <th>Product Name</th>  
                          <th>Quantity</th>
                          <th>Rate</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["product_name"].'</td>  
                          <td>'.$row["quantity"].'</td>  
                          <td>'.$row["rate"].'</td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }  
 }  
 ?> 