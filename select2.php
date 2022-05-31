<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "education");  
      $query = "SELECT * FROM apparatusup WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" >';  
      while($row = mysqli_fetch_assoc($result))  
      {  
           $output .= ' 
          


           
           <img class="image" src="apparatus/'. $row["name"].'" width="80%"  style="margin-left:10%"  />
            

           
         

                <tr>  
                     <td width="15%" style="font-size:12px"><label>Name</label></td>  
                     <td width="85%" style="font-size:12px">'.$row["apparatus"].'</td>  
                </tr> 
                 <tr>  
                     <td width="15%" style="font-size:12px"><label>Details</label></td>  
                     <td width="85%" style="font-size:12px">'.$row["adetails"].'</td>  
                </tr> 
                 <tr>  
                     <td width="15%" style="font-size:12px"><label>Price</label></td>  
                     <td width="85%" style="font-size:12px">'.$row["aprice"].'</td>  
                </tr>     
                
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>