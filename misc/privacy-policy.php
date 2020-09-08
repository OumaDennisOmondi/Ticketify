<?php
require_once('../config/db.php');
require('../includes/header.php');


  //check if user exists
  $stmt = $conn->prepare('SELECT * FROM content WHERE title = ?');
  $title='privacy';
  $stmt->execute([$title]);
  $rowCount = $stmt->rowCount();
  if($rowCount < 1){
  }
  else{
    //fetch password
  $content = $stmt->fetch();
  $body=$content->body;

  }


?>

<div class="rt-breadcump rt-breadcump-height " id="banner404">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(http://localhost/ticketify/assets/images/all-img/4041.jpg)">
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
            <div class="col-12">
              <h3>Privacy Policy</h3><br />
                <?php echo $body ?>
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
