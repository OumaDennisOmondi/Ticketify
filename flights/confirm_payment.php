<?php
    require_once('../config/db.php');
    $request = json_decode(file_get_contents('php://input'), true);

    $payload = $request;
    $bookingId = $payload['aerocrs']['paymentConfirmation']['bookingid'];
    $paid = $payload['aerocrs']['paymentConfirmation']['amount'];


    function updateBooking($conn,$bookingId){
      try{
        $sql = 'UPDATE bookings SET booking_status = :paid WHERE booking_id = :booking_id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['paid' => 'PAID', 'booking_id' => $bookingId]);
      //  echo 'Post Updated';
      }
      catch(PDOException $e){
      //  header("Location : ")
      }

    }
    //TICKET BOOKINB
        $ch = curl_init();
        $par = '{
            "aerocrs": {
                "parms": {
                    "bookingid": '.$bookingId.'
                }
            }
        }';

        $headers = array(
            'Content-type: application/json',
            'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
            'auth_password: HJeH^lefJjb6',
        );
        $url = "https://api.aerocrs.com/v4/ticketBooking";
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
        curl_setopt($ch,CURLOPT_POSTFIELDS, $par);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,300);
        curl_setopt($ch,CURLOPT_TIMEOUT, 20);
        $ticket = curl_exec($ch);
        curl_close ($ch);


    // updateBooking
    updateBooking($conn,$bookingId);

    $response = [
        'aerocrs' => [
            'paymentConfrmation' => [
                'paymentstatus' => 'OK'
            ]
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($response);


 ?>
