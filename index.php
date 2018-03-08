<?php require 'common.php'; ?>
<!DOCTYPE html>
<head>
    <title>Zomato Webpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Raleway" rel="stylesheet">
    <?php
        header("Access-Control-Allow-Origin: *");
    ?>
    <script>

var a=[],b;
$(document).ready(function(){
$('.detect').click(function(){
$.getJSON("http://ipinfo.io", function (response) {
    b=response.loc;
    a=b.split(',');
$.getJSON("http://apis.mapmyindia.com/advancedmaps/v1/t1s3ureuiu3dq27pm3aiq21g7bhlx574/rev_geocode?lat="+a[0]+"&lng="+a[1]).done(function(res){
    //console.log(a+" , "+b);
    var build=res.results[0].houseName;
    var street=res.results[0].street;
    var sublocality=res.results[0].subLocality;
    var locality=res.results[0].locality;
    var city=res.results[0].city;
    console.log(build+","+street+","+sublocality+","+locality+","+city);
    $('#address_locate').val(build+","+street+","+sublocality+","+locality+","+city);
});
});
});
});
function copycode(){
    var code=document.getElementById("code").value;
    console.log(code);
}
    </script>
</head>
<body>
<?php include 'header.php';?>
    <!--<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/7c/c0/2d/7cc02d75f9ffa470bca561b9628eb157.jpg" alt="logo" style="width:50px;height:100%;">
       <a class="navbar-brand" href="#" style="color:white"><strong>Cupcakes</strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#" style="color:white">Home</a></li>
      <li><a href="#" style="color:white">Page 1</a></li>
      <li><a href="#" style="color:white">Page 2</a></li>
      <li><a href="#" style="color:white">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li style="margin-left:40px"><a href="#" style="color:white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
      <a href="streetfood.php"><img src="http://www.dishcovery.in/sites/default/files/styles/recipe-detail-cover/public/recipes/VadaPav_Header.jpg?itok=vOYBQM_W
