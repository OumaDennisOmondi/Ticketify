<?php
//mobile api
    require_once('../config/db.php');
    $bookingConfirmation = $_POST['bookingconfirmation'];
    $email=$_POST['email'];

    //
    header('Content-Type: application/json');
    try {

      $sql = 'INSERT INTO bookings(booking_confirmation, booking_user)
       VALUES(:booking_confirmation, :booking_user)';
      $stmt = $conn->prepare($sql);
      $stmt->execute(['booking_confirmation' => $bookingConfirmation,'booking_user' => $email]);
      echo json_encode([ 'success' => true, 'message' => 'The booking was created successfully']);
    } catch (PDOException $e) {
    echo json_encode([ 'success' => false, 'message' => 'The booking  creation failed']);

    }


 ?>
