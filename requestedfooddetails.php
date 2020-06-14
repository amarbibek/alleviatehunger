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
                 <div class="col-sm-9 col-md-10 mt-5">
                   <?php
                    $sql="select * from requestforfood r inner join deliverystatus d on  r.DeliveryStatusId=d.Dstatusid inner join user u on u.Userid=r.NeedyPeopleid";
                    $result=$conn->query($sql);
                    if($result->num_rows>0)
                     {
                        echo '<table class="table">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th scope="col">Needy People Name</th>';
                        // echo '<th scope="col">RequestId</th>';
                        echo '<th scope="col">No Of Meals</th>';
                        echo '<th scope="col">Amount Of Food</th>';
                       
                        // echo '<th scope="col">IsPermanentAddress</th>';
                        echo '<th scope="col">Status</th>';
                        echo '<th scope="col">Actions</th>';
                       
                        echo '</tr>';
                        echo '<tbody>';
                        while($row=$result->fetch_assoc())
                        {
                          echo '<tr>';

                          echo '<td>'.$row['FirstName'].'</td>';
                          // echo '<td>'.$row['Requestid'].'</td>';
                          echo '<td>'.$row['NoOfMeals'].'</td>';
                          echo '<td>'.$row['AmountOfFood'].'</td>';
                          
                          // echo '<td>'.$row['IsPermanentAddress'].'</td>';
                          echo '<td>'.$row['status'].'</td>';
                          echo '<td> <a href="#" onclick="ChanegStatus(this);>Edit</a>'.$row['status'].'</td>';
                         
                          echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</thead>';
                        echo '</table>';
                     }
                    
                   ?>
                  

                </div>   <!-- end user details area -->
      
  </div>      <!-- row end -->
  
</div>   <!-- side bar end -->

<script>
function ChangesStatus(e){
  debugger
}
</script>

<?php
// include("/includes/slider.php");
include("/includes/footer.php");