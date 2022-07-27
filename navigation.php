<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="bootstrap.min.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">




<script src="bootstrap.min.js"></script>


<nav class="navbar navbar-inverse navbar-fixed-top" >

<div class="navbar-header" >

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" >


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button>

<a class="navbar-brand" href="index.php?overview" >SAMADHI CHILDREN HOME</a>


</div>






<div class="collapse navbar-collapse navbar-ex1-collapse">

<ul class="nav navbar-nav side-nav">

    
    <br><br> 

<li>

<a href="index.php?overview">

<i class="fa fa-fw fa-dashboard"></i> OverView

</a>

</li>

<li>

<a href="#" data-toggle="collapse" data-target="#donations">

<i class="fa fa-fw fa-money"></i> Donations

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="donations" class="collapse">

<li>
<a href="donorform.php"> Add Donations </a>
</li>

<li>
<a href="index.php?viewdonor"> View Donations </a>
</li>




</ul>

</li>


<li>

<a href="#" data-toggle="collapse" data-target="#staff">

<i class="fa fa-fw fa-users"></i> Staff

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="staff" class="collapse">

<li>
<a href="staffform.php"> Add Staff </a>
</li>

<li>
<a href="index.php?viewstaff"> View Staff </a>
</li>

</ul>

</li>



<li>

<a href="#" data-toggle="collapse" data-target="#child">

<i class="fa fa-fw fa-child"></i> child

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="child" class="collapse">

<li>
<a href="childform.php"> Add child </a>
</li>

<li>
<a href="index.php?viewchild"> View child </a>
</li>

</ul>

</li>

<li>

<a href="#" data-toggle="collapse" data-target="#labors">

<i class="fa fa-fw fa-male"></i> Labors 

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="labors" class="collapse">

<li>
<a href="labourform.php"> Add Labors  </a>
</li>

<li>
<a href="index.php?viewlabour"> View Labors  </a>
</li>

</ul>

</li>


<li>

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li>

</ul>

</div>

</nav>

<?php

?>