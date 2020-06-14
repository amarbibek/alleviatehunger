<?php
session_start();
include("/includes/header.php");
include("connection.php");

$sql="SELECT max(Requestid) From requestforfood";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$foodrequest=$row[0];

$role=2;
$sql1="SELECT count(Userid) From user where RoleId='$role'";
$result1=$conn->query($sql1);
$row1=mysqli_fetch_row($result1);
$volunteer=$row1[0];

$sql2="SELECT sum(Amount) From donationmoney";
$result2=$conn->query($sql2);
$row2=mysqli_fetch_row($result2);
$donation=$row2[0];

$sql3="SELECT sum(NoOfmeals) From donationfood";
$result3=$conn->query($sql3);
$row3=mysqli_fetch_row($result3);
$prepared=$row3[0];

$sql4="SELECT sum(AmountOfFood) From donationfood";
$result4=$conn->query($sql4);
$row4=mysqli_fetch_row($result4);
$raw=$row4[0];

$meals=$prepared+$raw;

?>

<div class="container-fluid" style="margin-top:40px;">  <!-- side bar start -->

  <div class="row">    <!-- row start -->

     <nav class="col-sm-2 bg-light sidebar py-5">    <!-- side bar ned -->

          <div class="sidebar-sticky">
              <ul class="nav flex-column">
              <li class="nav-item active"><a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard">
                </i>Dashboard</a></li> 
                <li class="nav-item"><a class="nav-link" href="userdetails.php"><i class="fas fa-user">
                </i>User Details</a></li>
                <li class="nav-item"><a class="nav-link" href="volunteerdetails.php"><i class="fas fa-user">
                </i>Volunteer Availability</a></li>
                <li class="nav-item"><a class="nav-link" href="donatedfooddetails.php"><i class="fas fa-donate">
                </i>Donated Food Details</a></li>
                <li class="nav-item"><a class="nav-link" href="donatedmoneydetails.php"><i class="fas fa-donate">
                </i>Donated Money Details</a></li>
                <li class="nav-item"><a class="nav-link" href="requestedfooddetails.php"><i class="fas fa-utensils">
                </i>Requested Food Details</a></li>
                <li class="nav-item"><a class="nav-link" href="useraddressdetails.php"><i class="fas fa-address-card">
                </i>User Address Details</a></li>
                <li class="nav-item"><a class="nav-link" href="adminsetting.php"> <i class="fas fa-user-cog">
                &nbsp;</i>Admin Setting</a></li>

              </ul>
          </div>
               
      </nav>     <!-- side bar ned -->
      <div>   <!-- start dashboard area -->
                 <!-- <div class="col-sm-9 col-md-10"> -->
                  <div class="row text-center mx-5">

                   <div class="col-sm-3 mt-5">
                     <div class="card text-white bg-info mb-3"
                     style="max-width:25rem;">
                      <div class="card-header">DonatedFood </div>
                      <div class="card-body">
                       <h4 class="card-title"><?php echo "$meals"; ?>meals</h4>
                       <a class="btn text-white" href="donatedfooddetails.php">View Details</a>
                       </div>
                     </div>
                   </div>

                   <div class="col-sm-3 mt-5">
                     <div class="card text-white bg-info mb-3"
                     style="max-width:25rem;">
                      <div class="card-header">Volunteers</div>
                      <div class="card-body">
                       <h4 class="card-title"><?php echo "$volunteer"; ?></h4>
                       <a class="btn text-white" href="userdetails.php">View Details</a>
                       </div>
                     </div>
                   </div>

                   <div class="col-sm-3 mt-5">
                     <div class="card text-white bg-info mb-3"
                     style="max-width:25rem;">
                      <div class="card-header">Donation </div>
                      <div class="card-body">
                       <h4 class="card-title">Rs.<?php echo "$donation"; ?></h4>
                       <a class="btn text-white" href="donatedmoneydetails.php">View Details</a>
                       </div>
                     </div>
                   </div>

                   <div class="col-sm-3 mt-5">
                     <div class="card text-white bg-info mb-3"
                     style="max-width:25rem;">
                      <div class="card-header" >RequestedFood</div>
                      <div class="card-body">
                       <h4 class="card-title"><?php echo "$foodrequest"; ?></h4>
                       <a class="btn text-white" href="requestedfooddetails.php">View Details</a>
                       </div>
                     </div>
                   </div>

                   

                  <!-- </div>  -->
                </div>   <!-- end dashboard details area -->
      
  </div>      <!-- row end -->
  
</div>   <!-- side bar end -->



<?php
// include("/includes/slider.php");
include("/includes/footer.php");