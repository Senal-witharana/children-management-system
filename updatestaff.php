<?php

include "config.php";

if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];
    
    $sql = "Select * from staff where id ='$id'";
    
    $result = $conn->query($sql) or die($conn->error);
    
    if($row = $result->fetch_assoc()){

        $id = $row['id'];
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $name = $row['name_with_initial'];
        $gender = $row['gender'];
        $birthday=$row['birthday'];
        $nic = $row['nic'];
        $contact = $row['contact'];
        $address = $row['paddress'];
        $email = $row['email'];
        $post = $row['post'];
     }
}


if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $name = $_POST['name_with_initial'];
    $gender = $_POST['gender'];
    $birthday=$_POST['birthday'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $post = $_POST['post'];
    
    
    //query;
    $sql = "UPDATE staff set  first_name = '$firstname', last_name = '$lastname', name_with_initial = '$name', birthday ='$birthday', gender = '$gender', nic='$nic', contact='$contact', paddress ='$address', email='$email', post='$post'  where id = '$id'" ;
    
    $conn->query($sql)  or die($conn->error) ;

    if($result == TRUE){
           echo "New record Updated successfully";
           header("location: viewstaff.php");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}


?>

<DOCKTYPE!>
    <HTML>
        <head>
            <title>
                Samadhi Children Home
            </title>
            <link rel="stylesheet" href="Childform.css">
           
        </head>
        <body>
           <div class="largecontainer">
               <form name="myForm" action="" method="POST">
               <div class="headercontainer">
                        <h2>Update Staff Form</h2>
                   </div>
                <div class="container">  
                    
                    <input type="hidden" name="id" value="<?php echo $id ; ?>" >

                <lable style="font-family: sans-serif; font-weight: bold; color: gray">First name :</lable><br>
                       <input type="text" name="first_name" value="<?php echo $firstname; ?>" >
                        
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Last name :</lable><br>
                       <input type="text" name="last_name"  value="<?php echo $lastname; ?>">
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial :</lable><br>
                       <input type="text" name="name_with_initial"  value="<?php echo $name; ?>">
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Birthday :</lable>
                        <input type="date" name="birthday"  value="<?php echo $birthday; ?>">
                        
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">NIC :</lable><br>
                        <input type="text" name="nic"  value="<?php echo $nic; ?>">
                        
                    
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender :</label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="male" value="Male"  <?php if($gender == 'Male'){echo "checked";} ?>/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="female" value="Female"  <?php if($gender == 'Female'){echo "checked";} ?>/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                    
                    </fieldset>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray" >Contact Number :</lable><br>
                       <input type="tel" name="contact"  value="<?php echo $contact; ?> " >
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Permenent Address :</lable><br>
                        <textarea rows="2" cols="60" name="address"><?php echo $address; ?></textarea>
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Email address :</lable><br>
                        <input type="email" name="email"  value="<?php echo $email; ?> ">
                             
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Post :</lable><br>
                            <select name="post"  size="3" multiple required>
                                <option value="admin" style="font-family: sans-serif; font-weight: bold; color: gray"   <?php if($post == 'admin'){echo "selected";} ?>>Admin</option>
                                <option value="principle" style="font-family: sans-serif; font-weight: bold; color: gray" <?php if($post == 'principle'){echo "selected";} ?> >Principle</option>
                                <option value="matron" style="font-family: sans-serif; font-weight: bold; color: gray" <?php if($post == 'matron'){echo "selected";} ?>>Matron</option>
                            </select><br>
                    
                    <div class=wrapper>
                       <button type="submit" name="update" value="Update">Update</button> 
                    </div>
                    
                </div>
           
               </form>-->
            </div>
        </body>
    </HTML>
    