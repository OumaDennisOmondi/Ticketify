<?php
$triptype=$_POST['trip-type'];
$fromcode=$_POST['fromcode'];
$tocode=$_POST['tocode'];
$adults=$_POST['adults'];
$child=$_POST['child'];
$infant=$_POST['infants'];
$flightdate1=$_POST['departure_date'];
if($triptype == 'OW'){
  $flightdate2=$_POST['departure_date'];
}
else{
  $flightdate2=$_POST['return_date'];
}


$params = '{
                    "aerocrs": {
                        "parms": {
                            "triptype": "'.$triptype.'",
                            "fromcode": "'.$fromcode.'",
                            "tocode": "'.$tocode.'",
                            "flightdate1": "'.$flightdate1.'",
                            "flightdate2": "'.$flightdate2.'",
                            "adults": "'.$adults.'",
                            "child": "'.$child.'",
                            "infant": "'.$infant.'"
                        }
                    }
                }';
$ch = curl_init();
                $headers = array(
                                'Content-type: application/json',
                                'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
                                'auth_password: HJeH^lefJjb6',
                            );
                            $url = "https://api.aerocrs.com/v4/getFlights";
                            curl_setopt($ch,CURLOPT_URL, $url);
                            curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
                            curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,30);
                            curl_setopt($ch,CURLOPT_TIMEOUT, 20);
                            $response = curl_exec($ch);
                             curl_close ($ch);


                            $data['aero_crs'] = json_decode($response, true);

//set session for two0way
$_SESSION['return_trip']=$data['aero_crs'];
$_SESSION['routes']=[$fromcode,$tocode];
$_SESSION['passengers']=[$adults,$child,$infant];
$_SESSION['taxable-passengers']=$adults+$child;
$_SESSION['triptype']=$triptype;
$_SESSION['dates']=[$flightdate1,$flightdate2];

//get remaining seats from getDeepLink
// $ch = curl_init();
// $headers = array(
//                 'Content-type: application/json',
//                 'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
//                 'auth_password: HJeH^lefJjb6',
//             );
//             $url1 = "https://api.aerocrs.com/v4/getDeepLink?from=DAR&to=ZNZ&start=2020/08/26&adults=1&child=0&infant=0&end=2020/08/26";
//             curl_setopt($ch,CURLOPT_URL, $url1);
//             curl_setopt($ch,CURLOPT_HTTPGET, 0);                //0 for a get request
//           //  curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
//             curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//             curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
//             curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,30);
//             curl_setopt($ch,CURLOPT_TIMEOUT, 20);
//             $response1 = curl_exec($ch);
//             curl_close ($ch);
//
//             $data1=json_decode($response1,true);
//           $flights=$data1['aerocrs']['flights']['flight'];
//           $seats=[];
//           $i=0;
//           foreach ($flights as $flight) {
//             // code...
//           //  array_push($seats,[$flight])
//           foreach ($flight['classes'] as $class){
//             $i++;
//             array_push($seats,[$class['flightid'] => $class['freeseats']]);
//           };
//                 //  echo "qq";
//
//           }
// $_SESSION['seats']=$seats;

 ?>
