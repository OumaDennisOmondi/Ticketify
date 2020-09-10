<?php
 require_once('../config/db.php');
  require('../includes/header.php');
  $bookings=null;
  $info="";
  $stmt = $conn->prepare('SELECT * FROM bookings WHERE booking_id = ? ORDER BY id DESC');
  $stmt->execute([$_POST['bkconfirm']]);
  $rowCount = $stmt->rowCount();
  if($rowCount < 1){
    $info=$info."No bookings matching that ID was found.<br />";
  }
  else{
    //fetch password
  $bookings = $stmt->fetchAll();
  }
?>
<style>
.rt-breadcump .rt-breadcump-height {
    max-height: 150px;
}
#content-are-404{
  margin-top: -6em;
}
img#img-404{
  width: 25%;
}
</style>









<div class="rt-breadcump rt-breadcump-height " id="banner404">

    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="404-content-area" id="content-are-404">
    <div class="container">
        <div class="row">
          <?php if ($rowCount > 0): ?>


            <div class="col-md-12 text-center">
              <h4>My Bookings</h4><br /><a href="index" class="btn btn-primary" style="position: absolute;right: 1em;top: 1em;">Back to Dashboard</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Booking ID</th>
                    <th scope="col">Booking Confirmation</th>
                    <th scope="col">Booking Pnref</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    <?php if ($bookings == null): ?>
                      <div class="alert alert-warning">
                        <p>
                          <?php echo $info ?>
                        </p>
                      </div>
                    <?php else: ?>
                      <?php foreach ($bookings as $booking ): $status=$booking->booking_status;?>

                        <tr>
                        <td><?php echo $booking->booking_id ?></td>
                        <td><?php echo $booking->booking_confirmation ?></td>
                        <td><?php echo $booking->booking_pnref ?></td>
                        <td><?php echo $booking->booking_status ?></td>
                        <td>
                            <?php if ($status == "UNPAID"): ?>

                                <a href='#' class="btn btn-primary view-more" data-target="#m<?php echo $booking->booking_confirmation ?>" data-toggle="modal" >View Details</a>
                              <!--modal -->
                                <div class="modal fade" id="m<?php echo $booking->booking_confirmation ?>" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-5" style="text-align: left;">
                                                    <img src="http://localhost/ticketify/assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                                                    <div style="font-size: 11px;font-weight: 500;">
                                                    <h4 style="align-self: center">Booking Details</h4><hr />
                                                    <p>Email : <?php echo $booking->booking_user ?></p><hr />
                                                    <p>ID : <?php echo $booking->booking_id ?></p><hr />
                                                    <p>Confirmation : <?php echo $booking->booking_confirmation ?></p><hr />
                                                    <p>PNR REF : <?php echo $booking->booking_pnref ?></p><hr />
                                                    <p>Payment : <?php echo $booking->booking_status ?></p><hr />
                                                    <p>Passengers : <?php echo $booking->booking_adults.' Adults '.$booking->booking_child.' Child'.$booking->booking_infant.' Infants' ?></p><hr />
                                                    </div>
                                                <div >
                                                    <br /><br />
                                                </div><!-- /.rt-modal-footer -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger" onclick="alert('You cant cancel a booking which was not ticketed!')"><a href="#"></a>Cancel</button>

                            <?php else: ?>
                              <a href="#" class="btn btn-primary" >View More</a>
                              <a href="#" class="btn btn-danger">Cancel</a>
                            <?php endif; ?>
                        </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>


                </tbody>
              </table>

            </div><!-- ./column -->

            <?php else: ?>


        </div>
        <div class="row">
          <div class="alert alert-warning" style="width: 100%;  text-align: center;">
            <h5>
              <i class="far fa-sad-tear"></i> Oops!No bookings matching that ID was found |
              <a href="#" data-target="#rtmodal-2" data-toggle="modal">Try Again</a>
            </h5>
          </div>
        </div><!-- ./row -->
    </div>
    <?php endif; ?><!-- ./ copntainer -->
</section>

<!--
    !============= Footer Area Start ===========!
 -->
<!-- <script defer>
  //open modals
  var btn = document.getElementsByClassName("view-more");
 for (var i = 0; i < btn.length; i++) {
  var thisBtn = btn[i];
  thisBtn.addEventListener("click", function(){
    var modal = document.getElementById(this.dataset.modal);
    modal.style.display = "block";
    alert(i)
}, false);
}
</script> -->
<?php
require('../includes/footer.php');
?>