" alt="Vada Pav" style="width:100%;height:500px"></a>
      <div class="carousel-caption">
        <h3>Vada Pav</h3>
        <p>Signature Dish Of Mumbai</p>
      </div>
    </div>

    <div class="item active">
      <a href="cupcake.php"><img src="http://1.bp.blogspot.com/-KVY4cyQXGOA/UDL3WN3JYoI/AAAAAAAABNI/VsCJYX7pG98/s1600/IMG_3448.JPG" alt="Cupcakes" style="width:100%;height:500px"></a>
      <div class="carousel-caption">
        <h3>Cupcakes</h3>
        <p>That's what we serve Best</p>
      </div>
    </div>

    <div class="item">
      <a href="seafood.php"><img src="http://www.mccormickandschmicks.com/Libraries/whatsinseason/seafood-restaurant-houston-tx-salmon-vegetables.sflb.ashx" alt="Seafood" style="width:100%;height:500px"></a>
      <div class="carousel-caption">
        <h3>Seafood</h3>
        <p>You name it,We have it</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div class="row">-->
    <div class="container pad_top">
    <div class="col-xs-9">
    <div class="row">
      <div class="col-xs-4 col-lg-4">
      <a href="streetfood.php" style="text-decoration: none;color:black;">
      <div class="card">
        <img class="card-img-top img-responsive" src="http://www.freepressjournal.in/wp-content/uploads/2015/08/misal.jpg" alt="Street Food">
        <div class="card-block">
          <center>
           <h4 class="card-title">Street Food</h4>
           <p class="card-text">Choose the best street food over the streets of Mumbai from various of local stalls.</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
        </div>
      </div></a>
    </div>
    <div class="col-xs-4 col-lg-4">
        <a href="cupcake.php" style="text-decoration: none;color:black;">
      <div class="card">
        <img class="card-img-top img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN4zuhzQcRLV24qySWFdP-GfixIAKAI2cjRMehv2aGMuRyNfs7" alt="Cup Cakes">
        <div class="card-block">
          <center>
           <h4 class="card-title">Cup Cakes</h4>
           <p class="card-text">Enjoy the scrumptious cup cakes with our partners from world class bakeries!</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
        </div>
            </div></a>
    </div>    
  <div class="col-xs-4 col-lg-4">
      <div class="card">
          <a href="seafood.php" style="text-decoration: none;color:black;">
        <img class="card-img-top img-responsive" style="width: 100%;" src="https://www.lifesambrosia.com/wp-content/uploads/grilled-shrimp-taco-salad.jpg" alt="Sea Food">
        <div class="card-block">
          <center>
           <h4 class="card-title">Sea Food</h4>
           <p class="card-text">For all the sea food lovers,from shrimps to salmons,you name it,we have it!</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
              </div></a>
      </div>
    </div>    
  </div>
  <div class="row pad_top" style="padding-top: 5%;">
    <div class="col-xs-4 col-lg-4">
      <a class="card_link" href="bengali_cuisine.php" style="text-decoration: none;color:black;">
      <div class="card">
        <img class="card-img-top img-responsive" src="http://www.vegrecipesofindia.com/wp-content/uploads/2013/06/kulcha-recipe-12.jpg" style="height: 165px;" alt="Bengali Cuisine">
          <center>
           <h4 class="card-title">Bengali Cuisine</h4>
           <p class="card-text">From Kulchas to delicious sweets,these Bengali cuisines will startle you!</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
        </div></a>
      </div>
      <div class="col-xs-4 col-lg-4">
      <a href="chinese_cuisine.php" style="text-decoration: none;color:black;">
      <div class="card">
        <img class="card-img-top img-responsive" src="https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2017/02/07/15/chinese.jpg" style="height: 165px;" alt="Chinese Food">
          <center>
           <h4 class="card-title">Chinese Food</h4>
           <p class="card-text">When was the last time you've ever had something chinese?This list is specially for you!</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
        </div></a>
      </div>
      <div class="col-xs-4 col-lg-4">
        <a href="south_indian.php" style="text-decoration: none;color:black;">
        <div class="card">
          <img class="card-img-top img-responsive" src="https://www.whatsuplife.in/gurgaon/blog/wp-content/uploads/2014/07/south-indian-food.jpg" style="height: 165px;" alt="South Indian Food">
          <center>
           <h4 class="card-title">South Indian</h4>
           <p class="card-text">Take your time out for these best-in-mumbai South Indian restaurants here!</p> 
          </center>         
        <div class="col-xs-6">
            <a href="#" class="btn btn-danger btn-block"><i class="fa fa-cutlery"></i></a>
        </div>
        <div class="col-xs-6">
          <p class="btn btn-default btn-list btn-block">
          <i class="fa fa-heart-o" id="heart" onclick="hrt_chn()"></i></p>
        </div>
        </div></a>
      </div>
    </div>
  </div>    
    <center>
    <div class="col-lg-3 order">
        <h3>Order Food Online</h3>
        <p style="font-size:large">From the best restaurants delivering to <br>your doorstep</p>
        <div>
            <div class="col-lg-12">
            <h4 style="margin-left:-15px">Enter your delivery location</h4>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-12 inner-addon left-addon">
                <i class="fa fa-location-arrow" aria-hidden="true" style="font-size:x-large;color:#a1a2a3"></i>
                <input class="location form-control" placeholder="Just Click..." autocomplete="off" id="address_locate">
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-default btn-danger detect">Detect<i class="fa fa-map-marker" aria-hidden="true" style="font-size:large"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 coupon">
        <div class="col-lg-12">
        <h3 style="color:white">For Discount</h3></div> 
        <div class="col-lg-12"><input type="text" value="NIKEVA" disabled style="color:#cd202d" class="form-control" id="code"></div>
        <div class="col-lg-12"><button class="coupon_code btn btn-default" onclick="copycode();">Copy Code</button></div>
    </div>
    <div class="col-xs-3 search">
<h4 style="color: #cd202d;font-size: 18px;">Search the cuisines&nbsp;<i class="fa fa-search"></i></h4><hr class="hr_search">

