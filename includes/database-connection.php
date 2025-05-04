<?php

// Include the procedural functions
require 'sqlite-procedural-wrapper.php';

// Connect to the database
//$db = sqlite_connect('tunzaa.db');
$db = sqlite_connect(__DIR__ . '/../database/tunzaa.db');

// Check connection error
if (!$db) {
    die("Connection failed: " . sqlite_error($db));
}
