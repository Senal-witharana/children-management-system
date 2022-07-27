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
               
               $initName = $_POST['name_with_initial'];
               $fullName = $_POST['full_name'];
               $gender = $_POST['gender'];
               $dob = $_POST['birthday'];
               $image = $_POST['image'];
               
               
               //SQL QUERY
               $sql = "INSERT INTO childdetails(name_with_initial, full_name, birthdate,gender, image) VALUES ('$initName','$fullName', '$dob', '$gender', '$image');";
               
               //Execute the query
               
               $result =   $conn->query($sql);
               
               if($result == TRUE){
                  echo "New record created successfully";
                  header("location: index.php? viewchild");
                  
               }else{
                  echo "Error:". $sql. "<br>". $conn->error;
               }     
               
               
            }

          ?>

           <div class="largecontainer">
               <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return Validation()">
               <div class="headercontainer">
                        <h2>Add Child Form</h2>
                   </div>
                <div class="container">
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial :  </lable><br>
                    <input type="text" name="name_with_initial" id="name_with_initial" placeholder="Enter your name with initials" required>
                   
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Full name :</lable><br> 
                    <input type="text" name="full_name" id="full_name" placeholder="Enter your full name" required>
                    
                    
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender : </label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="gender" value="Male"/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="gender" value="Female"/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                            
                    
                    </fieldset>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray" required>Birthday : </span></lable>
                        <input type="date" name="birthday" id="birthday" placeholder="mm/dd/yyyy">
                        
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Child image : </label>
                        <input type="file" name="image" id="image">
                        
                    
                    <div class=wrapper>
                       <button type="submit" name="submit">Submit</button> 
                    </div>
                    
                </div>
           
               </form>
            </div>
            <script>
        
            const submit = document.querySelector('#submit');


            if (submit.addEventListener) {
                submit.addEventListener('click', returnToPrevious);
            } else {
                submit.attachEvent('onclick', returnToPrevious);
            }

            function returnToPrevious(e) {
                e = e || window.event;

                if (!Validation()) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    } else {
                        e.returnValue = false;
                    }
                }
            }
        function Validation (){
            const initname = document.forms["myForm"]["name_with_initial"].value;
            const fullname = document.forms["myForm"]["full_name"].value;
            const dob = document.forms["myForm"]["birthday"].value;
            const gender = document.forms["myForm"]["gender"].value;
            var file=document.forms["myForm"]["image"].value;
            
            
            
            if(initname == ""){
                alert("Name with initials is required!");
                return false;
            }else if(!isNaN(initname)){
                alert("Invalid Name with initials!");
                return false;
            }
            
            if(fullname == ""){
                alert("Full Name is required!");
                return false;
            }
            else if (!isNaN(fullname)){
                alert("Invalid Full name");
                return false;
            }
            
            if(firstname == ""){
                alert("First name is required");
                return false;
            }
            else if(!isNaN(firstname)){
                alert("Invalid First name!");
                return false;
            }
            
            if (dob == ""){
                alert("Birthdate is required!");
                return false;
            }
            
            if(gender == " "){
                alert ("Choose Gender!");
            }
            
            if(file.value!=""){
           
            }else{
              if(file.size<1024*1024){
                 alert("File too small. Please select a file more than 1 MB !! ");

                 }else if(file.size>4*1024*1024){
                         alert(" File too large. Please select a file less than 4 MB !!");

                  }
              return false; 
         }
           
            return true;
        }
    </script>
        </body>
    </HTML>
    