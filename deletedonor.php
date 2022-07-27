<?php
include "config.php";

if(isset($_REQUEST['id'])){
    
    
    $user_id = $_REQUEST['id'];
    
    //Query
    
    $sql = "Delete FROM donars where id = '$user_id'";
    
    //Execute
    
    $result = $conn->query($sql);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: index.php?viewdonor");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}



?>