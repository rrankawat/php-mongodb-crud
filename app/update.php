<?php

session_start();

require '../config/database.php';
require '../config/helper.php';

$id = [
	'_id' => new MongoDB\BSON\ObjectId($_POST['id'])
];

$data = array(
	'name' => $_POST['name'],
	'gender' => $_POST['gender'],
	'designation' => $_POST['designation'],
	'city' => $_POST['city']
);

if($collection->updateOne($id, ['$set' => $data])) {
	$_SESSION['success'] = 'Record updated';
	header('Location: ../index.php');
}