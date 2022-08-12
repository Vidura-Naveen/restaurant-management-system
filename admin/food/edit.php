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
    <title>Edit Post</title>
</head>
<body>
    
<?php include '../adminheader.php';?>

    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">  

        <!--Left Sidebar-->

            <div class="left-sidebar">
                <ul>
                    <li><a href="index.php">Manage Food</a></li>
                    <li><a href="../oder/index.php">Manage Order</a></li>
                    <li><a href="../users/index.php">Manage User</a></li>
                </ul>
            </div>

        <!--Left Sidebar//-->

        <!--Admin content-->

            <div class="admin-content">

                <div class="button-group">
                    
                    <a href="index.php" class="btn btn-big">Manage Food</a>
                    <a href="create.php" class="btn btn-big">Add Food</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Edit Food</h2>
                    <?php include('../../restapi/db.php '); ?>
         

                                <?php

                                if (isset($_GET['id'])){
                                        
                                            
                                    $pID = $_GET['id'];
                                    
                                    $query = "SELECT * from tblfood where id LIKE '%$pID%'  ";
                                    
                                    
                                    $result = mysqli_query($conn ,$query);
                                        
                                    $row = mysqli_fetch_array($result);

                                    $id = $row['id'];        
                                    $fname = $row['fname'];
                                    $fdetail = $row['fdetail'];
                                    $fimg = $row['fimg'];
                                    $fprice = $row['fprice'];
                                    $addtocart = $row['addtocart'];
                                    
                                }
                                
                                ?>

                   

                    <form action="create.php" method="post" id="updatefooditemlist" enctype="multipart/form-data">
                    <?php echo '<input type="hidden" value='.$id.' name="id" id="id" >' ?>
                        <div>
                            <label>Name</label>
                            <?php echo '<input type="text" value='.$fname.' id="fname" name="fname" class="text-input" required>'?>
                        </div>
                        <div>
                            <label>Dtails</label>
                            <br>
                            <?php echo '<textarea name="fdetail" id="fdetail" id="editor" cols="30" rows="10" required>'.$fdetail.'</textarea>'?>
                        </div>
                        <div>
                            <label>Price</label>
                            <?php echo '<input type="number" id="fprice" value='.$fprice.' name="fprice" class="text-input" required>'?>
                        </div>
                        <div>
                            <label>Image</label>
                            <?php echo '<input type="file"  name="fimg" value='.$fimg.' id="fimg" class="text-input" >'?>
                        </div>

                        <div>
                            <button type="submit" name="posted" id="submit" class="btn btn-big" onClick="showMessage1()">Post</button>
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

        $('#updatefooditemlist').on("submit",function(event) {
                event.preventDefault();

                var id = $('#id').val();
                var fname = $('#fname').val();
                var fdetail = $('#fdetail').val();
                var fimg = $('#fimg').val();  
                var fprice = $('#fprice').val();
                var addtocart = $('#addtocart').val();
                

                    
                                    

                $.ajax({
                    url: "http://localhost/web/restumng/restapi/food.php?id="+id+"&fname="+fname+"&fdetail="+fdetail+"&fimg="+fimg+"&fprice="+fprice+"&addtocart="+addtocart,
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