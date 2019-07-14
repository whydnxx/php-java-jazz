<?php

require_once 'core.php';

$sql = "SELECT * FROM tickets";
$result = $connect->query($sql);

$output = array('data' => array());

$nomor = 1;

if($result->num_rows > 0) {

 while($row = $result->fetch_array()) {
 	$IDticket = $row[0];

 	$button = '<!-- Single button -->
     <button class="btn btn-outline-dark" data-toggle="modal" data-target="#deleteTicket" data-href="php_action/deleteTicket.php?id='.$IDticket.'"> <i class="fa fa-fw fa-trash"></i> Remove</button>';

 	$output['data'][] = array(
    $nomor++,
 		$row[0],
 		$row[3],
    $row[1],
    $row[2],
 		$button
 		);
 } // /while

} // if num_rows

$connect->close();

echo json_encode($output);
