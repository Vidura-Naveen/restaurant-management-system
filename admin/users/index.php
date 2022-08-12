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
    <title>Admin Manage Users</title>
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

                    <h2 class="page-title">Manage User</h2>

                    <table>

                        <thead>
                            
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th colspan="2">Actions</th>
                        </thead>
                        <tbody id="useritemlist"|>
                          
                        </tbody>

                    </table>

                </div>

            </div>

        <!--Admin content//-->

    </div>
    <!--Page Wrapper//-->


    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Custom Scrypt-->
    <script src="../../js/scripts.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


//GET View

$.ajax({
    url:"http://localhost/web/restumng/restapi/user.php",
    method:"GET",
    dataType:'JSON', 
    cache:false ,
    success: function(response){
        console.log(response);

        response.forEach(function(raw){
              
            
            $('#useritemlist').append('<tr>');   
            $('#useritemlist').append('<td>'+raw.uname+'</td>');
            $('#useritemlist').append('<td>'+raw.uemail+'</td>');
            $('#useritemlist').append('<td>'+raw.role+'</td>');
            $('#useritemlist').append('<td><a href="edit.php?id='+raw.id+'" class="edit">Edit</a></td>');
            $('#useritemlist').append('<td><a data-id='+raw.id+' href="#" class="delete" id="del">Delete</a></td>');
            $('#useritemlist').append('</tr>');
            
                
            
        });
      
    }
});

            $('#useritemlist').on('click','#del', function(){
                            
                            var id =  $(this).data('id');
                
                            $.ajax({
                                url: "http://localhost/web/restumng/restapi/user.php?id="+id,
                                method: "DELETE",
                                dataType: "JSON",
                                success: function(response) {
                                    console.log(response);
                                    setInterval('location.reload()',100);
                                } 
                            })
                
                            });     

</script>
</body>
</html>