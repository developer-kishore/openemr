<?php  
require_once("../globals.php");

$res = sqlStatement("SELECT * FROM visitor_table");

 ?>  

<?php  
while ($row = sqlFetchArray($res))   
 {  
      echo '  
      <tr>  
           <td>'.$row["visitorid"].'</td>  
           <td>'.$row["salutation"].''.$row["fname"]. '</td>  
           <td>'.$row["gender"].'</td>  
           <td>'.$row["purposeofvisiting"].'</td>  
           <td>'.$row["visitordetails"].'</td> 
           <td>'.$row["dob"].'</td>  
           <td>'.$row["visitingdate"].'</td>  
           <td>
<a href="formedit.php?visitorid='.$row["visitorid"].'">
<button type="button" id="edit" name="editvisitor" class="btn btn-primary">Edit</button></a> 

<button type="button" name="deletevisitor" id="<?php echo $visitorid;?>" class="delete btn btn-danger">Delete</button>
</td>   
      </tr>  
      ';  
 }  
 ?>  