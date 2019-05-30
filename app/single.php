<?php

require '../config/database.php';
require '../config/helper.php';

if(empty($_GET['id'])) {
	die('404');
}

$id = array(
	"_id" => new MongoDB\BSON\ObjectId($_GET['id'])
);

$item = $collection->findOne($id);


