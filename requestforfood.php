<?php
session_start();
// echo $_SESSION['user'];
// exit();
if(!isset($_SESSION['user'])){
    header('location:test.html');
}
//$db=mysqli_connect("localhost","root","");
//mysqli_select_db($db,"alleviatehunger")
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn, 'alleviatehunger' );
//echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/requestforfood.css">
</head>
<body>
    <div class="contact-form">
     <h3>Enter the details:</h3>
     <!-- <div class="txtb">
         <input type="text" id="userid" placeholder="userid" name="" value="">
    </div> -->
    <form action="requestforfood_insert.php" method="POST">
    <div class="txtb">
        
        <input type="text" placeholder="No of Meals" name="no_of_meals" value="">
   </div>
   <div class="txtb">
     <input type="text" name="amt_of_food" placeholder="Amount of Food" value="">
    </div>

    <label>Do check the box if your address is same as the permanent address:</label> 
<input type="checkbox" id="myCheck" onclick="myFunction(this.form)">



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
    <input type="text" id="city" placeholder="city" name="city" value=""> 
    <span id='city-len-error' style="color: red; display: none;">City name cannot be less than 5 chars long!!!</span>
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
    <input class="btn" type="submit" value="SUBMIT">
    </div>
</form>
    <script src='https://code.jquery.com/jquery-3.5.0.min.js'>
    </script>
  
    <script>
      $(function(){ 
          $("#city").keydown(function(e){
              len=$("#city").val().length;
            //   debugger;
              if(len<5){
                // console.log("City name cannot be less than 5 chars long!!!");
                $("#city-len-error").css("display","block");
              }else{
                $("#city-len-error").css("display","none");
              }
            
          });
      });
    </script>
</body>
</html>

