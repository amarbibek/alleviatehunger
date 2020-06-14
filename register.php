<?php

//$db=mysqli_connect("localhost","root","");
//mysqli_select_db($db,"alleviatehunger")
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
	// echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn, 'alleviatehunger' );
// echo "Connected successfully";
?>

<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="./css/register.css">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./js/login.js"></script>
</head>
<body>
  <div class="login-page">
    <div class="form">

      <form class="login-form" onsubmit="return validation()" >
      <input type="text" placeholder="user name" name="user" id="uname"/>
       <input type="password" placeholder="password" name="passw" id="pas"/>
        <button type="submit">Sign In</button>
        <p class="message">Not Registered? <a href="#">Create an Account</a></p>
      </form>
      <form class="register-form" action="register_insert.php" onsubmit="return validate()" method="POST">
	  
        <input  type="text" placeholder="First name" name="fname" id="first"/>
       <input type="text" placeholder="Middle name" name="mname" id="middle"/>
       <input  type="text" placeholder="Last name" name="lname" id="last"/>
	  <select name="gender1"> 
       <?php
	   $res=mysqli_query($conn,"Select * from gender");
	   while($row=mysqli_fetch_array($res))
	   {
	   ?>
	  
	   <?php
	   echo ' <option value='. $row{"Genderid"}.'>'. $row{"Gender"}.'</option>';
	   ?>
	   
	   <?php
	   }
	   ?>
		</select>
		<select name="role1">
       <?php
	   $res=mysqli_query($conn,"Select * from role where RoleName != 'Admin'");
	   while($row=mysqli_fetch_array($res))
	   {
	   ?>
	   <!-- <option> -->
	   <?php
    //  echo $row{"RoleName"};
    echo ' <option value='. $row{"RoleId"}.'>'. $row{"RoleName"}.'</option>';
	   ?>
	   <!-- </option> -->
	   <?php
	   }
	   ?>
		</select>
		
      
	  <!-- 
	 <select id="gender">
  <option>Male</option>
  <option>Female</option>
  <option>Others</option>
  
  </select>
   <select id="role">
  <option>Donater</option>
  <option>Volunteer</option>
  <option>Needy People</option>
  
  </select>
  -->
        <input class="contactno"type="text" placeholder="Contact Number" name="cno" id="contact"/>
        <input class="email" type="text" placeholder="Email id" name="email" id="email"/>


        <input class="user" type="text" placeholder="username" name="uname" id="user"/>
        <input class="passw" type="text" placeholder="password" name="pass" id="pass"/>
		 <input class="passw" type="text" placeholder="confirm password" name="pa" id="cpass"/>
        <button type="submit">Create an Account</button>
        <p class="message"> Already Registered? <a href="#">Sign In</a>
        </p>
      </form>


    </div>
  </div>

  <script src='https://code.jquery.com/jquery-3.5.0.min.js'>
  </script>

  <script>
    $('.message a').click(function(){
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
  </script>
</body>
</html>
