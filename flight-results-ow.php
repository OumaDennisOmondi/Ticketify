<?php
session_start();
require_once ('config/db.php');

//getDestinations
require('flights/get-destinations.php');
require('flights/flight-listings.php');

//chech if flights exits
$flights=$data['aero_crs']['aerocrs']['flights'];
//header
require('includes/header.php');
$nonstop=0;
$connecting=0;
$raw_airlines=[];
//default rate
$rate=100;
//get current exchange $rate
$rate=$_SESSION['rates'];

foreach($data['aero_crs']['aerocrs']['flights'] as $flights) {
   foreach($flights as $i => $item) {
      array_push($raw_airlines,$item['airline']);
   }}
   $airlines=array_unique($raw_airlines);
   $count=array_count_values($raw_airlines)
 ?>


<div class="rt-breadcump rt-breadcump-height with-logn-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(assets/images/all-img/baner6.jpg)">
    </div><!-- /.rt-page-bg -->
    <div class="container" id="searchform">
        <div class="row rt-breadcump-height with-logn-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h5 class="f-results">Flight Results</h5>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="fa fa-map-marker-alt"></i></span>
                        <a href="#" title="Home"><?php echo $fromcode ?></a>&nbsp;
                        <span class="divider"><i class="icofont-airplane-alt"></i></span>&nbsp;
                        <span class="divider"><i class="fa fa-map-marker-alt"></i></span> <?php echo $tocode ?><br /><br />
                        <strong>One-Way</strong>

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="bredcump-search" id="mod-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="rt-banner-searchbox flight-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="tab-content" id="myTabContent">
                            <?php
                                //booking-form
                                require('includes/booking-form.php');
                             ?>


                        </div>
                        <div id="searchpos">

                        </div>
                    </div><!-- /.rt-banner-searchbox -->

                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->



<div class="spacer-bottom" id="spacer"></div><!-- /.spacer-bottom -->
<section class="content-area"  id="flight-listing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="rt-BototmTab">
    <div class="tab-pane show active fade-in-bottom" id="rt-item_b_first" role="tabpanel" aria-labelledby="rt-item_b_first">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 mx-auto">
                <div class="rt-sidebar-group">
                  <div class="rt-widget widget_plane_time">
                      <h3 class="rt-widget-title">
                          Modify Search


                               <div class="mt-5">
                                   <button id="modify-search" onclick="showForm()" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase">Modify Search</button>
                               </div>
                      <!-- /.rt-widget-title -->

                  </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Stops
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-1">
                    <label id="nonstop" class="form-check-label" for="gridCheckrt-1">
                        Nonstop
                    </label>
                </div><!-- ./orm-group -->
                <!-- <span class="float-right">$711</span> -->
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-2">
                    <label id="connecting" class="form-check-label" for="gridCheckrt-2">
                        Connecting
                    </label>
                </div><!-- ./orm-group -->
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
          Filter by  Airlines
        </h3><!-- /.rt-widget-title -->
        <ul>
          <?php foreach ($airlines as $airline) {?>

            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-6s">
                    <label class="form-check-label" for="gridCheckrt-6s">
                        <?php echo $airline." (<strong style='color:blue;'>".$count[$airline]."</strong>)" ?>
                    </label>
                </div><!-- ./orm-group -->
            </li>
          <?php } ?>
        </ul>
    </div><!-- /.rt-widget -->



