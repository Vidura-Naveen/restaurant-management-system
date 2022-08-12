<!DOCTYPE html>
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
    <title>Register</title>
</head>
<body>

<?php include 'loginheader.php';?>


    <div class="auth-content">

        <form action="register.php" method="POST" id="registerlist">

            <h2 class="form-title">Register</h2>

            <!--<div class="msg sucess error">
                <li>Username Require</li>
            </div>-->

            <div>
                <label>Username</label>
                <input type="text" name="uname" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="uemail" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="upassword" class="text-input">
            </div>
           <div>
               <button type="submit" name="register-btn" class="btn btn-big">Register</button>
           </div>
           <p>Or <a href="login.php">Sign In</a></p>
        </form>

    </div>
    

   

    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <!--Custom Scrypt-->

    <script src="js/scripts.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
        $('#registerlist').on("submit",function(event){
                        event.preventDefault();
                        $.ajax({
                            url: "http://localhost/web/restumng/restapi/user.php",
                            method: "post",
                            dataType: " JSON",
                            data: $('#registerlist').serialize(),
                            success: function(response){
                                console.log(response); 
                            }
                        });
                    });

</script> 
</body>
</html>