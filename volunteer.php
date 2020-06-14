<?php
session_start();
// echo $_SESSION['user'];
// exit();
if(!isset($_SESSION['user'])){
    header('location:testvolunteer.html');
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
    <link rel="stylesheet" href="css/volunteer.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

</head>
<body>
<form action="volunteer_insert.php" method="POST">
    <div class="contact-form">
     <h3>To volunteer with us Enter the following details:</h3>
     <!-- <div class="txtb">
         <label>UserId</label> <input type="text" name="" value="">
    </div> -->
    <h5> Enter slot between 9a.m to 12p.m, 12p.m to 3p.m,3p.m to 6p.m or 6p.m to 9p.m * </h5>
   
    <div class="txtb">
        
        <!-- <label>Slot start time:</label> <input type="text" id="starttime" name="slotstarttime" value=""> -->
        <label>Slot start time:</label> <input type="time" name="slotstarttime" value="">
   </div>
   <div class="txtb">
    <label>Slot end time:</label> <input type="time" name="slotendtime" value="">
    </div>
   <div class="txtb">
    <label>Enter date:</label> <input type="date" name="date" value="">
    </div>
    <input class="btn" type="submit" value="SUBMIT">
    </div>
</form>
<script>
$(function(){
    $('#starttime').timepicker();
});
</script>
</body>
</html>