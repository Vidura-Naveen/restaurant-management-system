<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality </h1>

 
        <div id="foodcard" class='box-container'>
      
        </div>
   
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url= "http://localhost/web/restumng/restapi/food.php";
    var asynchronous = true;

    // ajax request
    ajax.open(method,url,asynchronous);
    ajax.send();


    ajax.onreadystatechange = function(){
        if(this.readyState ==4 && this.status == 200){

            var data = JSON.parse(this.responseText);
            console.log(data);

            var html = "";
            for(var i=0; i<data.length; i++){
                var fname = data[i].fname;
                var fdetail = data[i].fdetail;
                var fimg = data[i].fimg;
                var fprice = data[i].fprice;
                var addtocart = data[i].addtocart;
                
            html += "<div class='box-container' '>";
            html += "<div class='box' '>";
            html += "<div class='image' '>";
            html += "<img src="+fimg+">";
            html += "<a href='#' class='fas fa-heart'></a>";
            html += "</div>";
            html += "<div class='content' >";
            html += "<div class='stars' >";
            html += "<i class='fas fa-star'></i>";
            html += "<i class='fas fa-star'></i>";
            html += "<i class='fas fa-star'></i>";
            html += "<i class='fas fa-star'></i>";
            html += "<i class='fas fa-star-half-alt'></i>";
            html += "</div>";
            html += "<h3>"+ fname+"</h3>";
            html += "<p>"+fdetail+"</p>";
            html += "<a href='#' class='btn'>add to cart</a>";
            html += "<span class='price'>"+fprice+"</span>";
            html += "</div>";
            html += "</div>";
            html += "</div>";

            }
            document.getElementById("foodcard").innerHTML = html;
           
        }
    }



    
</script>



