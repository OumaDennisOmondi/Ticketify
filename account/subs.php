<?php
require_once('../config/db.php');
 require('../includes/header.php');
$success=null;
$fail=null;
if(isset($_POST['sub'])){
  //check if user exists
  $stmt = $conn->prepare('SELECT * FROM subs WHERE email = ?');
  $stmt->execute([$_POST['email']]);
  $rowCount = $stmt->rowCount();
  if($rowCount < 1){
    $sql = 'INSERT INTO subs(email) VALUES(:email)';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $_POST['email']]);
    $success="Thanks for Subscribing to Ticketify!<br />You will be recieving regular updates,news and offers directly on your mail.";

  }
  else{
  $fail="Account with that email has already subscribed.<br />";

  }
}
?>
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
        <div class="col-sm-12">
          <?php if ($success !=null): ?>
            <div class="alert alert-success">
              <i class="far fa-check-circle fa-2x"></i><?php echo $success ?>| <a href="/ticketify"> Go Home</a>
            </div>
          <?php else: ?>
            <div class="alert alert-warning">
            <i class="fas fa-exclamation-circle fa-2x"></i></i><?php echo $fail ?> | <a href="#sub"> Try Again</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
</section>

<?php
require('../includes/footer.php');
?>
