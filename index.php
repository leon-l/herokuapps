<?php
require_once __DIR__ . "/vendor/autoload.php";

$user = array(
	'first_name' => 'Leon',
	'last_name' => 'Lourie',
	'tags' => array('developer','user')
);

// Configuration
$dbhost = 'leon-del-mar:Lemon90#@ds141358.mlab.com:41358';
$dbname = 'leondb';

// Connect to test database
//mongodb://leon-del-mar:Lemon90#@ds141358.mlab.com:41358/leondb
$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;

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