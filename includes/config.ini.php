<?php
// Gegevens voor de connectie
$host       = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'q&awebappluxor';

// Verbinding leggen met de database
$db = mysqli_connect($host, $username, $password, $database)
or die('Error: '.mysqli_connect_error());
