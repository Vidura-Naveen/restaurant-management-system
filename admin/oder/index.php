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
    <title>Admin Manage Order</title>
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
                    <!-- <a href="create.php" class="btn btn-big">Add order</a> -->
                    <a href="index.php" class="btn btn-big">Manage order</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Manage order</h2>

                    <table>

                        <thead>
                                          
                            <th>Name</th>
                            <th>Your Number </th>                 
                            <th>Your Order</th>
                            <th>Additional Food</th>   
                            <th>How much</th>                 
                            <th>Date time</th>
                            <th>Address</th>                 
                            <th>Message </th>
                            <th colspan="3">Actions</th>
                        </thead>

                        <tbody id="oderitemlist">
                          
                           
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
    url:"http://localhost/web/restumng/restapi/order.php",
    method:"GET",
    dataType:'JSON', 
    cache:false ,
    success: function(response){
        console.log(response);

        response.forEach(function(raw){
              
            
            $('#oderitemlist').append('<tr>');   
            $('#oderitemlist').append('<td>'+raw.name+'</td>');
            $('#oderitemlist').append('<td>'+raw.number+'</td>');
            $('#oderitemlist').append('<td>'+raw.oder+'</td>');
            $('#oderitemlist').append('<td>'+raw.addfood+'</td>');
            $('#oderitemlist').append('<td>'+raw.howmuh+'</td>');
            $('#oderitemlist').append('<td>'+raw.datetime+'</td>');
            $('#oderitemlist').append('<td>'+raw.address+'</td>');
            $('#oderitemlist').append('<td>'+raw.msg+'</td>');
            $('#oderitemlist').append('<td><a href="create.php?id='+raw.id+'" class="edit">Edit</a></td>');
            $('#oderitemlist').append('<td><a data-id='+raw.id+' href="#" class="delete" id="del">Delete</a></td>');
            $('#oderitemlist').append('</tr>');
            
                
            
        });
      
    }
});

                    $('#oderitemlist').on('click','#del', function(){

                    
                    var id =  $(this).data('id');

                    $.ajax({
                        url: "http://localhost/web/restumng/restapi/order.php?id="+id,
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