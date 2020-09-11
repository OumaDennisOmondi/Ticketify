<?php
//mobile api
    require_once('../config/db.php');
    $bookingConfirmation = $_POST['bookingconfirmation'];
    header('Content-Type: application/json');
    function updateBooking($conn,$bookingConfirmation){
      try{
        $sql = 'UPDATE bookings SET booking_status = :paid WHERE booking_confirmation = :booking_confirmation';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['paid' => 'PAID', 'booking_confirmation' => $bookingConfirmation]);
        echo json_encode([ 'success' => true, 'message' => 'The booking was update successfully']);
      }
      catch(PDOException $e){
      //  header("Location : ")
      echo json_encode([ 'success' => false, 'message' => 'The booking failed to update']);
      }

    }

     updateBooking($conn,$bookingConfirmation);


 ?>
