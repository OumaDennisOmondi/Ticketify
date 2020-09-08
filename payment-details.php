<?php
session_start();
//header
require('config/db.php');
require('flights/confirm-booking.php');
require('includes/header.php');
 ?>

<div class="rt-breadcump rt-breadcump-height" id="bannerpass">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(assets/images/backgrounds/bredcump.png)">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Flight</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Flight

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 mx-auto col-lg-6">

            <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
            <div class="flt-dtls-box rt-mb-30">
                <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                    <div class="left">
                        <span>Payment</span> <span>Details</span>

                    </div><!-- /.left -->
                    <div class="right">
                      <!--  <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a> -->
                    </div><!-- /.right -->
                </div><!-- /.upper-top-content -->
            </div><!-- /.flt-dtls-box -->
            <div class="tab-content" id="myTabContent">

            <div class="">
              <ul class="nav serachnavs d-flex" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
                    <li class="nav-item" style="">
                        <a class="nav-link active rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10" id="first-tab" data-target="#rt-item_b_first" data-secondary="#credit"
                            data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                            <i class="fa fa-credit-card"></i>
                            Credit card
                        </a>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 1em;">
                        <a class=" text-white nav-link inactive rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10" id="second-tab" data-target="#rt-item_b_second" data-secondary="#mobile"
                            data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">

                            <i class="fa fa-mobile-alt"></i>
                            Mobile Money
                        </a>
                    </li>
              </ul>
            </div>
            <div class="tab-pane show active" id="credit" role="tabpanel" aria-labelledby="credit">
            <div class="flight-list-box rt-mb-30 pt-30" id="credit">
                <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Credit Card</h4>
                <div class="rt-footer-social d-flex" style="align-items: space-around;">
                    <ul>
                        <li><a href="#"><img src="assets\images\brands\card-1.png" alt="cardimage"  class="credit-card" draggable="false"></a></li>
                        <li><a href="#"><img src="assets\images\brands\card-2.png" alt="cardimage" class="credit-card" draggable="false"></a></li>
                        <li><a href="#"><img src="assets\images\brands\card-3.png" alt="cardimage" class="credit-card" draggable="false"></a></li>
                        <li><a href="#"><img src="assets\images\brands\card-5.png" alt="cardimage" class="credit-card" draggable="false"></a></li>


                    </ul>
                    <h5 class='text-success' style="position: absolute;right: 1.5em;">Amount : <?php echo $_SESSION['totalprice'] ?></h5>
                </div>
                <hr />
                <strong>All Fields are required <span class="text-danger">*</span></strong>
                <br>
                <br>
                <form action="complete-booking.php" class="rt-form rt-line-form flight-lable" method="POST">
                  <input name="ptype" type="hidden" value="card" />
                    <div class="row">
                      <div class="col-md-6 rt-mb-30 ">
                          <label for="fst-name">First Name</label>
                          <input type="text" class="form-control" name="fst-name" placeholder="Enter Card Number " required>
                      </div>
                      <div class="col-md-6 rt-mb-30 ">
                          <label for="fst-name">Last Name</label>
                          <input type="text" class="form-control" name="lst-name" placeholder="Enter Card Number " required>
                      </div>
                        <div class="col-md-12 rt-mb-30 ">
                            <label for="fst-name">Card Number</label>
                            <input type="number" class="form-control" name="card-number" placeholder="Enter Card Number " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                          <label for="mm">Expiry Date</label>
                            <select id="mm" name="MM" required>
                              <option value='' selected value='0' disabled>Select Month</option>
                              <option value='01'>Janaury</option>
                              <option value='02'>February</option>
                              <option value='03'>March</option>
                              <option value='04'>April</option>
                              <option value='05'>May</option>
                              <option value='06'>June</option>
                              <option value='07'>July</option>
                              <option value='08'>August</option>
                              <option value='09'>September</option>
                              <option value='10'>October</option>
                              <option value='11'>November</option>
                              <option value='12'>December</option>
                            </select>
                        </div><!-- /.col-md-6 -->
                        <div class="col-lg-4 rt-mb-30">
                          <label for="yy">.</label>
                            <input type="number" placeholder="YY" id="yy" name="YY" required>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="eml-name">CVV</label>
                            <input type="number" placeholder="Enter CVC Number" name="cvv" required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12 rt-mb-30">
                          <button type="submit" style="width: 100%;"class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Complete Payment</button>
                        </div>

                        </div><!-- /.col-md-6 -->


                </form>
            </div>
        </div><!-- /.credit-card-payment -->
        <div class="tab-pane  rtIncative" id="mobile" role="tabpanel" aria-labelledby="mobile">
            <div class="flight-list-box rt-mb-30 pt-30">
                <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Mobile Payment</h4>
                <div class="rt-footer-social d-flex">
                    <ul>
                      <li><a href="#"><img src="assets\images\brands\mpesa.jpg" class="credit-card" alt="cardimage" draggable="false"></a></li>
                      <li><a href="#"><img src="assets\images\brands\airtel.png" class="credit-card" alt="cardimage" draggable="false"></a></li>
                      <li><a href="#"><img src="assets\images\brands\mtn.png" class="credit-card" alt="cardimage" draggable="false"></a></li>
                      <li><a href="#"><img src="assets\images\brands\tigo.png" class="credit-card" alt="cardimage" draggable="false"></a></li>

                    </ul>
                    <h5 class='text-success' style="position: absolute;right: 1.5em;">Amount : <?php echo ceil($_SESSION['totalprice'] * $_SESSION['rates']); ?></h5>
                </div>
                <hr />
                <strong>All Fields are required <span class="text-danger">*</span></strong>
                <br>
                <br>
                <form action="complete-booking.php" class="rt-form rt-line-form flight-lable" method="POST">
                    <div class="row">
                      <input name="ptype" type="hidden" value="mobile" />
                        <div class="col-md-12 rt-mb-30 ">
                          <label for="select-2">Mobile Money Provider</label>
                            <select id="select-1" name="mobile" required>
                            <option value="1" disabled="" selected="">Select Mobile</option>
                            <option value="mpesa">Mpesa</option>
                            <option value="3">Airtel Money</option>
                            <option value="4">Tigo Pesa</option>
                            <option value="5">MTN Mobile Money</option>
                        </select>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12 rt-mb-30">
                          <label for="mm">Phone Number (Include Country Code)</label>
                            <input type="number" name="mobile_number" class="form-control" id="mm" placeholder="eg. 254728979121" required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12 rt-mb-30">
                          <button type="submit" style="width: 100%;" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Complete Payment</button>
                        </div>
                        </div><!-- /.col-md-6 -->


                </form>
            </div>
        </div><!-- /.mobile-payment -->
      </div>

        </div><!-- /.col-lg-9 -->
      </div><!-- /.row -->

    </div><!-- /.container -->

</section>

<!--
    !============= Footer Area Start ===========!
 -->
 <?php
 //footer
 require('includes/footer.php');
  ?>
