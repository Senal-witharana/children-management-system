<?php 
/*if(!isset($_SESSION['username'])){
    echo "<script>window.open('login.php','_self')</script>";
}*/
?>

<html>

    <head></head>
    <title></title>

    <body>

    <div class="row">

<div class="col-lg-12">

<h1 class="page-header">Overview</h1>

<ol class="breadcrumb">

<li class="active">

<h3 class="panel-title" style="color:black" ><!-- panel-title Starts -->

<i class="fa fa-dashboard" ></i>  Overview 

</h3>

</ol>

</div>

</div>


<?php

$get_labor = "select count(id) from labor ";
$run_labor = mysqli_query($conn,$get_labor);
$row_labor=mysqli_fetch_array($run_labor);
$alllabor = $row_labor['count(id)'];

$get_staff = "select count(id) from staff ";
$run_staff = mysqli_query($conn,$get_staff);
$row_staff=mysqli_fetch_array($run_staff);
$allstaff = $row_staff['count(id)'];

$get_child = "select count(id) from childdetails ";
$run_child = mysqli_query($conn,$get_child);
$row_child=mysqli_fetch_array($run_child);
$allchild = $row_child['count(id)'];

$get_donation = "select sum(cash_amount) from cash_donation ";
$run_donation = mysqli_query($conn,$get_donation);
$row_donation=mysqli_fetch_array($run_donation);
$alldonation = $row_donation['sum(cash_amount)'];

?>




<div class="row">

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-default"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-money fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
    <br>
<div style="font-size:15px"> Rs. <?php echo $alldonation ?>.00  </div>

<div>Total Donations</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewdonor">

<div class="panel-footer"  style="color:black"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->



<div class="col-lg-3 col-md-6">

<div class="panel panel-default">

<div class="panel-heading">

<div class="row">

<div class="col-xs-3">

<i class="fa fa-child fa-5x"> </i>

</div>

<div class="col-xs-9 text-right">

<div class="huge"> <?php echo $allchild ?>  </div>

<div>Children Details</div>

</div>

</div>

</div>

<a href="index.php?viewchild">

<div class="panel-footer"  style="color:black">

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div>

</a>

</div>

</div>


<div class="col-lg-3 col-md-6">

<div class="panel panel-default">

<div class="panel-heading">


<div class="row">

<div class="col-xs-3">

<i class="fa fa-user fa-5x"> </i>

</div>

<div class="col-xs-9 text-right">

<div class="huge"> <?php echo $allstaff ?>  </div>

<div>Staff Details</div>

</div>

</div>

</div>

<a href="index.php?viewstaff">

<div class="panel-footer"  style="color:black">

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div>

</a>

</div>

</div>


<div class="col-lg-3 col-md-6">

<div class="panel panel-default">

<div class="panel-heading">

<div class="row">

<div class="col-xs-3">

<i class="fa fa-male fa-5x"> </i>

</div>

<div class="col-xs-9 text-right">

<div class="huge"> <?php echo $alllabor ?>  </div>

<div>Labors Details</div>

</div>

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewlabour">

<div class="panel-footer" style="color:black"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->



<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-default" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" style="color:black" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Cash Donation Details

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Donar Name:</th>
<th>Fund Amount:</th>
<th>Contact Number:</th>
<th>Date:</th>

</tr>

</thead><!-- thead Ends -->
<?php
   
$get_order = "select * from donars inner join cash_donation  on donars.id = cash_donation.id limit 5 ";
$run_order = mysqli_query($conn,$get_order);

while($row_order=mysqli_fetch_array($run_order)){
$id = $row_order['id'];
$name = $row_order['donor_name'];

$contact = $row_order['contact'];

$address = $row_order['Address'];
$date = $row_order['date'];
$amount = $row_order['cash_amount'];


?>

<tbody><!-- tbody Starts -->


 <tr>
    <td><?php echo $name?></td>
      <td><?php echo $amount?></td>
    <td><?php echo $contact?></td>
   <td><?php echo substr($date, 0,10) ?></td>
   
   
 </tr>

 <?php }?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->
<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?viewdonor" style="color: black" >

View All Donations <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->



</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-12 Ends -->


    </body>

  </html>


