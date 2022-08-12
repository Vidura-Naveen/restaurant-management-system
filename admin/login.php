<!DOCTYPE html>

<?php
    
include("../restapi/db.php");
 
if(isset($_POST['login-btn'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM tbladmin  WHERE uname='". $_POST["username"] . "' AND upassword='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:food/index.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <p>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></p>
    </b>
</font>
<hr>
 
<?php   
      }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font avasome-->
    <script src="https://kit.fontawesome.com/7bbc05e69c.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!--Costum Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Login</title>
</head>
<body>
    
<?php include 'loginheader.php';?>



    <div class="auth-content">

        <form action="login.php" method="POST">

            <h2 class="form-title">Login</h2>

            <div>
                <label>Username</label>
                <input type="text" name="username" id="username" class="text-input">
            </div>
        
            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" class="text-input">
            </div>
           
           <div>
               <button type="submit" name="login-btn" class="btn btn-big">Login</button>
           </div>
           <p>Or <a href="register.php">Sign Up</a></p>
        </form>

    </div>
    

   

    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <!--Custom Scrypt-->

    <script src="js/scripts.js"></script> 
</body>
</html> 