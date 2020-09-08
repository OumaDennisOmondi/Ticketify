<?php


$ch = curl_init();

$params = [];
if (!empty($_POST['ptype']) && $_POST['ptype'] == 'card') {

    $params = [
        'aerocrs' => [
            'parms' => [
                'bookingid' => $_SESSION['bookingid'],
                'creditcardpayer' => $_POST['fst-name'].' '.$_POST['lst-name'],
                'creditcardnumber' => $_POST['card-number'],
                'creditcardexpiry' => $_POST['MM'].$_POST['YY'],
                'creditcardcvv' => $_POST['cvv']
            ]
        ]
    ];

} else if (!empty($_POST['ptype']) && $_POST['ptype'] == 'mobile') {

    $phonenumber = substr($_POST['mobile_number'], -9, strlen($_POST['mobile_number']));
    $params = [
        'aerocrs' => [
            'parms' => [
                'bookingid' => (int)$_SESSION['bookingid'],
                'ismobilepayment' => true,
                'mobileaction' => 'charge',
                'mobile' => [
                    'mobiletype' => 'mpesa',
                    'mobilecountry' => 'Kenya',
                    'phonenumber' => sprintf('254%s', trim($phonenumber))
                ]
            ]
        ]
    ];

}

$headers = array(
    'Content-type: application/json',
    'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
    'auth_password: HJeH^lefJjb6',
);
$url = "https://secure.aerocrs.com/v4/makePayment";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,300);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
curl_close ($ch);

$response = json_decode($response, true);
//var_dump($response);

$data['status'] = $response['aerocrs']['paymentstatus'];


//handle card payments;
if ($response['aerocrs']['paymentstatus'] == "OK" && $response['aerocrs']['bookingid'] != null ) {

    $data['success'] = $response['aerocrs']['paymentstatusexplanation'];

    $data['errors'] = null;

    //TICKET BOOKINB
    $ch = curl_init();
    $par = '{
        "aerocrs": {
            "parms": {
                "bookingid": '.$_POST['booking_id'].'
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

    $data['ticket'] = json_decode($ticket, true);
    $data['card']=true;

    // update payment status
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
//handle mobile payments
if ($response['aerocrs']['paymentstatus'] == "PN" && $response['aerocrs']['bookingid'] != null ) {

    $data['success'] = $response['aerocrs']['paymentstatusexplanation'];
    $data['instructions'] = $response['aerocrs']['instructions'];

    $data['errors'] = null;


}
if($response['aerocrs']['success']==false) {
//var_dump($response);
   // $data['errors'] = $response['aerocrs']['paymentstatusexplanation'];
    $data['success'] = null;
    //for mobile
    $data['error'] = $response['aerocrs']['paymentstatusexplanation'];
  //  $data['booking_id'] = $_POST['booking_id'];



}
 ?>
