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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Add User</title>
</head>
<body>
    
<?php include '../adminheader.php';?>


    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">  

        <!--Left Sidebar-->

            <div class="left-sidebar">
                <ul>
                    <li><a href="../food/index.php">Manage Food</a></li>
                    <li><a href="../oder/index.php">Manage Order</a></li>
                    <li><a href="index.php">Manage User</a></li>
                </ul>
            </div>

        <!--Left Sidebar//-->

        <!--Admin content-->
       

            <div class="admin-content">

                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage User</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <form action="create.php" method="" id="useritemlist">
                    <input type="hidden" value='.$id.' name="id" id="id" >
                        <div>
                            <label>Username</label>
                            <input type="text" name="uname" class="text-input" required>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="uemail" class="text-input" required>
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="upassword" class="text-input" required>
                        </div>
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" id="submit" class="btn btn-big" >Add User</button>
                        </div>
                    </form>

                </div>

            </div>

        <!--Admin content//-->

    </div>
    <!--Page Wrapper//-->
    

    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <!--Custom Scrypt-->
    <script src="../../js/scripts.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
        $('#useritemlist').on("submit",function(event){
                        event.preventDefault();
                        $.ajax({
                            url: "http://localhost/web/restumng/restapi/user.php",
                            method: "post",
                            dataType: " JSON",
                            data: $('#useritemlist').serialize(),
                            success: function(response){
                                console.log(response); 
                            }
                        });
                    });

</script> 

</body>
</html>