</div><!-- /.rt-sidebar-group -->
  </div><!-- /.col-lg-3 -->
    <div class="col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0">
      <div class="row">
        <div class="col-lg-12 col-md-6 " id="note">
        <div class=" text-white alert alert-dismissible bg-primary">
          <strong>Heads Up!</strong> Use the dropdown box to select your preferred Cabin class or price.
        </div>
      </div>
        <div class="col-lg-12 col-md-6">
          <?php
          if(empty($flights)){ ?>
            <div class="flight-list-box rt-mb-30">
              <div class=" text-white alert alert-dismissible bg-danger">
                <strong>Well thats kinda unfortunate,</strong> We didnt find any flights matching the route against the dates you searched.
              </div>
            </div>
          <?php }
          elseif(!empty($flights)){
          foreach($data['aero_crs']['aerocrs']['flights'] as $flights) {
             foreach($flights as $i => $item) {
               if($item['via'] == ""){
                 $nonstop++;
               }
               else{
                $connecting++;
               }
               ?>
            <div class="flight-list-box rt-mb-30">
                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="<?php echo $item['airlinelogo']; ?>" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h6><?php echo $item['airline']; ?></h6>
                        <p><?php echo $item['flightdate']; ?></p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block"><?php echo $item['depart']; ?></span>
                            <span class="d-block"><?php echo $item['fromcode']; ?></span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="assets\images\all-img\time-shape-line.png" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block"><?php echo $item['arrive']; ?></span>
                            <span class="d-block"><?php echo $item['tocode']; ?></span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time --><?php $t = $item['totalminutes']/60;
                                            echo round($t, 2); ?></span>
                        <span class="d-block"><a href="#collapse<?php echo $item['flightcode'];?>" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse<?php echo $item['flightcode'];?>">Flight details <i class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                <!--    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div>-->
                      <div class="book-now mt-3">
                    <div class="mb-5">
                         <small>Choose Cabin Class</small>
                         <form action="passenger-details.php" method="POST">
                          <select class="form-control cabin-class classprice" onchange="setprices()" name="flightid" style="width: 100%" id="<?php echo $item['airlineid'] ?>">
                            <!-- <option  selected="true" disabled="disabled">Choose Cabin Class</option> -->
                            <?php
                            $baggages=[];
                            foreach($item['classes']['class'] as $class)
                                  {
                                      $curr = $class['currency'];
                                      $classcode=$class['classcode'];
                                      $code = $class['flightid'];
                                      $adult_price = $class['agtfare_adult'];
                                      $children_price = $class['agtfare_child'];
                                      $infant_price = $class['agtfare_infant'];

                                      //push $buggages
                                      $baggage_desc=$class['classcode'].' ('.$class['cabinclass'].' - '.$class['classname'].') '.' : Max Weight' .'('.$class['baggage'].')';
                                      array_push($baggages,$baggage_desc);
                                  ?>
                                    <option value="<?php echo $code;?>"> <?php echo $classcode.' : '. (($adult_price * $item['linktowebsite']['invAdlt']) +
                                      ($children_price * $item['linktowebsite']['invKids']) + ($infant_price * $item['linktowebsite']['invInfants'])
                                      +($class['tax'] * $_SESSION['taxable-passengers'])); ?>
                                    </option>
                                  <?php };
                                   ?>
                          </select>
                          <div class='prices mt-2'>
                                  <span class="price-usd" style="font-size: 12px; color:red;"><strong></strong></span> |
                                  <span class="price-kes" style="font-size: 12px; color:green;"><strong></strong></span>
                          </div>
                          <input type="hidden" name="adults" value="<?php echo $item['linktowebsite']['invAdlt']; ?>">
                          <input type="hidden" name="child" value="<?php echo $item['linktowebsite']['invKids']; ?>">
                          <input type="hidden" name="infant" value="<?php echo $item['linktowebsite']['invInfants']; ?>">
                    </div><!-- /.trip -->

                        <button type="submit" class=" rt-btn  pill rt-gradient text-uppercase">Book Now</button>
                        </form>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapse<?php echo $item['flightcode'];?>">
                    <strong><small>Connecting Flights :</small></strong><br />
                    <small><?php echo $item['via']; ?></small><hr />
                  <strong><small>Baggages :</small></strong><br />
                  <?php foreach ($baggages as $baggage){
                    echo "<span><small>$baggage</small></span><br />";
                  } ?>
                  <hr />
                  <strong><small>Rules :</small></strong>
                    <p><span><?php
                    if($item['Rules'] !=null ){
                      echo urldecode($item['Rules']['rule'][0]);
                    }
                    else{
                      echo "No Rules specified by airline";
                    }?></span> </p>

                </div><!-- /.bottom content -->
            </div>
          <?php } } } ?><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->

                </div><!-- /.row -->
                <!-- <nav aria-label="Page navigation example">
    <ul class="pagination  rt-paganation justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">03</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
        </li>
    </ul>
</nav> -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>

</div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    !============= Footer Area Start ===========!
 -->

<?php
//flight-results-scripts
require('includes/flight-results-js.php');
//footer
require('includes/footer.php')
 ?>
