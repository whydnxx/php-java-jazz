<?php

require_once 'core.php';

$sql = "SELECT * FROM messages";
$result = $connect->query($sql);
$output = array('data' => array());

$nomor = 1;

if($result->num_rows > 0) {

 while($row = $result->fetch_array()) {
 	$messagesID = $row[0];

 	$button = '<!-- Single button -->
     <button class="btn btn-outline-dark" data-toggle="modal" data-target="#removeMessagesModal" onclick="removeMessages('.$messagesID.')"> <i class="fa fa-fw fa-trash"></i> Remove</button>';

 	$output['data'][] = array(
    $nomor++,
 		$row[1],
 		$row[2],
    $row[3],
 		$button
 		);
 } // /while

} // if num_rows

$connect->close();

echo json_encode($output);
