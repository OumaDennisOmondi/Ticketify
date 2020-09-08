<?php
session_start();
var_dump($_SESSION['seats']);
$ch = curl_init();
$headers = array(
                'Content-type: application/json',
                'auth_id: E603989B-179E-4E9E-8E5E-CF9F9319CDB5',
                'auth_password: HJeH^lefJjb6',
            );
            $url = "https://api.aerocrs.com/v4/getDeepLink?from=DAR&to=ZNZ&start=2020/08/26&adults=1&child=0&infant=0&end=2020/08/26";
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_HTTPGET, 0);                //0 for a get request
          //  curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,30);
            curl_setopt($ch,CURLOPT_TIMEOUT, 20);
            $response = curl_exec($ch);
            curl_close ($ch);

            $data=json_decode($response,true);
          $flights=$data['aerocrs']['flights']['flight'];
          $seats=[];
          $i=0;
          foreach ($flights as $flight) {
            // code...
          //  array_push($seats,[$flight])
          foreach ($flight['classes'] as $class){
            $i++;
            array_push($seats,[$class['flightid'] => $class['freeseats']]);
          };
                //  echo "qq";

          }

echo json_encode($seats);
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

<script>
  let flightid="14282592";
  var obj={};
  var seats=<?php echo json_encode($seats) ?>;
  seats.forEach((seat, i) => {
    var id=Object.keys(seat)[0];
    if(id==flightid){
      console.log('found');
      console.log(Object.values(seat)[0]);
    }

  });
  //console.log(seats[0].f12721055);

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
