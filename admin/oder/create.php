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
    <title>Admin edit Order</title>
</head>
<body>
   
<?php include '../adminheader.php';?>

    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">  

        <!--Left Sidebar-->

            <div class="left-sidebar">
                <ul>
                    <li><a href="../food/index.php">Manage Food</a></li>
                    <li><a href="index.php">Manage Order</a></li>
                    <li><a href="../users/index.php">Manage User</a></li>
                </ul>
            </div>

        <!--Left Sidebar//-->

        <!--Admin content-->

            <div class="admin-content">

                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Edit Order</a> -->
                    <a href="index.php" class="btn btn-big">Manage Order</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Edit Order</h2>

                   
                    <?php include('../../restapi/db.php '); ?>
         

                                <?php

                                if (isset($_GET['id'])){
                                        
                                            
                                    $pID = $_GET['id'];
                                    
                                    $query = "SELECT * from tbloder where id LIKE '%$pID%'  ";
                                    
                                    
                                    $result = mysqli_query($conn ,$query);
                                        
                                    $row = mysqli_fetch_array($result);

                                    $id = $row['id'];        
                                    $name = $row['name'];
                                    $number = $row['number'];
                                    $oder = $row['oder'];
                                    $addfood = $row['addfood'];
                                    $howmuh = $row['howmuh'];
                                    $datetime = $row['datetime'];
                                    $address = $row['address'];
                                    $msg = $row['msg'];
                                }
                                
                                ?>
                   
                    <form action="create.php" id="updateorderitem">  
                    <?php echo '<input type="hidden" value='.$id.' name="id" id="id" >' ?>
                            <div class="inputBox">
                                <div class="input">
                                    <span>Your name</span>
                                    <?php echo '<input type="text" value='.$name.' id="name" placeholder="enter your name" class="text-input">' ?>
                                </div>
                                <div class="input">
                                    <span>Your number</span>
                                    <?php echo '<input type="number" value='.$number.' id="number" placeholder="enter your number" class="text-input"> '?>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>Your order</span>
                                    <?php echo '<input type="text" value='.$oder.' id="oder" placeholder="enter food name" class="text-input">' ?>
                                </div>
                                <div class="input">
                                    <span>Additional food</span>
                                    <?php echo '<input type="test" value='.$addfood.' id="addfood" placeholder="extra with food" class="text-input">' ?>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>How musch</span>
                                    <?php echo '<input type="number" value='.$howmuh.' id="howmuh" placeholder="how many orders" class="text-input">' ?>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>Your address</span>
                                    <BR></BR>
                                    <?php echo '<textarea name=""  placeholder="enter your address" id="address" cols="30" rows="10">'.$address.'</textarea> '?>
                                </div>
                                <div class="input">
                                    <span>Your message</span>
                                    <BR></BR>
                                    <?php echo '<textarea name=""  placeholder="enter your message" id="msg" cols="30" rows="10">'.$msg.'</textarea> "'?>
                                </div>
                            </div>

                            <input type="submit" value="UPDATE" class="btn btn-big"  onClick="showMessage1()">

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

        $('#updateorderitem').on("submit",function(event) {
                event.preventDefault();

                var id = $('#id').val();
                var name = $('#name').val();
                var number = $('#number').val();
                var oder = $('#oder').val();  
                var addfood = $('#addfood').val();
                var howmuh = $('#howmuh').val();
                var address = $('#address').val();
                var msg = $('#msg').val();

                $.ajax({
                    url: "http://localhost/web/restumng/restapi/order.php?id="+id+"&name="+name+"&number="+number+"&oder="+oder+"&addfood="+addfood+"&howmuh="+howmuh+"&address="+address+"&msg="+msg,
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