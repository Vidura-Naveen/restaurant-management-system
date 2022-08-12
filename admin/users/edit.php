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
    <title>Edit User</title>
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

                    <h2 class="page-title">Edit User</h2>
                    <?php include('../../restapi/db.php '); ?>
         

         <?php

         if (isset($_GET['id'])){
                 
                     
             $pID = $_GET['id'];
             
             $query = "SELECT * from tbladmin where id LIKE '%$pID%'  ";
             
             
             
             $result = mysqli_query($conn ,$query);
                 
             $row = mysqli_fetch_array($result);

             $id = $row['id'];        
             $uname = $row['uname'];
             $upassword = $row['upassword'];
             $uemail = $row['uemail'];
             $role = $row['role'];
             
         }
         
         ?>

                    <form action="create.php" method="" id="updateuseritemlist">
                    <?php echo '<input type="hidden" value='.$id.' name="id" id="id" >' ?>
                        <div>
                            <label>Username</label>
                            <?php echo '<input type="text" value='.$uname.' id="uname" name="uname" class="text-input" required>'?>
                        </div>
                        <div>
                            <label>Email</label>
                            <?php echo '<input type="email" value='.$uemail.' id="uemail" name="uemail" class="text-input" required>'?>
                        </div>
                        <div>
                            <label>Password</label>
                            <?php echo '<input type="password" value='.$upassword.' id="upassword" name="upassword" class="text-input" required>'?>
                        </div>
                        <div>
                            <label>Role</label>
                            <?php echo '<select name="role" value='.$role.' id="role" class="text-input">'?>
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" id="submit" class="btn btn-big" onClick="showMessage1()">Add User</button>
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
    <script type="text/javascript">
            function showMessage1() {
                alert("Updated !");
            }
        </script>  


<script>
        $('#updateuseritemlist').on("submit",function(event){
                        event.preventDefault();
         

                var id = $('#id').val();
                var uname = $('#uname').val();
                var upassword = $('#upassword').val();
                var uemail = $('#uemail').val();  
                var role = $('#role').val();
                

                        $.ajax({
                            url: "http://localhost/web/restumng/restapi/user.php?id="+id+"&uname="+uname+"&upassword="+upassword+"&uemail="+uemail+"&role="+role,
                            method: "PUT",
                            dataType: "JSON",
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    });

</script> 

</body>
</html>