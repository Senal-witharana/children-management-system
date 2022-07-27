<?php

include "config.php";

if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];
    
    $sql = "Select * from labor where id ='$id'";
    
    $result = $conn->query($sql) or die($conn->error);
    
    if($row = $result->fetch_assoc()){

        $id = $row['id'];
        $name = $row['name_with_initial'];
        $fullname = $row['full_name'];
        $firstname = $row['first_name'];
        $gender = $row['gender'];
        $birthday=$row['birthday'];
        $contact = $row['contact'];
        $address = $row['address'];
        $company = $row['company'];
     }
}


if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $fullname = $_POST['full_name'];
    $firstname = $_POST['first_name'];
    $name = $_POST['name_with_initial'];
    $gender = $_POST['gender'];
    $birthday=$_POST['birthday'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $company = $_POST['company'];
    
    
    //query;
    $sql = "UPDATE labor set  name_with_initial = '$name', full_name = '$fullname', first_name = '$firstname', birthday ='$birthday', gender = '$gender', contact='$contact', address ='$address', company='$company'  where id = '$id'" ;
    
    $conn->query($sql)  or die($conn->error) ;

    if($result == TRUE){
           echo "New record Updated successfully";
           header("location: viewlabour.php");
           
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
               <form form name="myForm" action="" method="POST">
               <div class="headercontainer">
                        <h2>Update Labour Form</h2>
                   </div>
                <div class="container">

                <input type="hidden" name="id" value="<?php echo $id ; ?>" >
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial :</lable><br>
                       <input type="text" name="name_with_initial" value="<?php echo $name; ?>">
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Full name :</lable><br>
                       <input type="text" name="full_name" value="<?php echo $fullname; ?>">
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">First name :</lable><br>
                       <input type="text" name="first_name" value="<?php echo $firstname; ?>">
                        
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Birthday :</lable>
                        <input type="date" name="birthday" value="<?php echo $birthday; ?>">
                        
                
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender :</label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="male" value="Male"  <?php if($gender == 'Male'){echo "checked";} ?>/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="female" value="Female"  <?php if($gender == 'Female'){echo "checked";} ?>/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                    
                    </fieldset>
                   
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray" >Contact Number :</lable><br>
                       <input type="tel" name="contact"  value="<?php echo $contact; ?> ">
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Permenent Address :</lable><br>
                        <textarea rows="2" cols="60" name="message" name="address" > <?php echo $address; ?> </textarea>
                       
                     <lable style="font-family: sans-serif; font-weight: bold; color: gray" >Name of the hiring company :</lable><br>
                            <select class="block2" style="padding-top:10px " name="company" placeholder="Select your company" size="2" multiple required>
                                <option value="sunshine" style="font-family: sans-serif; font-weight: bold; color: gray"  <?php if($company == 'sunshine'){echo "selected";} ?>>Sunshine</option>
                                <option value="moonlight" style="font-family: sans-serif; font-weight: bold; color: gray"  <?php if($company == 'moonlight'){echo "selected";} ?> >MoonLight</option>
                            </select>
                        
                    <div class=wrapper>
                         <button type="submit" name="update" value="Update">Update</button> 
                    </div>
                    
                </div>
           
               </form>
            </div>
        </body>
    </HTML>
    