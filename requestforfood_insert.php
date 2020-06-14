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
 if(isset($_POST['check']))
 $Ispermanentaddress=1;
 else
 $Ispermanentaddress=0;
 $donationfoodid=0;
 $deliverystatusid=1;

$amountoffood=$_POST['amt_of_food'];
$noofmeals=$_POST['no_of_meals'];
if($_SESSION['role']==4)
{
$query="insert into requestforfood(NeedyPeopleid,NoOfMeals,AmountOfFood,IsPermanentAddress,DeliveryStatusId)values(\"".$userid."\",\"".$noofmeals."\",\"".$amountoffood."\",\"".$Ispermanentaddress."\",\"".$deliverystatusid."\")";
$result=mysqli_query($conn,$query);
$requestfoodid= mysqli_insert_id($conn);
echo "successful insertion of record1";
$query1="insert into address(Userid,DonationFoodId,RequestFoodId,Street,City,Landmark,State,Pincode,Country)values(\"".$userid."\",\"".$donationfoodid."\",\"".$requestfoodid."\",\"".$street."\",\"".$city."\",\"".$landmark."\",\"".$state."\",\"".$pincode."\",\"".$country."\")";
// $row=mysqli_fetch_assoc($q);
$result1=mysqli_query($conn,$query1);
echo "successful Insertion of record2";
}
else
{
    echo "only needypeople can request for food";
}
 


