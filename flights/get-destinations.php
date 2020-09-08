<?php
$query = 'SELECT code,name FROM airports';
$stmt = $conn->query($query);

$destinations = $stmt->fetchAll();

// foreach ($destinations as $destination) {
//   echo $destination->code.'<br />';
// }


 ?>
