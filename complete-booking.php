<?php
session_start();
//header
require('config/db.php');
require('flights/make-payment.php');
require('includes/header.php');
 ?>
 <div class="rt-breadcump rt-breadcump-height " id="banner404">
     <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(assets/images/backgrounds/bredcump.png)">
     </div><!-- /.rt-page-bg -->
     <div class="container">
         <div class="row rt-breadcump-height">
             <div class="col-12">
                 <!-- /.breadcrumbs-content -->
             </div><!-- /.col-12 -->
         </div><!-- /.row -->
     </div><!-- /.container -->
 </div><!-- /.rt-bredcump -->
<section class="404-content-area d-flex m-auto" id="content-are-404">
    <div class="container " style="justify-content: center;align-items: center">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-info text-white bg-primary">
              <label><strong>Upon making successfull payment,check your email to download your ticket.<br />
              Contact us if any issue arises,Thank You.</strong></label>
          </div>
          </div>
          <?php if(isset($data['instructions'])) {  ?>
          <div class="col-md-12">
            <div class="alert alert text-white bg-primary">
              <?php echo $data['instructions']; ?>
            </div>
          </div>
        <?php } ?>
        <?php if(isset($data['error'])) {  ?>
        <div class="col-md-12">
          <div class="alert alert info text-white bg-primary">
            <?php echo $data['error']; ?>
          </div>
          <a href="payment-details"  style="width: 100%;"class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10 text-center">Retry</a>
        </div>
        <?php } ?>
        </div>
        <a href="index"  style="width: 100%;"class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10 text-center">Finish</a><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>
 <?php
 //footer
 require('includes/footer.php');
  ?>
