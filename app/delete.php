<?php

session_start();

require '../config/database.php';
require '../config/helper.php';

if(empty($_GET['id'])) {
	die('404');
}

$id = array(
	"_id" => new MongoDB\BSON\ObjectId($_GET['id'])
);
	
if($collection->deleteOne($id)) {
	$_SESSION['success'] = 'Recored has been removed';
	header('Location: ../index.php');
}

