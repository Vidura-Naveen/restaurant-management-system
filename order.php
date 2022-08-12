
<section class="order" id="order">

<h3 class="sub-heading"> order now </h3>
<h1 class="heading"> free and fast </h1>

<form action="" id="oderitemlist">

    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
        </div>
        <div class="input">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your order</span>
            <input type="text" placeholder="enter food name" name="oder" required>
        </div>
        <div class="input">
            <span>additional food</span>
            <input type="test" placeholder="extra with food" name="addfood" required>
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>how musch</span>
            <input type="number" placeholder="how many orders" name="howmuh" required>
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your address</span>
            <textarea placeholder="enter your address" id="" cols="30" rows="10" name="address" required></textarea>
        </div>
        <div class="input">
            <span>your message</span>
            <textarea placeholder="enter your message" id="" cols="30" rows="10" name="msg" required></textarea>
        </div>
    </div>

    <input type="submit" value="order now" class="btn" id="btnid" onClick="showMessage()">

</form>

<script type="text/javascript">
            function showMessage() {
                alert("Thank you for your order !");
            }
        </script>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
            $('#oderitemlist').on("submit",function(event){
                            event.preventDefault();
                            $.ajax({
                                url: "http://localhost/web/restumng/restapi/order.php",
                                method: "post",
                                dataType: " JSON",
                                data: $('#oderitemlist').serialize(),
                                success: function(response){
                                    console.log(response); 
                                    setInterval('location.reload()',1000);
                                }
                            });
                        });

    </script>