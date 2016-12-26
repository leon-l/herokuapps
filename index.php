<?php
require_once __DIR__ . "/vendor/autoload.php";

$user = array(
	'first_name' => 'Leon',
	'last_name' => 'Lourie',
	'tags' => array('developer','user')
);

// Connect to test database
$db = new MongoClient("mongodb://leon:leon#@ds141358.mlab.com:41358/leondb");

// Get the users collection
$c_users = $db->users;

// Insert this new document into the users collection
$c_users->save($user);

// Find a user
$user = array(
	'first_name' => 'Leon',
	'last_name' => 'Lourie'
);

$user = $c_users->findOne($user);
$key = "first_name";
echo "User found: " . $user[$key];

// Drop collection
$c_users->drop();
?>