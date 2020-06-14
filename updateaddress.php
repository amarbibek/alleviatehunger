<?php
session_start();
include("connection.php");
?>
<?php
 $userid=$_SESSION['login_user'];
 $street=$_POST['street'];
 $city=$_POST['city'];
 $landmark=$_POST['landmark'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];
 $country=$_POST['country']; 
 $donationfoodid=0;
 $requestfoodid=0;
 $query1="select * from address where Userid={$_SESSION['login_user']}";
 $result1=mysqli_query($conn,$query1);
 if(!$result1)
 {
 $query="insert into address(Userid,DonationFoodId,RequestFoodId,Street,City,Landmark,State,Pincode,Country)values(\"".$userid."\",\"".$donationfoodid."\",\"".$requestfoodid."\",\"".$street."\",\"".$city."\",\"".$landmark."\",\"".$state."\",\"".$pincode."\",\"".$country."\")";
 
 $result=mysqli_query($conn,$query);
 echo "<br>Successful insertion of record";
 }
 else{
    $query3 = "UPDATE address SET Street='$street',City='$city',
    Landmark='$landmark', State='$state' ,Country='$country' WHERE Userid={$_SESSION['login_user']}";
    $result=mysqli_query($conn,$query3);
    echo "<br>Successful updation of record";
 }


