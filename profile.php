
<?php
session_start();
include("/includes/header.php"); 
include("connection.php");
?>



<div class="container">
    <div class="wrapper">
        <?php
        $query="select * from user u inner join gender g on  u.GenderId=g.GenderId inner join role r on u.RoleId=r.RoleId  where u.Userid={$_SESSION['login_user']} ";
        $query1="select * from address where Userid={$_SESSION['login_user']}";
        $q=mysqli_query($conn,$query);
        $q1=mysqli_query($conn,$query1);
        ?>
        <h3 style="text-align:center">My Profile </h3>
        <?php
       
        $row=mysqli_fetch_assoc($q);
        $row1=mysqli_fetch_assoc($q1);
        // echo $row;
        echo '<div style="text-align:center"><img class="img-circle profile-img" height=110 width=120 src="images/profile.jpg"> </div>';
        ?>
        <div style="text-align: center;"><b>Welcome,</b>
        <h4>
            <?php echo $_SESSION['user']; ?>

        </h4>
        </div>
        <?php
             echo "<table>";
             echo "<tr>";

             echo "<td>";
             echo "<b> First Name: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['FirstName'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Middle Name: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['MiddleName'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Last Name: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['LastName'];
             echo "</td>";

             echo "</tr>";
             echo "<tr>";

             echo "<td>";
             echo "<b> Gender: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['Gender'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Role: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['RoleName'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Username: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['username'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Password: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['password'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Contact No: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['ContactNo'];
             echo "</td>";

             echo "</tr>";

             echo "<tr>";

             echo "<td>";
             echo "<b> Email Id: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['Email'];
             echo "</td>";

             echo "</tr>";

             echo "</table>";
        ?>
    </div>
</div>
<div class="contact-form">
        <form action="updateaddress.php" method="POST">
        
<div class="txtb">
<label> <?php if(!isset($row1['Street'])){echo "ADD" ;} else{ echo "UPDATE" ;}  ?> your Address</label>
     <input type="text" placeholder="street" name="street" value="<?php echo $row1['Street'] ?>">
   
    </div>
    <div class="txtb">
    <input type="text" placeholder="city" name="city" value="<?php echo $row1['City'] ?>"> 
    </div>
    <div class="txtb">
        <input type="text" placeholder="landmark" name="landmark" value="<?php echo $row1['Landmark'] ?>"> 
    </div>
    <div class="txtb">
    <input type="text" placeholder="state" name="state" value="<?php echo $row1['State'] ?>"> 
    </div>
    <div class="txtb">
     <input type="text" placeholder="pincode" name="pincode" value="<?php echo $row1['Pincode'] ?>"> 
    </div>
    <div class="txtb">
     <input type="text" placeholder="country" name="country" value="<?php echo $row1['Country'] ?>"> 
    </div>
     <div class="txtb">
    <input class="btnn" name="donatefood" type="submit" value="UPDATE">

     </div>
    </form>
    </div>


<?php
include("/includes/footer.php");
?>