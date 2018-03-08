<?php
    $con=mysql_connect("localhost","root","","Zomato") or die(mysqli_error($con));
 ?>
<head>
    <title>Zomato Webpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Raleway" rel="stylesheet">
</head>
<body style="background-color: #f3f3f3">
    <?php include 'header.php' ?>
<div class="container">
    <div class="col-lg-12">
    <div class="row" style="margin-top:2.5%">
        <div class="col-xs-18 col-sm-6 col-md-3 col-lg-12">    
          <div class="thumbnail">
            <div class="caption">
                <center>
                <h3>Vinay Health home</h3>
                <p style="font-size:large">Charni Road,Mumbai</p>
                </center>
            </div>
            <div class="row">
                <div class="col-lg-8">
            <img src="http://d27k8xmh3cuzik.cloudfront.net/wp-content/uploads/2015/10/3-1024x683.jpg" alt="streetfood" class="img-responsive streetfood" style="height:500px">
                </div>
                <div class="col-lg-4">
                    <h3>Choose the best from our menu.</h3>
                    <div class="col-lg-12">
                    <div class="checkbox">
                        <label><input type="checkbox" value="Option1" name="fooditem" id="fooditem">Option 1</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Option2" name="fooditem" id="fooditem">Option 2</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Option3" name="fooditem" id="fooditem">Option 3</label>
                    </div>
                        <center><p><center><a href="#" class="btn btn-danger btn-md" role="button" onclick="checked();">Add to Foodcart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></center></p></center>
                
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
<script>
    function checked(){
    var display = [];
    checkboxes = document.getElementsByName("fooditem");
    for( var i=0; i<checkboxes.length; i++){
        if( checkboxes[i].checked ){
            display.push(checkboxes[i].value);
        }
    }
    console.log(display);
}

</script>
</body>