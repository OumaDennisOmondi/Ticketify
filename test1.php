<?php
$passengers=[];

if ($_POST['adults'] != null) {
    for ($i=0;$i < count($_POST['adults'] ); $i++){
        array_push($passengers, [
            'paxtitle' => $_POST['title'][$i],
            'firstname' => $_POST['fst-name'][$i],
            'lastname' => $_POST['lst-name'][$i],
            'paxage' => null,
            'paxnationailty' => $_POST['country'][$i],
            'paxdoctype' => $_POST['document_type'][$i],
            'paxdocnumber' => $_POST['document_number'][$i],
            'paxdocissuer' => $_POST['country'][$i],
            'paxcarringinfant' => 1,
            'paxdocexpiry' => $_POST['document_expiry_Date'] ? date('Y/m/d', strtotime( $_POST['document_expiry_Date'])) : null,
            'paxbirthdate' => $_POST['birth_date '] ? date('Y/m/d', strtotime( $_POST['birth_date '])) : null,
            'paxphone' => $_POST['phone'],
            'paxemail' => $_POST['email']
        ]);
    }
}

// children
if ($_POST['child'] != null) {
    for ($i=0;$i < count($_POST['child'] ); $i++){
        array_push($passengers, [
            'paxtitle' => $_POST['child-title'][$i],
            'firstname' => $_POST['child-fst-name'][$i],
            'lastname' => $_POST['child-lst-name'][$i],
            'paxage' => null
        ]);
    }
}

// infants
if ($_POST['infants'] != null) {
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
echo count($passengers);
var_dump($passengers);
?>
