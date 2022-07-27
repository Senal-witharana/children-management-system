<?php
include "config.php";

if(isset($_REQUEST['id'])){
    
    
    $user_id = $_REQUEST['id'];
    
    //Query
    
    $sql = "Delete FROM staff where id = '$user_id'";
    
    //Execute
    
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: viewstaff.php");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}



?>