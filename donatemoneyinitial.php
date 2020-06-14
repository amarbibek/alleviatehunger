<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/donatemoney.css">
</head>
<body>
    <form action="donatemoney.php" method="POST">
    <div class="contact-form">
     <h3>Donate to support our work enter the details:</h3>
    
     <?php
            // echo $_SESSION['user'];
            if(!(isset($_SESSION['user']))){
                echo ' <div class="txtb">
                <label>Mobile no:</label> <input type="text" name="mobileno" value="">
           </div>
           <div class="txtb">
            <label>Email Address:</label> <input type="text" name="email" value="">
            </div>
            <div class="txtb">
            <label>Amount:</label> <input type="text" name="amount" value="">
            </div>';
            }else{

                echo '<div class="txtb">
                <label>Amount:</label> <input type="text" name="amount" value="">
                </div>';
            }            
            ?>
   
    <input class="btn" type="submit" value="SUBMIT" name="submit">
    </div>
</form>
</body>
</html>