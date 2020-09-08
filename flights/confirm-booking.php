<?php
$passengers=[];
$infants=$_SESSION['passengers'][2];
$carry_infant=0;
if($infants > 0){
  $carry_infant=1;
}

$confirmation_email="bookings@ticketify.co.ke";
if (isset($_POST['adults']) && $_POST['adults'] != null) {
    for ($i=0;$i < count($_POST['adults'] ); $i++){
        array_push($passengers, [
            'paxtitle' => $_POST['title'][$i],
            'firstname' => $_POST['fst-name'][$i],
            'lastname' => $_POST['lst-name'][$i],
            'paxage' => null,
            'paxnationailty' => $_POST['country'][$i],
            'paxdoctype' => $_POST['doc-type'][$i],
            'paxdocnumber' => $_POST['doc-number'][$i],
            'paxdocissuer' => $_POST['country'][$i],
            'paxcarringinfant' => $carry_infant,
            'paxdocexpiry' => $_POST['exp-date'][$i] ? $_POST['exp-date'][$i] : null,
            'paxbirthdate' => null,
            'paxphone' => $_POST['phone'][$i],
            'paxemail' => $_POST['email'][$i]
        ]);
    }
}

// children
if (isset($_POST['child']) && $_POST['child'] != null) {
    for ($i=0;$i < count($_POST['child'] ); $i++){
      $yob=explode("-",$_POST['child-dob'][$i])[0];
      $age= date('Y') - $yob;
        array_push($passengers, [
            'paxtitle' => $_POST['child-title'][$i],
            'firstname' => $_POST['child-fst-name'][$i],
            'lastname' => $_POST['child-lst-name'][$i],
            'paxage' => $age
        ]);
    }
}

// infants
if (isset($_POST['infant']) && $_POST['infants'] != null) {
    for ($i=0;$i < count($_POST['infants'] ); $i++){
      $yob=explode("-",$_POST['infant-dob'][$i])[0];
      $age= date('Y') - $yob;
        array_push($passengers, [
            'paxtitle' => $_POST['infant-title'][$i],
            'firstname' => $_POST['infant-fst-name'][$i],
            'lastname' => $_POST['infant-lst-name'][$i],
            'paxage' => $age
        ]);
    }
}
$params = [
    'aerocrs' => [
        'parms' => [
            'bookingid' => $_SESSION['bookingid'],
            'agentconfirmation' => 'apiconnector',
            'confirmationemail' => $confirmation_email,
            'passenger' => $passengers
        ]
    ]
];
$ch = curl_init();
$headers = array(
    'Content-type: application/json',
    'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
    'auth_password: HJeH^lefJjb6',
);
$url = "https://api.aerocrs.com/v4/confirmBooking";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,300);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
curl_close ($ch);

// handle api errors
$jsonResponse = json_decode($response, true);
//var_dump($jsonResponse);

if (array_key_exists('success', $jsonResponse) && $jsonResponse['success'] == false)  {

    $errors = '';
    foreach ($jsonResponse['details']['detail'] as $error) {
        $errors .= $error . '<br/>';
    }

    // error message
    $data = [];
    $data['error'] = $errors;
    //echo "<script>alert(".$errors.")</script>";
    //ech // @$jsonResponse['details']['detail'];
    header('Location: 404page');
    //var_dump($jsonResponse);

}

    // set session data
    $_SESSION['bookingconfirmation'] = $jsonResponse['aerocrs']['bookingconfirmation'];
    $_SESSION['link_to_booking'] = $jsonResponse['aerocrs']['linktobooking'];
    $_SESSION['booking_pnref'] = $jsonResponse['aerocrs']['pnrref'];
    $_SESSION['email'] = $_POST['email'][0];
  //  var_dump($jsonResponse);
    // save booking in local db
    try {

      $sql = 'INSERT INTO bookings(booking_id, booking_confirmation, booking_pnref, link_to_booking, booking_user)
       VALUES(:booking_id, :booking_confirmation, :booking_pnref, :link_to_booking, :booking_user)';
      $stmt = $conn->prepare($sql);
      $stmt->execute(['booking_id' => $_SESSION['bookingid'], 'booking_confirmation' => $_SESSION['bookingconfirmation'], 'booking_pnref' => $_SESSION['booking_pnref'], 'link_to_booking' => $_SESSION['link_to_booking'] , 'booking_user' => $_SESSION['email'] ]);
      //var_dump($_SESSION['bookingconfirmation']);
    } catch (PDOException $e) {
    //  var_dump($e->getMessage());

    }


    // proceed to payment


?>
