<?php
 require_once('../config/db.php');
  require('../includes/header.php');
  $bookings=null;
  $info="";
  $stmt = $conn->prepare('SELECT * FROM bookings WHERE booking_user = ?');
  $stmt->execute([$_SESSION['user']]);
  $rowCount = $stmt->rowCount();
  if($rowCount < 1){
    $info=$info."You have made no bookings.<br />";
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
                      <?php foreach ($bookings as $booking ): ?>
                        <tr>
                        <td><?php echo $booking->booking_id ?></td>
                        <td><?php echo $booking->booking_confirmation ?></td>
                        <td><?php echo $booking->booking_pnref ?></td>
                        <td><?php echo $booking->booking_status ?></td>
                        <td>
                          <a href="#" class="btn btn-primary">View More</a>
                          <a href="#" class="btn btn-danger">Cancel</a>
                        </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>


                </tbody>
              </table>

            </div><!-- ./column -->
        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>

<!--
    !============= Footer Area Start ===========!
 -->
<?php
require('../includes/footer.php');
?>
