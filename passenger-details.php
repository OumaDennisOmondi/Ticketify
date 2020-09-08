<?php
session_start();
//header
require('includes/header.php');
//createBooking
require('flights/create-booking.php');
$adults=$_SESSION['passengers'][0];
$child=$_SESSION['passengers'][1];
$infants=$_SESSION['passengers'][2];
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
        <div class="col-xl-9 mx-auto col-lg-10">
          <div class="row">
            <div class="col-lg-6">
            <div class="alert rt-alrt-1">
                <div class="media">
                    <i class="icofont-check mr-2"></i>
                    <div class="media-body mb-3">
                        <h6 class="mt-0 rt-semiblod">Great! You've picked one of the best value flights.</h6>
                        Book now so you don't miss out on this amazing flight!
                    </div>
                </div>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="flight-list-box rt-mb-30 ask-for-login d-md-flex flex-md-row justify-content-md-between align-items-center pt-30 alert rt-alrt-1">
                <div class="left">
                    <h6 class="rt-strong">Already registered on Ticketify?</h6>
                    <p>Login in to make booking easier!</p>
                </div><!-- /.left -->
                <div class="right">
                    <a href="#" class="rt-btn rt-gradient pill rt-sm" data-toggle="modal" data-target="#rtmodal-1"> <i class="fa fa-user" style="color:white;font-size: 14px;"></i> Sign in</a>
                </div><!-- /.left -->
            </div>
          </div><!-- /.flight-list-box -->
            <!-- /.alert -->
          </div>

            <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
            <div class="flt-dtls-box rt-mb-30">
                <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                    <div class="left">
                        <span><?php echo $_SESSION['routes'][0] ?></span> <span><img src="assets\images\all-img\shp-ln-1.png" alt="line image" draggable="false"></span> <span><?php echo $_SESSION['routes'][1] ?></span>
                          <p>Trip Type : <?php echo $_SESSION['triptype'] ?> | Departure Date : <?php echo $_SESSION['dates'][0] ?>   <?php echo $_SESSION['triptype'] =="RT" ? '~ Return Date '.$_SESSION['dates'][1] : ''; ?> </p>
                    </div><!-- /.left -->
                    <div class="right">
                      <!--  <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a> -->
                    </div><!-- /.right -->
                </div><!-- /.upper-top-content -->
            </div><!-- /.flt-dtls-box -->
            <form action="payment-details.php" method="POST">

                <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Details</h4>
              <?php for($i=0;$i<$adults;$i++){ ?>
            <div class="flight-list-box rt-mb-30 pt-30">


                <h6 class="text-333 rt-medium">Passenger <?php echo $i+1;?></h6>
                <strong>All Fields are required <span class="text-danger">*</span></strong>
                <br>
                <br>
                <div class="rt-form rt-line-form flight-lable passengers">
                    <div class="row">
                      <div class="col-md-4 rt-mb-30">
                        <input type="hidden"  name="adults[]" value="<?php echo $i; ?>" />
                          <label for="title">Title</label>
                          <select id="select-1-title" name="title[]" required>
                              <option value="Mr.">Mr.</option>
                              <option value="Mrs.">Mrs.</option>
                              <option value="Miss.">Miss.</option>
                              <option value="Ms.">Ms.</option>
                          </select>
                      </div>
                        <div class="col-md-4 rt-mb-30 ">
                            <label for="fst-name">First Name</label>
                            <input type="text" name="fst-name[]" class="form-control" id="fst-name" placeholder="Enter Your First Name " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="lst-name">Last Name</label>
                            <input type="text" name="lst-name[]" class="form-control" id="lst-name" placeholder="Enter Your Last Name " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-lg-4 rt-mb-30">
                            <label for="eml-name">Email</label>
                            <input type="email" name="email[]" placeholder="Enter Your Email" id="eml-name" required>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="eml-name">Phone</label>
                            <input type="tel" name="phone[]" placeholder="254728979121" id="eml-name" required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="select-2">Nationality</label>

                            <select id="select-1" name="country[]" required>
                                <option value="1" disabled="" selected="">Select Nationality</option>
                                <option value="KE">Kenya</option>
                                <option value="UG">Uganda</option>
                                <option value="TZ">Tanzania</option>
                                <option value="RW">Rwanda</option>
                                <option value="BI">Burundi</option>
                                <option value="SSD">South Sudan</option>
                                <option value="ET">Ethiopia</option>
                            </select>
                        </div>

                        <div class="col-lg-4 rt-mb-30">
                            <label for="select-1">Document Type</label>
                            <select id="select-2" class="doc-type" name="doc-type[]" onchange="toggleExpiry()" required>
                                <option value="PP">Passport</option>
                                <option value="ID">ID</option>

                            </select>
                        </div><!-- /.col-md-6 -->
                        <div class="col-lg-8 rt-mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Document Number</label>
                                    <input type="number" name="doc-number[]" class="form-control" placeholder="" id="doc-number" required>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <label for="exp-date">Expiry Date</label>
                                    <input type="text" name="exp-date[]" class="form-control exp-date" placeholder="YYYY/MM/DD" autocomplete="off" required>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-md-6 -->

                        </div><!-- /.col-md-6 -->
                  </div>
            </div><?php } ?>
            <!-- /.flight-list-box -->

            <!-- Child -->
            <?php for($i=0;$i<$child;$i++){ ?>
            <div class="flight-list-box rt-mb-30 pt-30">
                <h6 class="text-333 rt-medium">Child <?php echo $i+1;?></h6>
                  <strong>All Fields are required <span class="text-danger">*</span></strong>
                <br>
                <br>
               <div  class="rt-form rt-line-form flight-lable passengers">
                    <div class="row">

                      <div class="col-md-3 rt-mb-30">
                        <input type="hidden"  name="child[]" value="<?php echo $i; ?>"  />
                          <label for="lst-name">Title</label>
                          <select id="select-1-title" name="child-title[]" required>
                              <option value="Child">Child</option>
                          </select>
                      </div>
                        <div class="col-md-5 rt-mb-30 ">
                            <label for="fst-name">First Name</label>
                            <input type="text" class="form-control" name="child-fst-name[]" id="fst-name" placeholder="Enter First Name " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="lst-name">Last Name</label>
                            <input type="text" class="form-control" name="child-lst-name[]" id="lst-name" placeholder="Enter Last Name " required>
                        </div><!-- /.col-md-6 -->
                      </div>
                      <div class="col-md-3">
                         <label for="child-dob">Date of Birth</label>
                         <input type="text" class="form-control has-con child-dob" name="child-dob[]" placeholder="MM/DD/YYYY" id="child-dob" required>

                     </div><!-- /.col-md-6 --><!-- /.col-md-6 -->
                      <!-- <div class="row">

                      </div> -->


            </div>
          </div><?php } ?>
            <!-- Infant -->
            <?php for($i=0;$i<$infants;$i++){ ?>
            <div class="flight-list-box rt-mb-30 pt-30">
                <h6 class="text-333 rt-medium">Infant <?php echo $i+1;?></h6>
                <strong>All Fields are required <span class="text-danger">*</span></strong>
                <br>
                <br>
              <div  class="rt-form rt-line-form flight-lable passengers">
                    <div class="row">

                      <div class="col-md-3 rt-mb-30">
                        <input type="hidden"  name="infants[]" value="<?php echo $i; ?>" />
                          <label for="lst-name">Title</label>
                          <select id="select-1-title" name="infant-title[]" required>
                              <option value="Infant">Infant</option>
                          </select>
                      </div>
                        <div class="col-md-5 rt-mb-30 ">
                            <label for="fst-name">First Name</label>
                            <input type="text" name="infant-fst-name[]" class="form-control" id="fst-name" placeholder="Enter First Name " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-4 rt-mb-30">
                            <label for="lst-name">Last Name</label>
                            <input type="text" name="infant-lst-name[]" class="form-control" id="lst-name" placeholder="Enter Last Name " required>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-3">
                           <label for="infant-dob">Date of Birth</label>
                           <input type="text" name="infant-dob[]" class="form-control has-con infant-dob" placeholder="MM/DD/YYYY" id="infant-dob" required>

                       </div><!-- /.col-md-6 -->
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="row">
                         <!-- <div class="col-md-4">
                            <label for="infant-dob">Date of Birth</label>
                            <input type="text" class="form-control has-con infant-dob" placeholder="MM/DD/YYYY" id="infant-dob">

                        </div><! /.col-md-6 -->
                      </div>


               </div>
               <br>
            </div><?php } ?>
            <div class="text-center rt-mb-30" id="confirm-booking">
                <button type="submit" class="rt-btn rt-gradient pill rt-sm submit">Confirm Booking</button>
            </div>

        </div><!-- /.col-lg-9 -->
        <div class="col-xl-3 mx-auto mt-5 mt-xl-0">
            <div class="rt-sidebar-group">
                <div class="rt-widget final-booking">

                    <ul>
                      <li class="clearfix">

                          <span><?php echo $data['airline'] ?></span>

                      </li>
                        <li class="clearfix">

                            <span>Adult</span>
                            <span class="float-right">USD <?php echo $data['adultsfare'] ?> x <?php echo $data['adults'] ?></span>
                        </li>
                        <li class="clearfix">

                            <span>Child</span>
                            <span class="float-right">USD <?php echo $data['childfare'] ?> x <?php echo $data['child'] ?></span>
                        </li>
                        <li class="clearfix">

                            <span>Infant</span>
                            <span class="float-right">USD <?php echo $data['infantfare'] ?>x <?php echo $data['infant'] ?></span>
                        </li>
                        <li class="clearfix">

                            <span>Rack Fare</span>
                            <span class="float-right">USD <?php echo $data['rackfare'] ?></span>
                        </li>
                        <li class="clearfix">

                            <span>Taxes & Fees</span>
                            <span class="float-right">USD <?php echo $data['totaltax'] ?></span>
                        </li>
                        <li class="clearfix sub-total">

                            <span>Total</span>
                            <span class="float-right"><small>USD <?php echo $data['totalprice'] ?></span></small>
                        </li>

                    </ul>
                    <div class="text-center rt-mb-30">
                      <button type="submit"  class="rt-btn rt-gradient pill rt-sm submit">Confirm Booking</button>
                    </div><!-- /.text-center -->
                  </form>
                    <p class="f-size-12 line-height-12">By proceeding, I acknowledge that I
                        have read and agree to Ticketify
                        <a href="#">Terms of Use</a> and <a href="#">Privacy Statement.</a></p>
                </div><!-- /.rt-widget -->

                <div class="plain-box pl-md-3">
                    <p class="rt-strong">Payment Method</p>
                    <div class="rt-footer-social">
                        <ul>
                            <li><a href="#"><img src="assets\images\brands\card-1.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\card-2.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\card-3.png" alt="cardimage" draggable="false"></a></li>

                            <li><a href="#"><img src="assets\images\brands\card-5.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\mpesa.jpg" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\airtel.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\mtn.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets\images\brands\tigo.png" alt="cardimage" draggable="false"></a></li>


                        </ul>
                    </div>
                </div><!-- /.plain-box -->
            </div><!-- /.rt-sidebar-group -->
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->

    </div><!-- /.container -->

</section>

<!--
    !============= Footer Area Start ===========!
 -->
 <script>
 //togle document-expiry field
 function toggleExpiry(){
   if(document.querySelector('.doc-type').value=='ID'){
     document.querySelector('.exp-date').style.display='none';
   }
   else{
     document.querySelector('.exp-date').style.display='none';
   }
 }
 </script>
 <?php
 //footer
 require('includes/footer.php');
  ?>
