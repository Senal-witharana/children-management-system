<DOCKTYPE!>
    <HTML>
        <head>
            <title>  
                Samdhi Children Home
            </title>
            <link rel="stylesheet" href="Childform.css">

        </head>
        <body>


        <?php 
                include "config.php";

                if(isset($_POST['submit'])){

                    $fname=$_POST['first_name'];
                    $lname=$_POST['last_name'];
                    $initname=$_POST['name_with_initial'];
                    $dob=$_POST['birthday'];
                    $nic=$_POST['NIC'];
                    $gender=$_POST['gender'];
                    $contact=$_POST['contact'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $post=$_POST['post'];
                  
                    
                    
                    //query
                    $sql="INSERT INTO staff VALUES('$fname','$lname','$initiname','$dob','$gender','$address','$email','$post');";
                    
                    //Execute Query
                    $result=$conn->query($sql) ;

                    if($result==FALSE){
                        die("Error".mysqli_connect_error());
                    }
                    
                    if($result==TRUE){

                            echo "Staff Member Added Successfully ";
                            header("location:index.php?viewstaff");
                            
                    }else{
                        echo "Error".$sql."<br>".$conn->error;
                    }
                }

        ?>

           <div class="largecontainer">
               <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return Validation()" method="POST">
               <div class="headercontainer">
                        <h2>Add Staff Form</h2>
                   </div>
                <div class="container">
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">First name : </lable><br>
                       <input type="text" name="first_name"   placeholder="Enter your first name" required>
                        
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Last name : </lable><br>
                       <input type="text" name="last_name"  placeholder="Enter your last name" required>
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial : </lable><br>
                       <input type="text" name="name_with_initial"   placeholder="Enter your name with initials" required>
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Birthday : </lable>
                        <input type="date" name="birthday" placeholder="mm/dd/yyyy" required>
                        
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">NIC :</lable><br>
                        <input type="text" name="NIC" id="NIC" placeholder="Enter your NIC number" required>
                        
                    
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender : </label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="gender" value="Male"/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="gender" value="Female"/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                    
                    </fieldset>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray" >Contact Number : </lable><br>
                       <input type="tel" name="contact"   placeholder="Enter your contact" required>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Permenent Address : </lable><br>
                        <textarea rows="2" cols="60"  name="address"  placeholder="Enter your parmenent address" required></textarea>
                       
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Email address : </lable><br>
                        <input type="email" name="email" placeholder="Enter your e-mail address" required>
                             
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Post : </lable><br>
                            <select name="post"  id="post"  size="3" multiple>
                                <option value="admin" style="font-family: sans-serif; font-weight: bold; color: gray" >Admin</option>
                                <option value="principle" style="font-family: sans-serif; font-weight: bold; color: gray" >Principle</option>
                                <option value="matron" style="font-family: sans-serif; font-weight: bold; color: gray" >Matron</option>
                            </select><br>

                    <label  style="font-family: sans-serif; font-weight: bold; color: gray"> Employee image : </label>
                        <input type="file" name="image">
                    
                    <div class=wrapper>
                       <button type="submit" value="submit">Submit</button> 
                    </div>
                    
                </div>
           
               </form>
            </div>
        </body>
    </HTML>
    