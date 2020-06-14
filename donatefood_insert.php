<?php
session_start();
include("connection.php");
?>
<?php
 $userid=$_SESSION['login_user'];
 $foodtype=$_POST['foodtype'];
 $street=$_POST['street'];
 $city=$_POST['city'];
 $landmark=$_POST['landmark'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];
 $country=$_POST['country']; 
 if(isset($_POST['check']))
 $Ispermanentaddress=1;
 else
 $Ispermanentaddress=0;
 $requestfoodid=0;
 $fooddonationstatusid=1;

$amountoffood=$_POST['amt_of_food'];
$noofmeals=$_POST['no_of_meals'];

$query="insert into donationfood(Userid,FoodTypeid,AmountOfFood,NoOfMeals,IsPermanentAddress,status)values(\"".$userid."\",\"".$foodtype."\",\"".$amountoffood."\",\"".$noofmeals."\",\"".$Ispermanentaddress."\",\"".$fooddonationstatusid."\")";
$result=mysqli_query($conn,$query);
$donation_food_id= mysqli_insert_id($conn);
echo "successful insertion of record1";
$query1="insert into address(Userid,DonationFoodId,RequestFoodId,Street,City,Landmark,State,Pincode,Country)values(\"".$userid."\",\"".$donation_food_id."\",\"".$requestfoodid."\",\"".$street."\",\"".$city."\",\"".$landmark."\",\"".$state."\",\"".$pincode."\",\"".$country."\")";
// $row=mysqli_fetch_assoc($q);
$result1=mysqli_query($conn,$query1);
echo "successful Insertion of record2";
 
 


