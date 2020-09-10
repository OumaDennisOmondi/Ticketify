<?php
if (session_status() === PHP_SESSION_NONE){session_start();}
if(! isset($_SESSION['user'])){
  header("Location: ../index");
}
  require('../includes/header.php');
//  var_dump($_SESSION['user']);

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
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(assets/images/all-img/4041.jpg)">
    </div><!-- /.rt-page-bg -->
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
        <div class="col-12-xl col-12-xs col-12-sm text-center m-auto">
          <h4 class="text-center" style="margin-top: 1em;" id="welcome">Welcome, <?php echo explode('@', $_SESSION['user'])[0] ;?></h4>
        </div>
      </div>
        <div class="row mt-5" style="display: flex;justify-content: center;align-items: center;">
            <div class="col-4-lg col-12-xs col-12-sm text-center">
            <div class="card" style="width:200px;height: 300px !important;">
              <img style="width:300px;height: 400px !important; "class="img-responsive" src="assets/images/acc.png"/>

              <div class="card-body">
                <div class="dropdown dropright">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    My Profile
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-target="#rtmodal-12" data-toggle="modal">Change Password</a>

                    <!-- Modal -->

                    <div class="modal fade" id="rtmodal-12" tabindex="-1" role="dialog" aria-labelledby="rtmodal-12" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="rt-modal-headr rt-mb-20 one">
                                        <img src="http://localhost/ticketify/assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                                        <h4>Change Password</h4>
                                    </div><!-- /.rt-modal-headr -->
                                    <div class="rt-modal-input one">
                                        <form action="change-password.php" method="POST" class="rt-form">
                                          <span class="error" style="color: red;"><?php echo $errors; ?></span>
                                            <input type="password" name="old-password" class="form-control pill rt-mb-15" placeholder="Old Password" autocomplete="off">
                                            <input type="password" name="new-password" class="form-control pill rt-mb-15" placeholder="New Password" autocomplete="off">

                                                <input type="submit" name="change" class="rt-btn rt-gradient pill d-block text-uppercase " value="Change Password">
                                        </form>
                                        <div class="ac-register">

                                        </div><!-- /.ac-register -->
                                    </div><!-- /.rt-modal-input -->
                                    <div >
                                        <br /><br />
                                    </div><!-- /.rt-modal-footer -->
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="col-4-lg col-12-xs col-12-sm text-center">
              <div class="card" style="width:200px;height: 300px !important;">
              <img class="img-responsive" src="assets/images/wall.png"/>

              <div class="card-body">
                <h5 class="card-title">My Wallet</h5>
                <a href="#" class="btn btn-primary">Go to Wallet</a>
              </div>
            </div>
            </div>
            <div class="col-4-lg col-12-xs col-12-sm text-center">
            <div class="card" style="width:200px;height: 300px !important;">
            <img class="img-responsive" src="assets/images/tickety.png"/>

              <div class="card-body">
                <h5 class="card-title">My Booking</h5>
              <a href="my-bookings" class="btn btn-primary">Go to Bookings</a>
              </div>
            </div>
            </div><!-- ./column -->
        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>
<style>
img.img-responsive {
    height: 300px !important;
    width: 300px !important;

}
.card{
  margin:1em;
}
@media screen and (max-width: 600px) {
  #welcome{
    margin-top: 3em !important;
  }
}

</style>
<!--
    !============= Footer Area Start ===========!
 -->
<?php
require('../includes/footer.php');
?>
