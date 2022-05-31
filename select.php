<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "education");  
      $query = "SELECT * FROM videoup WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" >';  
      while($row = mysqli_fetch_assoc($result))  
      {  
           $output .= ' 
          


           
           <div class="video">
            <video width="100%" controls><source src="videos/'. $row["name"].'" type="video/webm"></video></div>

           
         

                <tr>  
                     <td width="15%" style="font-size:12px"><label>Name</label></td>  
                     <td width="85%" style="font-size:12px">'.$row["video"].'</td>  
                </tr>  
                
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>