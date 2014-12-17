<?php
require('yo.php');
$user =$_POST['user'];
// Get an API Key at dev.justyo.co
$apiKey = '97bc8528-4e7b-8935-5dff-1f5d5c615749';

// Instanciate
$yo = new Yo($apiKey);

// Send a Yo to all your subscribers
$yo->all();

// Send a Yo to one user
$yo->user($user);

// Get number of subscribers
$count = $yo->subscribers(); // returns an int or false
?>