<input type="text" id="myInput" class="search-query" onkeyup="myFunction()" placeholder="Search for items.." title="Type in a name">
<div class="note" style = "overflow: scroll">
<ul id="myUL">
  <li><a href="#" class="header">STREET FOOD</a></li>
  <li><a href="#">Vada Pav</a></li>
  <li><a href="#">Pav Bhaji</a></li>
  <li><a href="#">Khada Pav Bhaji</a></li>
  <li><a href="#">Schezwan Vada Pav</a></li>
  <li><a href="#">Cheese Dabeli</a></li>
  <li><a href="#">Cheese Schezwan Vada Pav</a></li> 
  <li><a href="#">Black Pav Bhaji</a></li>
  <li><a href="#">Masala Pav</a></li>  
  <li><a href="#">Santosh Special Pav Bhaji</a></li>
  <li><a href="#">Toast Sandwich</a></li>
  <li><a href="#">Cheese Masala Toast</a></li> 
  <li><a href="#">Grilled Sandwich</a></li>
  <li><a href="#">American Burger</a></li> 
  <li><a href="#">Sandwich</a></li>  
  <li><a href="#" class="header">BENGALI</a></li>
  <li><a href="#">Fish Fry</a></li>
  <li><a href="#">Chicken Kaviraji</a></li>
  <li><a href="#">Malpua</a></li>
  <li><a href="#">Daab</a></li>
  <li><a href="#">Chingri</a></li>
  <li><a href="#">Luchi</a></li>
  <li><a href="#">Bengali Biryani</a></li>
  <li><a href="#">Chicken Chaap</a></li>  
  <li><a href="#">Rasmalai</a></li>
  <li><a href="#">Chicken Kasha</a></li> 
  <li><a href="#">Mutton Kosha</a></li> 
  <li><a href="#">Jumbo Prawns</a></li> 
  <li><a href="#">Kosha Mangsho</a></li>  
  <li><a href="#">Daab Chingri</a></li>  
  <li><a href="#">Rasgulla</a></li> <li><a href="#">Masala Kulcha</a></li> 
  <li><a href="#">Prawn Malai Curry</a></li>
  <li><a href="#">Basanti Pulao</a></li> 
  <li><a href="#">Bengali Thali</a></li> 
  <li><a href="#">Bengali Chicken Biryani</a></li>
  <li><a href="#">Chicken Jhol</a></li>
  <li><a href="#">Shondesh</a></li>
  <li><a href="#">Rost</a></li>
  <li><a href="#">Panta Bhat</a></li>
  <li><a href="#">Kulcha</a></li>
  <li><a href="#">Chicken Ghee Biryani</a></li>
  <li><a href="#">Rasmalai</a></li>
  <li><a href="#">Muri Laru</a></li>
  <li><a href="#"></a>Machher Jhol</li>
  <li><a href="#" class="header">CUPCAKES</a></li>
  <li><a href="#">Butterfinger</a></li>
  <li><a href="#">Caramel Chocolate Chip</a></li>
  <li><a href="#">Chocolate Brownie</a></li>
  <li><a href="#">Chocolate Coconut</a></li>
  <li><a href="#">Chocolate Coconut Cream Pie</a></li>
  <li><a href="#">Chocolate Cookie Crunch </a></li>
  <li><a href="#">Chocolate Expresso</a></li>
  <li><a href="#">Chocolate Maple</a></li>
  <li><a href="#">Chocolate Peanut Butter</a></li>
  <li><a href="#">Chocolate Salted Caramel</a></li>
  <li><a href="#">Chocolate Sundae</a></li>
  <li><a href="#">Choclate Toffee Crunch</a></li>
  <li><a href="#">Chocolate Vanilla</a></li>
  <li><a href="#">Cookies & Cream</a></li>
  <li><a href="#">Double Chocolate Peanut Butter</a></li>
  <li><a href="#">German Chocolate</a></li>
  <li><a href="#">Milky Way</a></li>
  <li><a href="#">Mint Chocolate Chip</a></li>
  <li><a href="#">Snickers</a></li>
  <li><a href="#">Triple Chocolate</a></li>
  <li><a href="#">Chocolate Vanilla Maple</a></li>
  <li><a href="#">Funfetti</a></li>
  <li><a href="#">Snickerdoodle</a></li>
  <li><a href="#">Vanilla Coconut</a></li>
  <li><a href="#">Vanilla Coconut Cream Pie</a></li>
  <li><a href="#">Vanilla Maple</a></li>
  <li><a href="#">Chocolava</a></li>
  <li><a href="#" class="header">SOUTH INDIAN</a></li>
  <li><a href="#">Pongal</a></li>
  <li><a href="#">Upma</a></li>
  <li><a href="#">Masala Dosa</a></li>
  <li><a href="#">Rasam Vada</a></li>
  <li><a href="#">Puri</a></li>
  <li><a href="#">Uttapam</a></li>
  <li><a href="#">Rava Sada Dosa</a></li>
  <li><a href="#">Neer Dosa</a></li>
  <li><a href="#">Ginger Lemon Juice</a></li>
  <li><a href="#">Prawn Curry</a></li>
  <li><a href="#">Bombil Fry</a></li>
  <li><a href="#">Chicken Chettinad</a></li>
  <li><a href="#">Malabari Paratha</a></li>
  <li><a href="#">Sol Kadhi</a></li>
  <li><a href="#">Chettinad Dosa</a></li>
  <li><a href="#">Rava Dosa</a></li>
  <li><a href="#">Aloo Masala</a></li>
  <li><a href="#">Tomato Rice</a></li>
  <li><a href="#">Dahi Vada</a></li>
  <li><a href="#">Kulfi</a></li>
  <li><a href="#">Appam</a></li>
  <li><a href="#">Chettinad Idli</a></li>
  <li><a href="#">Chilli Chicken</a></li>
  <li><a href="#">Filter Coffee</a></li>
  <li><a href="#">Butter Idli</a></li>
  <li><a href="#">Sambhar Idli</a></li>
  <li><a href="#">South Indian Thali</a></li>
  <li><a href="#">Ragi Sampati</a></li>
  <li><a href="#">Keema Muttilu</a></li>
  <li><a href="#">Button Idli</a></li>
  <li><a href="#">Mysore Idli</a></li>
  <li><a href="#">Paneer Uthappam</a></li>
  <li><a href="#">Natu Kodi</a></li>
  <li><a href="#">Hyderabadi Chicken Biryani</a></li>
  <li><a href="#">Chakra Spl. Biryani</a></li>
  <li><a href="#">Kerala Dosa</a></li>
  <li><a href="#">Malayalam Special Thali</a></li>
  <li><a href="#">Tamil Sambhar Rice</a></li>
  <li><a href="#">Prawns Kuzhambu</a></li>
  <li><a href="#">Payyoli Chicken Fry</a></li>
  <li><a href="#">Kerala Chicken Roast</a></li>
  <li><a href="#">Kheema with Coconut Curry</a></li>
  <li><a href="#">Kerala Karimeen Fry</a></li>
  <li><a href="#" class="header">CHINESE</a></li>
  <li><a href="#">Sushi Noodles</a></li>
  <li><a href="#">Raspberry Mousse</a></li>
  <li><a href="#">Prawn Dumplings</a></li>
  <li><a href="#">Macaroon</a></li>
  <li><a href="#">Pepper Soup</a></li>
  <li><a href="#">Chicken Hakka Noodles</a></li>
  <li><a href="#">Hot Basil Chicken Cup</a></li>
  <li><a href="#">Momos</a></li>
  <li><a href="#">Bannoffee Pie</a></li>
  <li><a href="#">Miso Soup</a></li>
  <li><a href="#">Maki Roll</a></li> 
  <li><a href="#">Peking Duck</a></li>
  <li><a href="#"Sushi Bar></a></li>
  <li><a href="#">Udon Noodle</a></li>
  <li><a href="#">Dim Sum</a></li>
  <li><a href="#">Kiwi Mojito</a></li>
  <li><a href="#">Mint Mojito</a></li>
  <li><a href="#">Sweet Corn Soup</a></li>
  <li><a href="#">Thai Soup</a></li>
  <li><a href="#">Kung Pao Paneer</a></li>
  <li><a href="#">Cigar Roll</a></li>
  <li><a href="#">Kimchi</a></li>
  <li><a href="#">Clear soup</a></li>
  <li><a href="#">Mushroom Soup</a></li>
  <li><a href="#">Molten Chocolate Cake</a></li>
  <li><a href="#">Caramel Custard</a></li>
  <li><a href="#">Sesame Chicken</a></li>
  <li><a href="#">Spicy Crabmeat Soup</a></li>
  <li><a href="#">Manchow Soup</a></li>
  <li><a href="#">Sushi</a></li>
  <li><a href="#">Dumplings</a></li>
  <li><a href="#">Sangria</a></li>
  <li><a href="#">Sea Food</a></li>
  <li><a href="#">Jasmine Rice</a></li>
  <li><a href="#">Mudpie</a></li>
  <li><a href="#">Mudcake</a></li>
  <li><a href="#">Scallops</a></li>
  <li><a href="#">Virgin Mojito</a></li>
  <li><a href="#">Caramel Custard</a></li>
  <li><a href="#">Spring Roll</a></li>
  <li><a href="#">Chocolate Mousse</a></li>
  <li><a href="#">Mocktails</a></li>
  <li><a href="#">Crispy Chicken</a></li>
  <li><a href="#">Khau Suey</a></li>
  <li><a href="#">Crab Soup</a></li>
  <li><a href="#">Crackling Spinach</a></li>
  <li><a href="#">Crispy Chicken</a></li>
  <li><a href="#" class="header">SEAFOOD</a></li>
  <li><a href="#">Grilled Halibut with Peach</a></li>
  <li><a href="#">Pepper Salsa</a></li>
  <li><a href="#">Bourbon-Glazed Salmon</a></li>
  <li><a href="#">Salmon Croquettes</a></li>
  <li><a href="#">Seared Scallops with Warm Tuscan Beans</a></li>
  <li><a href="#">Tuna Noodle Casserole</a></li>
  <li><a href="#">Pan-Grilled Halibut with Chimichurri</a></li>
  <li><a href="#">Lemon Pepper Shrimp Scampi</a></li>
  <li><a href="#">Fish Tacos with Lime-Cilantro Crema</a></li>
  <li><a href="#">Crab Cakes with Spicy Remoulade</a></li>
  <li><a href="#">Scallop Piccata with Sauteed Spinach</a></li>
  <li><a href="#">Sesame-Crusted Tuna with Wasabi-Ponzu Sauce</a></li>
  <li><a href="#">Mussels in Tomato-Wine Broth</a></li>
  <li><a href="#">Pan-Fried Trout with Tomato Basil Sauce</a></li>
  <li><a href="#"></a></li>
  <li><a href="#">Jerk-Rubbed Catfish with Spicy Cilantro Slaw</a></li>
  <li><a href="#">Blackened Tilapia Baja Taco</a></li>
  <li><a href="#">Baked Grouper with  Chunky Tomato Sauce</a></li>
  <li><a href="#">Cioppino-Style Seafood Stew </a></li>
</ul>
</div>
</div>
    </center>
    </div>
    <?php include 'footer.php'; ?>
    <!--<footer>
  <center>
    <img src="https://s-media-cache-ak0.pinimg.com/originals/7c/c0/2d/7cc02d75f9ffa470bca561b9628eb157.jpg" class="img-responsive logo_footer">
    <h3>About Us</h3><hr class="hr_footer"> 
    <div class="col-xs-6">
    <h5> NIKESH SHAH :</h5><hr class="hr_footer"> <a href="#" class="btn btn-social fb"><i class="fa fa-facebook"></i></a><a href="#" class="btn btn-social insta"><i class="fa fa-instagram"></i></a> <a href="#" class="btn btn-social twitter"><i class="fa fa-twitter"></i></a>
    </div>
    <div class="col-xs-6">
    <h5> REVANTH DASARI :</h5><hr class="hr_footer">  <a href="#" class="btn btn-social fb"><i class="fa fa-facebook"></i></a><a href="#" class="btn btn-social insta"><i class="fa fa-instagram"></i></a> <a href="#" class="btn btn-social twitter"><i class="fa fa-twitter"></i></a>
    </div>
  </center>
  
</footer>-->
</body>
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>











