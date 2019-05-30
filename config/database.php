<?php

require 'vendor/autoload.php';

// Connnection to MongoDB
$client = new MongoDB\Client;
if(!$client) {
	die('MongoDB connection error');
}

// Connection to db
$conn = $client->company;
if(!$conn) {
	die('DB connection error');
}

// Connection to collection
$collection = $conn->employees;
if(!$collection) {
	die('DB connection error');
}