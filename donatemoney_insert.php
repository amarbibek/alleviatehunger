<?php
session_start();
include("connection.php");
?>
<?php
 if(isset($_SESSION['login_user']))
 {
        $query1="select * from user where Userid={$_SESSION['login_user']}";
        $q=mysqli_query($conn,$query1);
        $row=mysqli_fetch_assoc($q);
        $userid=$_SESSION['login_user'];
        $emailid=$row['Email'];
        $amount=$_SESSION['amount'];
        $contactno=$row['ContactNo'];
        $query="insert into donationmoney(Userid,ContactDetail,EmailId,Amount)values(\"".$userid."\",\"".$contactno."\",\"".$emailid."\",\"".$amount."\")";
        $result=mysqli_query($conn,$query);
        echo "successful insertion of record1";
 }
 else{

    $emailid=$_SESSION['email'];
    $amount=$_SESSION['amount'];
    $contactno=$_SESSION['mobile'];
    $query1="insert into donationmoney(ContactDetail,EmailId,Amount)values(\"".$contactno."\",\"".$emailid."\",\"".$amount."\")";
    $result1=mysqli_query($conn,$query1);
    echo "successful insertion of record2";       

 }
