<?php
if (session_status() === PHP_SESSION_NONE){session_start();}
if (isset($_SESSION['rates'])){

}
else{
  function getRates(){
    $endpoint = 'live';
    $access_key = '8b362df2fb36b023f2abea7924c232d9';
    $ch = curl_init('https://api.currencylayer.com/'.$endpoint.'?access_key='.$access_key.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response:
    $exchangeRates = json_decode($json, true);

    // Access the exchange rate values, e.g. GBP:
    $rate= $exchangeRates['quotes']['USDKES'];
    return $rate;
  }
  $_SESSION['rates']=getRates();
}

//handle login and registered
$errors="";
$show_modal = false;
if(isset($_POST['login'])){
  //check if user exists
  $stmt = $conn->prepare('SELECT * FROM customers WHERE email = ?');
  $stmt->execute([$_POST['email']]);
  $rowCount = $stmt->rowCount();
  if($rowCount < 1){
    $errors=$errors."Account with that email doesnt exist.<br />";
    $show_modal = true;
  }
  else{
    //fetch password
  $user = $stmt->fetch();
  $password=$user->password;
  if($password == md5($_POST['password'])){
    $_SESSION['user']=$_POST['email'];
    header("Location: account/index");
  }
  else{
    $errors=$errors."Wrong password.<br />";
    $show_modal = true;
  }
  }
}
if(isset($_POST['register'])){
//check if user already exists
$stmt = $conn->prepare('SELECT * FROM customers WHERE email = ?');
$stmt->execute([$_POST['email']]);
$rowCount = $stmt->rowCount();
if($rowCount > 0){
  $errors=$errors."User with that email already exists.<br />";
  $show_modal = true;
}
else{
  $sql = 'INSERT INTO customers(email, password) VALUES(:email, :password)';
  $stmt = $conn->prepare($sql);
  $stmt->execute(['email' => $_POST['email'], 'password' => md5($_POST['password'])]);
  $_SESSION['user']=$_POST['email'];
  header("Location: account/index");
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticketify | Your Travel Patner</title>
    <link rel="icon" type="image/png" href="http://localhost/ticketify/assets/images/logo\logo.png">
    <!-- ==================Start Css Link===================== -->

<!--<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">-->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/animate.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/bootstrap.min.css">
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/fontawesome.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/icofont.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/magnific-popup.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/slick.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/slick-theme.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/select2.min.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/tippy.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/app.css">
<link rel="stylesheet" href="http://localhost/ticketify/assets/css/child.css">
<!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>


  <!--
        ================== Header Area Start===================
     -->

  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="http://localhost/ticketify/assets/images/all-img/preloader.gif" class="preloder" alt="preloder image" draggable="false">
        <!--style loader -->

    </div>
    <strong>Loading...</strong><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

  <header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="text-center text-md-left top-message text-white">
                    <li class="text-white"> <i class="icofont-headphone-alt text-white"></i>Support</li>
                    <li class="text-white"><a href="mailto:info@ticketify.co.ke " id="mailto"><i class="icofont-email text-white"></i>info@ticketify.co.ke</a></li>
                </ul>
            </div><!-- end top header single -->
            <div class="col-md-6">
                <ul class="text-center text-md-right top-social">
                    <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-money-bill-wave"></i>Currencies</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">USD</a>
                            <a class="dropdown-item" href="#">KES</a>
                            <a class="dropdown-item" href="#">TZS</a>
                            <a class="dropdown-item" href="#">UGX</a>
                        </div>
                        </li>

                    <?php if (! isset($_SESSION['user'])){ ?>
                      <li><a href="#"><i class="fas fa-ticket-alt"></i>Search Booking</a></li>
                      <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Sign in | Join</a></li>
                    <?php } else{ ?>
                      <li><a href="logout"><i class="far fa-sign-out"></i>Log out</a></li>
                      <li><a href="#"><i class="fas fa-ticket-alt"></i>My Bookings</a></li>
                    <?php  } ?>

                </ul>
            </div><!-- end top header single -->
        </div>
    </div>
</div> <!-- end top header -->


    <div class="main-header rt-sticky">
      <nav class="navbar">
        <div class="container">
          <a href="index" class="brand-logo"><img class="logo" src="http://localhost/ticketify/assets/images/logo/logo.png" alt=""></a>
          <a href="index" class="sticky-logo"><img class="logo" src="http://localhost/ticketify/assets/images/logo/logo.png" alt=""></a>
          <div class="ml-auto d-flex align-items-center">


<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'].'/ticketify' ; ?>">Home</a></li>
        <li><a href="#">Destinations</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">FAQs</a></li>
        <li class="menu-item-has-children"><a href="#">Travel Information</a>
            <ul class="sub-menu">
                <li class="menu-item-has-children"><a href="#">Terms & Conditions</a></li>
                <li class="menu-item-has-children"><a href="#">Taxes</a></li>
                <li class="menu-item-has-children"><a href="#">Travel Information</a></li>
                <li class="menu-item-has-children"><a href="#">Location, Topography & Climate</a></li>
                <li class="menu-item-has-children"><a href="#">Flight Connections</a>  </li>
                <li class="menu-item-has-children"><a href="#">How To Book</a></li>
            </ul>
        </li>


    </ul>
    <div class="mobile-menu">
        <div class="menu-click">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div><!-- end main menu -->
            <div class="rt-nav-tolls d-flex align-items-center">
    <span class="d-md-inline d-none"><a href="contact-us" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Contact
            Us</a></span>
</div><hr/>

          </div>
        </div>
      </nav>

    </div><!-- /.bootom-header -->

  </header>


<!-- Modal -->

<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="http://localhost/ticketify/assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Login in to Ticketify</h4>
                    <p>Log in to view your profile and manage bookings.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="http://localhost/ticketify/assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Create your Account</h4>
                    <p>Signing up enables to manage your profile and bookings.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="rt-form">
                      <span class="error" style="color: red;"><?php echo $errors; ?></span>
                        <input type="email" name="email" class="form-control pill rt-mb-15" placeholder="Email">
                        <input type="password" name="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckss">
                                <label class="form-check-label" for="gridCheckss">
                                     Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" name="login" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="rt-form">
                      <span class="error"><?php echo $errors; ?></span>
                        <input type="email" name="email" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" name="password" class="form-control pill rt-mb-15" placeholder="Password">

                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new services,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" name="register" class="rt-btn rt-gradient pill d-block text-uppercase " value="Sign Up">
                    </form>
                    <div class="ac-register">
                        <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">

                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>
