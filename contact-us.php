<?php
//import heade and config
require_once('config/db.php');
require('includes/header.php');
$success=null;
if(isset($_POST['submit'])){
    $sql = 'INSERT INTO messages(name,phone,email,message) VALUES(:name, :phone, :email, :message)';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $_POST['name'],'phone' => $_POST['phone'],'email' => $_POST['email'],'message' => $_POST['message']]);
    $success="  Thanks for Contacting Us!<br />We will get back to you as soon as possible.";

  }
  else{
  //$fail="Account with that email has already subscribed.<br />";

  }

 ?>
<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(assets/images/all-img/baner3.jpg)">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Contact Us</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Contact Us

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->


<section class="contact-area">
    <div class="rt-design-elmnts rtbgprefix-contain" style="background-image: url(assets/images/all-img/abt_vec_3.png)">

    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Contact us</span>

                        Get In Touch
                    </h2><!-- /.rt-section-title -->
                      <?php if ($success !=null): ?>
                        <div class="alert alert-success">
                          <i class="far fa-check-circle fa-2x"></i><?php echo $success ?>| <a href="/ticketify"> Go Home</a>
                        </div>
                      <?php endif; ?>
                    <p>Any kind of travel/flights information don't hesitate to contact with us for imiditate
                    customer support. We are love to hear from you</p>
                    <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                    <form action="contact-us.php" class="rt-form rt-line-form" method="POST">
                        <input type="text" placeholder="Name" name="name" class="form-control rt-mb-30" required>
                        <input type="text" placeholder="Phone (254728979121)" name="phone" class="form-control rt-mb-30" required>
                        <input type="email" placeholder="Email" name="email" class="form-control rt-mb-30" required>
                        <textarea placeholder="Message" name="message" class="form-control rt-mb-30" required></textarea>
                        <input type="submit" name="submit" value="SUBMIT NOW" class="rt-btn rt-gradient pill text-uppercase rt-mb-30" required>
                    </form>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
    </div><!-- /.container -->
</section>


<section class="rt-map-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp">
                    <div class="icon-thumb">
                        <img src="assets\images\icons-image\con-1.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Our Address</h5>
                        <p>971-949 8th NextGen Mall Mombasa Rd <br>
                        Nairobi, Kenya</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp" data-wow-duration="1.5s">
                    <div class="icon-thumb">
                        <img src="assets\images\icons-image\con-2.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Phone & Email</h5>
                        <p>(254) 728979121 <br>
                        info@ticketify.co.ke</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp" data-wow-duration="2s">
                    <div class="icon-thumb">
                        <img src="assets\images\icons-image\con-3.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Stay In Touch</h5>
                        <ul class="rt-social rt-circle-style">

                            <li><a href="https://www.facebook.com/Ticketify-1468119663320381/"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://twitter.com/TicketifyKe"><i class="icofont-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/sgtsafaris/"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="map">

    </div>
</section>



<!--
    ============= Brands area start==========
 -->

 <section class="brands-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 mx-auto text-center">
                 <div class="rt-section-title-wrapper">
                     <h2 class="rt-section-title">
                         <span>Take a Look at Our</span>
                         Trusted Partners
                     </h2><!-- /.rt-section-title -->
                     <p>
                         We are committed to being the best.In order to give you the best flight ticketing services,we patner
                          with different companies and business locally and internationaly.
                     </p>
                 </div><!-- /.rt-section-title-wrapper -->
             </div><!-- /.col-lg-9 -->
         </div><!-- /.row -->
         <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
         <div class="row">
             <div class="col-lg-9 mx-auto">
                 <ul class="rt-border-brands">
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block">
             <img src="assets\images\brands\aero.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="1s">
             <img src="assets\images\brands\skyward.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="1.5s">
             <img src="assets\images\brands\saflink.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="2s">
             <img src="assets\images\brands\jetways.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="2.5s">
             <img src="assets\images\brands\mba.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="3s">
             <img src="assets\images\brands\auric.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="3.5s">
             <img src="assets\images\brands\salaam.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
     <li class="single-border-brands">
         <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
             <img src="assets\images\brands\silverstone.png" alt="brands image" draggable="false">
         </a>
     </li><!-- /.single-border-brands -->
 </ul><!-- /.rt-border-brands -->
             </div><!-- /.col-lg-7 -->
         </div><!-- /.row -->
     </div><!-- /.containe -->
 </section>

<!--
    !============= Footer Area Start ===========!
 -->

 <?php
 //import footer
 require('includes/footer.php');
  ?>
