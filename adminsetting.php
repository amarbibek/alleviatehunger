<?php
session_start();
include("/includes/header.php");
include("connection.php");
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
                <li class="nav-item"><a class="nav-link" href="adminsetting.php"><i class="fas fa-user-cog">
                </i>Admin Setting</a></li>

              </ul>
          </div>
               
      </nav>     <!-- side bar ned -->
      <div>   <!-- start user details area -->
                 <div class="col-sm-6">
                   <form action="newadmin.php" method="POST">
                      <b> MakeNewAdmin </b>
                       <div class="txtb1">
                           <label>FirstName</label><input type="text" placeholder="firstname" name="fname" id="">
                       </div>
                       <div class="txtb1">
                           <label>MiddleName</label><input type="text" placeholder="middlename" name="mname" id="">
                       </div>
                       <div class="txtb1">
                           <label>LastName</label><input type="text" placeholder="lastname" name="lname" id="">
                       </div>
                       <div class="txtb1">
                           <label>username</label><input type="text" placeholder="username" name="uname" id="">
                       </div>
                       <div class="txtb1">
                           <label>password</label><input type="text" placeholder="password"  name="pass" id="">
                       </div>
                       <div class="txtb1">
                           <label>ContactNo</label><input type="text" placeholder="contactno" name="cno" id="">
                       </div>
                       <div class="txtb1">
                           <label>Email Id</label><input type="text" placeholder="emailid" name="email" id="">
                       </div>
                       <div class="txtb1">
                           <label>Gender</label>
                       <select name="gender1"> 
                            <?php
	                            $res=mysqli_query($conn,"Select * from gender");
	                                while($row=mysqli_fetch_array($res))
	                                  {
	                                    ?>
	  
	                                 <?php
	                                   echo ' <option value='. $row{"Genderid"}.'>'. $row{"Gender"}.'</option>';
	                                   ?>
	   
	                                   <?php
	                                    }
	                                    ?>
		                </select>
                        </div>
                        <div class="txtb1">
                       <button type="submit" class="btnn">ADD</button>
                        </div>
                   </form>

                </div>   <!-- end user details area -->
      
  </div>      <!-- row end -->
  
</div>   <!-- side bar end -->



<?php
// include("/includes/slider.php");
include("/includes/footer.php");