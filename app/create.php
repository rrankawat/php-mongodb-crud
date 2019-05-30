<?php

session_start();

require '../config/database.php';
require '../config/helper.php';

$document = array(
	'name' => $_POST['name'],
	'gender' => $_POST['gender'],
	'designation' => $_POST['designation'],
	'city' => $_POST['city']
);

if($collection->insertOne($document)) {
	$_SESSION['success'] = 'Record inserted';
	header('Location: ../index.php');
}