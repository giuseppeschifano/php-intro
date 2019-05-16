

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

//including the database connection file
// include_once("config.php");

// begin the session
session_start();

// create Associative Array

$movies_arr = array(
array("The Shawshank Redemption",20, "MV"),
array("The Godfather", 19, "MV"),
array("The Dark Knight", 18, "MV"),
array("The Godfather II", 17, "MV"),
array("The Lord Of The Rings", 16, "MV"),
array("Pulp Fiction", 15, "MV"),
array("Sons Of Anarchy", 20, "TV"),
array("Breaking Bad", 19, "TV"),
array("Rick And Morty", 18, "TV"),
array("The Wire", 17, "TV"),
array("Avatar: The Last Airbender", 16, "TV"),
array("The Sopranos", 15, "TV"),
);

// put the array in a session variable
$_SESSION['toplist']=$movies_arr;
 
print "<pre>";
print_r($_SESSION);
print "<pre>";

// a little message to say we have done it
echo 'Putting array into a session variable';

?>
