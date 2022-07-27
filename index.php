<?php

session_start();

include("config.php");


?>


<!DOCTYPE html>
<html>

<head>

<title>Samadhi Children Home</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="bootstrap.min.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



</head>

<body>

	   
<div id="wrapper">

<?php include("navigation.php");  ?>

<div id="page-wrapper">

<div class="container-fluid">

<?php

if(isset($_GET['overview'])){

include("overview.php");

}

if(isset($_GET['deletedonor'])){

include("deletedonor.php");

}

if(isset($_GET['viewdonor'])){

include("viewdonor.php");


}


if(isset($_GET['viewstaff'])){

include("viewstaff.php");

}

if(isset($_GET['updatestaff'])){

include("updatestaff.php");

}

if(isset($_GET['deletestaff'])){

include("deletestaff.php");

}


if(isset($_GET['viewlabour'])){

include("viewlabour.php");

}

if(isset($_GET['updatelabour'])){

include("updatelabour.php");

}

if(isset($_GET['deletelabour'])){

include("deletelabour.php");

}

if(isset($_GET['viewchild'])){

include("viewchild.php");

}

if(isset($_GET['updatechild'])){

include("updatechild.php");

}

if(isset($_GET['deletechild'])){

include("deletechild.php");

}

if(isset($_GET['deletedonor'])){

    include("deletedonor.php");
    
    }

if(isset($_GET['viewDonor'])){

include("viewdonor.php");

}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script  src="jquery.easypiechart.js"></script> 
    
<script src="jquery.min.js"></script>

<script src="bootstrap.min.js"></script>



</body>


</html>
