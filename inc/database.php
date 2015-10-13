<?php

# Connect to the database
# If it's successful, we'll have an object $db that can interact with the database
try {
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME. ";port=" . DB_PORT, DB_USER, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}