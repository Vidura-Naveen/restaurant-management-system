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
    <title>Admin Add Post</title>
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

                    <h2 class="page-title">Add Food</h2>

                    <form action="create.php" method="post" id="fooditemlist" enctype="multipart/form-data">
                        <div>
                            <label>Name</label>
                            <input type="text" name="fname" class="text-input" required>
                        </div>
                        <div>
                            <label>Dtails</label>
                            <br>
                            <textarea name="fdetail" id="editor" cols="30" rows="10" required></textarea>
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="number" name="fprice" class="text-input" required>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="fimg" id="myImage" class="text-input" >
                        </div>

                        <div>
                            <button type="submit" name="posted" id="submit" class="btn btn-big">Post</button>
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
            $('#fooditemlist').on("submit",function(event){
                            event.preventDefault();
                            $.ajax({
                                url: "http://localhost/web/restumng/restapi/food.php",
                                method: "post",
                                dataType: " JSON",
                                data: $('#fooditemlist').serialize(),
                                success: function(response){
                                    console.log(response); 
                                }
                            });
                        });

    </script> 

    <!-- <script>
    $(document).ready(function(){
      
      $("#submit").click(function(e){
      	e.preventDefault();

      	let form_data = new FormData();
      	let img = $("#myImage")[0].files;
 
        // Check image selected or not
        if(img.length > 0){
        	form_data.append('my_image', img[0]);

        	$.ajax({
        		url: 'http://localhost/web/restumng/admin/food/upload.php',
        		type: 'post',
        		data: form_data,
        		contentType: false,
                processData: false,
                success: function(res){
                	const data = JSON.parse(res);

                	if (data.error != 1) {
                       let path = "uploads/"+data.src;
                       $("#preImg").attr("src", path);
                       $("#preImg").fadeOut(1).fadeIn(1000);
                       $("#myImage").val('');

                	}else {
                		$("#errorMs").text(data.em);
                	}
                }

        	});
         
        }else {
           $("#errorMs").text("Please select an image.");
        }
      });
        
    });
	</script> -->
</body>
</html>