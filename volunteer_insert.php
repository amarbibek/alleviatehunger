<?php
session_start();
include("connection.php");
?>
<?php
 $userid=$_SESSION['login_user'];
 $slotstarttime=$_POST['slotstarttime'];
 $slotendtime=$_POST['slotendtime'];
 $date=$_POST['date'];

 
 
 $query="insert into volunteeravailability(Userid,StartTime,EndTime,Date)values(\"".$userid."\",\"".$slotstarttime."\",\"".$slotendtime."\",\"".$date."\")";
 
 $result=mysqli_query($conn,$query);
 if($result)
 echo "<br>Successful insertion of record";
 else
 echo "<br>Error in insertion";
 
 