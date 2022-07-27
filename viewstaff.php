
<DOCKTYPE!>
<?php 
    include "config.php";

    $sql="SELECT * FROM staff ;";

    $result=$conn->query($sql);

?>    


<HTML>
        <head>
            <title>
                Samadhi Children Home
            </title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
              
        </head>

        <body>
               
               
                   <h2 style=" text-align: center;background-color: skyblue; height: 50px; margin-top: 5px; margin-bottom: 10px; padding-top: 5px;padding-bottom: 15px; font-weight: bold">View Staff Members</h2>
                

                
                <a class="btn btn-primary" style = "float:right" href="staffform.php">Add New Staff Member </a>


              

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Name With Initials</th>
                                <th>Date of Birth</th>
                                <th>NIC</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Post</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name'] ?></td>
                                        <td><?php echo $row['name_with_initial'] ?></td>
                                        <td><?php echo $row['birthday'] ?></td>
                                        <td><?php echo $row['nic'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td><?php echo $row['contact'] ?></td>
                                        <td><?php echo $row['paddress'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['post'] ?></td>
                                        <td>
                                            
                                                <a class="btn btn-info" style="margin:5px;"href="updatestaff.php? id=<?php echo $row['id'] ?>"  >Edit</a>&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="deletestaff.php? id=<?php echo $row['id']; ?>" >Delete</a>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        
                    </table>  
                    
        </body>
    </HTML>
    