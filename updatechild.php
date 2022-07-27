<?php

include "config.php";

if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];
    
    $sql = "Select * from childdetails where id ='$id'";
    
    $result = $conn->query($sql) or die($conn->error);
    
    if($row = $result->fetch_assoc()){
        $id = $row['id'];
        $firstname = $row['name_with_initial'];
        $lastname = $row['full_name'];
        $gender = $row['gender'];
        $birthday=$row['birthdate'];
     }
}


if(isset($_POST['update'])){
    
    $firstname = $_POST['name_with_initial'];
    $lastname = $_POST['full_name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $id = $_POST['user_id'];
    
    
    //query;
    $sql = "UPDATE childdetails set name_with_initial = '$firstname', full_name = '$lastname', birthdate ='$birthday', gender = '$gender' where id = '$id'";
    
    $conn->query($sql);
    
    if($result == TRUE){
           echo "New record Updated successfully";
           header("location: viewchild.php");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}


?>






<DOCKTYPE!>
    <HTML>
        <head>
            <title>
                Web Page
            </title>
            <link rel="stylesheet" href="Childform.css">
           
        </head>
        <body>
           <div class="largecontainer">
               <form name="myForm" action="" method="POST">
               <div class="headercontainer">
                        <h2>Add Child Form</h2>
                   </div>
                <div class="container">

                <lable  style="font-family: sans-serif; font-weight: bold; color: gray">User ID :</lable><br>
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>" >
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial :</lable><br>
                    <input type="text" name="name_with_initial" value="<?php echo $firstname; ?>" >
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Full name :</lable><br> 
                    <input type="text" name="full_name" value="<?php echo $lastname; ?>">
                    
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender :</label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="male" value="Male"  <?php if($gender == 'Male'){echo "checked";} ?>/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="female" value="Female"  value="Female" <?php if($gender == 'Female'){echo "checked";} ?> />
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                    
                    </fieldset>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Birthday :</lable>
                        <input type="date" name="birthday" value="<?php echo $birthday; ?>">
                    
                    
                    <div class=wrapper>
                       <button type="submit" name="update" value="Update">Update</button> 
                    </div>
                    
                </div>
           
               </form>
            </div>
        </body>
    </HTML>
    