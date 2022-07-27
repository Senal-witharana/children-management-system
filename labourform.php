
<DOCKTYPE!>
    <HTML>
        <head>
            <title>
                Samdhi Children Home
            </title>
            <link rel="stylesheet" href="Childform.css">

        </head>

        <body>

        <body>

        <?php

include "config.php";

   if(isset($_POST['submit'])){


    $initialname=$_POST['name_with_initial'];
    $fullname=$_POST['full_name'];
    $firstname=$_POST['first_name'];
    $dob=$_POST['birthday'];
    $gender = $_POST['gender'];
    $contact=$_POST['contact'];
    $paddress=$_POST['address'];
    $company=$_POST['company'];
    
    
    //query
    $sql="INSERT INTO labor(full_name,first_Name,birthday,gender,contact,address,company,name_with_initial) VALUES('$fullname','$firstname','$dob','$gender','$contact','$paddress','','$initialname');";
    

      $result =   $conn->query($sql);
      
      if($result == TRUE){
         echo "New record created successfully";
         header("location: index.php? viewlabour");
         
      }else{
         echo "Error:". $sql. "<br>". $conn->error;
      }     
      
      
   }

 ?>


        <div class="largecontainer">

               <form name="myForm" onsubmit="return Validation()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
               <div class="headercontainer">
                        <h2>Add Labour Form</h2>
                   </div>
                <div class="container">
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Name with initial : </lable><br>
                       <input type="text" name="name_with_initial" id="name_with_initial" placeholder="Enter your name with initials" required>
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Full name : </lable><br>
                       <input type="text" name="full_name"  id="full_name" placeholder="Enter your full name" required>
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">First name : </lable><br>
                       <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
                        
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Birthday :</lable>
                        <input type="date" name="birthday"  id="birthday"  placeholder="mm/dd/yyyy" required>
                        
                
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Gender : </label><br>
                    <fieldset>
                         <input type="radio" name="gender" id="male" value="Male"/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Male</label> 
                        <input type="radio" name="gender" id="female" value="Female"/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Female</label><br>
                    
                    </fieldset>
                   
                    
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray" >Contact Number : </lable><br>
                       <input type="tel" name="contact" id="contact" placeholder="Enter your contact" required>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Permenent Address : </lable><br>
                        <textarea rows="2" cols="60" id="address" name="address" placeholder="Enter your parmenent address" required></textarea>
                       
                     <lable  style="font-family: sans-serif; font-weight: bold; color: gray" >Name of the hiring company :  </lable><br>
                            <select id="company" class="block2" style="padding-top:10px " name="company" placeholder="Select your company" size="2" multiple>
                                <option value="sunshine" style="font-family: sans-serif; font-weight: bold; color: gray" >Sunshine</option>
                                <option value="moonlight" style="font-family: sans-serif; font-weight: bold; color: gray" >MoonLight</option>
                            </select>
                        
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
        const firstname = document.forms["myForm"]["first_name"].value;
        const dob = document.forms["myForm"]["birthday"].value;
        const gender = document.forms["myForm"]["gender"].value;
        const contact = document.forms["myForm"]["contact"].value;
        const company = document.getElementById('company');
        const selected = company.options[company.selectedIndex].text;
        
        if(initname == " "){
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
        
        if (contact.length !== 10) {
            alert("Contact should contains 10 numbers");
            return false;
        }
        if (company==""){
            alert("Hiring Company is required!");
            return false;
        }
        return true;
    }
</script>


        </body>
    </HTML>
    