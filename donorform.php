
<DOCKTYPE!>
    <HTML>
        <head>
            <title>
                Web Page
            </title>
            <link rel="stylesheet" href="Childform.css">
           
        </head>
        <body>

        <?php

                include "config.php";

                if(isset($_POST['submit'])){
                    
                    $Name = $_POST['donor_name'];
                    $contact = $_POST['contact'];
                    $type = $_POST['type'];
                    $address = $_POST['address'];
                    $date = $_POST['date'];
                    
                    
                    //SQL QUERY
                    $sql = "INSERT INTO donars(donor_name, contact, Address,donation_type, date) VALUES ('$Name','$contact', '$address', '$type','$date');";
                    
                    //Execute the query
                    
                    $result =   $conn->query($sql);
                    
                    if($result == TRUE){
                        echo "New record created successfully";
                        header("location: index.php? viewdonor");
                        
                    }else{
                        echo "Error:". $sql. "<br>". $conn->error;
                    }     
                    
                    
                }

                ?>



           <div class="largecontainer">
               <form name="myForm" action="" method="POST">
               <div class="headercontainer">
                        <h2>Add Donor Form</h2>
                   </div>
                <div class="container">
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Name :</lable><br>
                    <input type="text" name="donor_name" placeholder="Enter your name" required><br>
                    
                    <lable  style="font-family: sans-serif; font-weight: bold; color: gray">Contact :</lable> <br>
                    <input type="tel" name="contact" placeholder="Enter contact no" required><br>

                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Permenent Address : </lable><br>
                    <textarea rows="2" cols="60" name="address" placeholder="Enter your parmenent address" required></textarea><br>
                    
                    <label  style="font-family: sans-serif; font-weight: bold; color: gray">Donation type :</label><br>
                    <fieldset>
                         <input type="radio" name="type" id="cash" value="cash"/>
                            <label for Male style="font-family: sans-serif; color: gray ; font-size:13px">Cash</label> 
                        <input type="radio" name="type" id="item" value="items"/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Item</label>
                        <input type="radio" name="type" id="both" value="both"/>
                            <label for Female  style="font-family: sans-serif; color: gray; font-size:13px">Both</label><br>
                    
                    </fieldset>
                   
                    <lable style="font-family: sans-serif; font-weight: bold; color: gray">Date :</lable><br>
                        <input type="date" name="date" placeholder="mm/dd/yyyy" required><br>
                   
                    <div class=wrapper>
                       <button type="submit" name="submit">Submit</button> 
                    </div>
                    
                </div>
           
               </form>
            </div>
        </body>
    </HTML>
    