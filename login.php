<?php

    session_start();

    include "config.php";

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">

    <title>Login Page</title>

    <link rel="stylesheet" href="loginstyle.css">

  </head>

  <body>

  <?php

            if(isset($_POST['login'])){

                $uname = mysqli_real_escape_string($conn,$_POST['username']);
                
                $pass = mysqli_real_escape_string($conn,$_POST['password']);
                
            
                if ($uname != "" && $pass != ""){

                    $sql_query = "select id from admin where (user_name='$uname') AND (password='$pass')" ;
                
                
                    $result = mysqli_query($conn,$sql_query) or trigger_error("query failed SQL: $sql_query - Error : ".mysqli_error(conn), E_USER_ERROR);
                    
                    $count = mysqli_num_rows($result);

                    if($count==1){
                        $_SESSION['uname'] = $uname;

                        header('Location:navigation.php');
                        
                    }else{
                        echo "<script>alert(Invalid username and password)</script>";
                    }

                }

                
            }

            ?>

        <section class="login py-5 bg-light">

            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img src="childern.jpg" class="img-fluid" alt="login image">
                    </div>
                    <div class="col-lg-7 text-center py-2 pt-5">
                                <h1 class="">Samadhi Children Home</h2>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="form-row pt-4" >
                                        <div class=" offset-1 Col-lg-7">
                                            <input type="text" name="username" placeholder="Enter your user name" class="input px-3" />
                                        </div>
                                    </div>
                                    <div class="form-row pt-3">
                                        <div class="offset-1 Col-lg-7"> 
                                            <input type="password" name="password" placeholder="Enter your password" class="input px-3"/>
                                        </div>
                                    </div>

                                    <div class="form-row  pt-3 pb-3">
                                        <div class="offset-1 Col-lg-7 py-3">
                                            <button type="submit" class="btn" name="login" >Login</button>
                                        </div>
                                    </div>


                                </form>
                    </div>
                    
                </div>

            </div>


        </section>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
  </body>
</html>


<?php

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($conn,$_POST['user_name']);
    
    $pass = mysqli_real_escape_string($conn,$_POST['password']);
    
 
    if ($uname != "" && $pass != ""){

        $sql_query = "select staffId from admin where (user_name='$uname') AND (password='$pass')" ;
      
    
        $result = mysqli_query($conn,$sql_query) or trigger_error("query failed SQL: $sql_query - Error : ".mysqli_error(conn), E_USER_ERROR);
           
        $count = mysqli_num_rows($result);

        if($count==1){
            $_SESSION['uname'] = $uname;

            header('Location:navigation.php');
             
        }else{
            echo "<script>alert(Invalid username and password)</script>";
        }

    }

    
}

?>