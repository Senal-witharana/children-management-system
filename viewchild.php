
<DOCKTYPE!>
<?php 
    include "config.php";

    $sql="SELECT * FROM childdetails;";

    $result=$conn->query($sql);

?>    


<HTML>
        <head>
            <title>
                Web Page
            </title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
              
        </head>

        <body>
        
               
               
                   <h2 style=" text-align: center;background-color: skyblue; height: 50px; margin-top: 5px; margin-bottom: 10px; padding-top: 5px;padding-bottom: 15px; font-weight: bold">Veiw Child</h2>
                

                
                <a class="btn btn-primary" style = "float:right" href="childform.php">Add New Child</a>


                

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name With Initials</th>
                                <th>Full Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name_with_initial']; ?></td>
                                        <td><?php echo $row['full_name'] ?></td>
                                        <td><?php echo $row['birthdate'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td>
                                            
                                                <a class="btn btn-info" href="updatechild.php ?id=<?php echo $row['id']; ?>"  >Edit</a>&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="deletechild.php ?id=<?php echo $row['id']; ?>">Delete</a>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        
                    </table>  
                    
               
         
        </body>
    </HTML>
    