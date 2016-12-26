<?php
require_once __DIR__ . "/vendor/autoload.php";

$user = array(
	'first_name' => 'Leon',
	'last_name' => 'Lourie'
);

// Connect to test database
$connection = new MongoClient("mongodb://leon:leon#@ds141358.mlab.com:41358/leondb");
$db = $connection->leondb;

// Get the users collection
$collection = $connection->leondb->users;

// Insert new document into the users collection
$collection->save($user);
//$collection->insert($user);


// Find a user
/*$user = array(
	'first_name' => 'Leon',
	'last_name' => 'Lourie'
);

$user = $c_users->findOne($user);
$key = "first_name";
echo "User found: " . $user[$key];

// Drop collection
$c_users->drop();*/
?>