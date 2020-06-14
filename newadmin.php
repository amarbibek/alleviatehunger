<html>
<head><title> First db demo</title>
</head>
<body>
<?php

$conn = new mysqli("localhost", "root", "");
mysqli_select_db($conn, 'alleviatehunger' );
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$lname=$_POST["lname"];
	$gender1=$_POST["gender1"];
	$role1=1;
	$cno=$_POST["cno"];
	$email=$_POST["email"];
	
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	// $query="INSERT INTO USER(FirstName,MiddleName,LastName,username,password,ContactNo,Email,GenderId,RoleId) values('$fname','$mname','$lname,'$uname,$pass,$cno,$email,$gender1,$role1)";
	
	$query="insert into user(FirstName,MiddleName,LastName,username,password,ContactNo,Email,GenderId,RoleId)values(\"".$fname."\",\"".$mname."\",\"".$lname."\",\"".$uname."\",\"".$pass."\",\"".$cno."\",\"".$email."\",\"".$gender1."\",\"".$role1."\")";
	// echo $query;
		$query1="select * from user where username='$uname'";
		// echo $query1;




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

?>

</body>
</html>