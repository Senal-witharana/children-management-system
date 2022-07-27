
<DOCKTYPE!>
<?php 
    include "config.php";

    $sql="SELECT * FROM donars;";

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
                

                
                <a class="btn btn-primary" style = "float:right" href="donorform.php">Add New Donor</a>


                

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name of the Donor</th>
                                <th>contact</th>
                                <th>Address</th>
                                <th>Donation type</th>
                                <th>Data & Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['donor_name']; ?></td>
                                        <td><?php echo $row['contact'] ?></td>
                                        <td><?php echo $row['Address'] ?></td>
                                        <td><?php echo $row['donation_type'] ?></td>
                                        <td><?php echo $row['date'] ?></td>

                                        <td>
                                            
                                                <a class="btn btn-danger" href="deletedonor.php? id=<?php echo $row['id']; ?>">Delete</a>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        
                    </table>  
                    
               
         
        </body>
    </HTML>
    