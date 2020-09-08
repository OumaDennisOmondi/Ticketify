<?php
$ch = curl_init();
if($_SESSION['triptype'] == "RT"){

$params = '{
    "aerocrs": {
        "parms": {
            "triptype": "RT",
      "adults": '. $_SESSION['passengers'][0] .',
      "child": '. $_SESSION['passengers'][1] .',
      "infant": '. $_SESSION['passengers'][2] .',
      "bookflight": [
                {
                    "fromcode": "'. $_SESSION['routes'][0] .'",
                    "tocode": "'. $_SESSION['routes'][1] .'",
                    "flightid": "'. $_POST['flightid1'] .'"
                },
                {
                    "fromcode": "'. $_SESSION['routes'][1] .'",
                    "tocode": "'. $_SESSION['routes'][0] .'",
                    "flightid": "'. $_POST['flightid2'] .'"

                }

            ]
        }
    }
}';
}
elseif ($_SESSION['triptype'] == "OW") {
  $params = '{
              "aerocrs": {
                  "parms": {
                      "triptype": "OW",
                "adults": '. $_SESSION['passengers'][0] .',
                "child": '. $_SESSION['passengers'][1] .',
                "infant": '. $_SESSION['passengers'][2] .',
  			        "bookflight": [
                          {
                              "fromcode": "'. $_SESSION['routes'][0] .'",
                              "tocode": "'. $_SESSION['routes'][1] .'",
                              "flightid": "'. $_POST['flightid'] .'"
                          }

                      ]
                  }
              }
          }';
}
$headers = array(
    'Content-type: application/json',
    'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
    'auth_password: HJeH^lefJjb6',
);
$url = "https://api.aerocrs.com/v4/createBooking";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 300);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
curl_close ($ch);

$response = json_decode($response, true);
// var_dump($params);
// die();
// var_dump($response['aerocrs']['booking']);
// die();

$data['bookingid'] = $response['aerocrs']['booking']['bookingid'];
$data['adults'] = $response['aerocrs']['booking']['adults'];
$data['child'] = $response['aerocrs']['booking']['child'];
$data['infant'] = $response['aerocrs']['booking']['infant'];
$data['adultsfare'] = $response['aerocrs']['booking']['items']['flight'][0]['Adultfare'];
$data['childfare'] = $response['aerocrs']['booking']['items']['flight'][0]['Childfare'];
$data['infantfare'] = $response['aerocrs']['booking']['items']['flight'][0]['Infantfare'];
$data['rackfare'] = $response['aerocrs']['booking']['items']['flight'][0]['rack_fare'];
$data['totalprice'] = $response['aerocrs']['booking']['totalprice'];
$data['airline'] = $response['aerocrs']['booking']['items']['flight'][0]['airline'];
$data['totaltax']=$response['aerocrs']['booking']['items']['flight'][0]['totaltax'];
$data['currency'] = $response['aerocrs']['booking']['items']['flight'][0]['currency'];

$_SESSION['bookingid']=$response['aerocrs']['booking']['bookingid'];
$_SESSION['totalprice']=$response['aerocrs']['booking']['totalprice'];

 ?>
