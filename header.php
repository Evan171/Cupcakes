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
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:white;letter-spacing:2px;font-size: 25px;"><strong>Cupcakes</strong>
      <img src="https://s-media-cache-ak0.pinimg.com/originals/7c/c0/2d/7cc02d75f9ffa470bca561b9628eb157.jpg" alt="logo" class="img-responsive" style="width:50px;border-radius: 50%;margin-left:75px;">
       </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavBar">
    <?php if (isset($_SESSION['email'])) { ?>
        <ul class="nav navbar-nav navbar-right login">
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Food Cart</a></li>
            <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
    <?php } else { ?>
        <ul class="nav navbar-nav navbar-right login">
        <li><a href="login.php" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li style="margin-left:40px"><a href="#" style="color:white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
    <?php } ?>
    </div>
</nav>
</body>