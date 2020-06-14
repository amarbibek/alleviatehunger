<?php
session_start();
include("connection.php");
// echo $_SESSION['user'];
// exit();
if(!isset($_SESSION['user'])){
    header('location:testfood.php');
}
//$db=mysqli_connect("localhost","root","");
//mysqli_select_db($db,"alleviatehunger")

?>
<?php
if(isset($_POST['donatefood'])){
    $foodtype=$_POST['foodtype'];
    $amt_of_food=$_POST['amt_of_food'];
    $no_of_meals=$_POST['no_of_meals'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $landmark=$_POST['landmark'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $country=$_POST['country']; 
	$query="insert into user(FirstName,MiddleName,LastName,username,password,ContactNo,Email,GenderId,RoleId)values(\"".$fname."\",\"".$mname."\",\"".$lname."\",\"".$uname."\",\"".$pass."\",\"".$cno."\",\"".$email."\",\"".$gender1."\",\"".$role1."\")";
	




$result=mysqli_query($conn,$query1);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Username already taken";
}

else
{
$result1=mysqli_query($conn,$query);
 echo "<br>Successful insertion of record";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/donatefood.css">
</head>
<body>
    <div class="contact-form">
        <form action="donatefood_insert.php" method="POST">
     <h3>Enter the details:</h3>
     <!-- <div class="txtb">
         <input type="text" placeholder="userid" name="" value="">
    </div> -->
    <div class="txtb">
        
          <select name="foodtype" id="foodtype"> 
            <?php
            $res=mysqli_query($conn,"Select * from foodtype");
            while($row=mysqli_fetch_array($res))
            {
            ?>
           
            <?php
            echo ' <option value='. $row{"Fid"}.'>'. $row{"Type"}.'</option>';
            ?>
            
            <?php
            }
            ?>
             </select>
   </div>
   <div class="txtb" id="div_amt_of_food">
    <input type="text" placeholder="Amount Of Food" name="amt_of_food" value="">
    </div>
   <div class="txtb" id="div_no_of_meals">
    <input type="text" placeholder="No of meals" name="no_of_meals" value="">
   
    </div>

    <label>Do check the box if your address is same as the permanent address:</label> 
<input type="checkbox" id="myCheck" name="check" onclick="myFunction(this.form)">



<script>
function myFunction(f) {
  var checkBox = document.getElementById("myCheck");
  
  if (checkBox.checked == true){
   <?php
   $query="select * from address where Userid={$_SESSION['login_user']}";
   $q=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($q);

   ?>
   f.street.value="<?php echo $row['Street']; ?>";
   f.city.value="<?php echo $row['City']; ?>";
   f.landmark.value="<?php echo $row['Landmark']; ?>";
   f.state.value="<?php echo $row['State']; ?>";
   f.pincode.value="<?php echo $row['Pincode']; ?>";
   f.country.value="<?php echo $row['Country']; ?>";
   

  } 
}
</script>

    <div class="txtb">
    <label>Address</label> <input type="text" placeholder="street" name="street" value="">
   
    </div>
    <div class="txtb">
    <input type="text" placeholder="city" name="city" value=""> 
    </div>
    <div class="txtb">
        <input type="text" placeholder="landmark" name="landmark" value=""> 
    </div>
    <div class="txtb">
    <input type="text" placeholder="state" name="state" value=""> 
    </div>
    <div class="txtb">
     <input type="text" placeholder="pincode" name="pincode" value=""> 
    </div>
    <div class="txtb">
     <input type="text" placeholder="country" name="country" value=""> 
    </div>
   
    <input class="btn" name="donatefood" type="submit" value="SUBMIT">
    </form>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        $(function(){
            initddl();
            $("#foodtype").on("change",function(e){
                initddl();
            });
        });
        function initddl(){
            // console.log($(e).children("option:selected").val());
            if($("#foodtype").val()==1){
                    $("#div_no_of_meals").hide();
                    $("#div_amt_of_food").show();
                }else{
                    $("#div_no_of_meals").show();
                    $("#div_amt_of_food").hide();
                } 
        }
    </script>
</body>
</html>

<?php
// include("./includes/footer.php");