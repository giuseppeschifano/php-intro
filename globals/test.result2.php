

<?php
include "config.php";
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


  <?php

$movies_arr[] = array("titel"=>"The Shawshank Redemption","score"=>20, "type"=>"MV");
$movies_arr[] = array("titel"=>"The Godfather","score"=>19, "type"=>"MV");
$movies_arr[] = array("titel"=>"The Dark Knight","score"=>18, "type"=>"MV");
$movies_arr[] = array("titel"=>"The Godfather II","score"=>17, "type"=>"MV");
$movies_arr[] = array("titel"=>"The Lord Of The Rings","score"=>16, "type"=>"MV");
$movies_arr[] = array("titel"=>"Pulp Fiction","score"=>15, "type"=>"MV");
$movies_arr[] = array("titel"=>"Sons Of Anarchy","score"=>20, "type"=>"TV");
$movies_arr[] = array("titel"=>"Breaking Bad","score"=>19, "type"=>"TV");
$movies_arr[] = array("titel"=>"Rick And Morty","score"=>18, "type"=>"TV");
$movies_arr[] = array("titel"=>"The Wire","score"=>17, "type"=>"TV");
$movies_arr[] = array("titel"=>"Avatar: The Last Airbender","score"=>16, "type"=>"TV");
$movies_arr[] = array("titel"=>"The Sopranos","score"=>15, "type"=>"TV");


// Serialize the Array

$movies_str = serialize($movies_arr);


// Insert records

$sql = "INSERT INTO topmovies(arr_serialize1) VALUES( '".$movies_str."' )";

// mysqli_query($dbConn,$sql); 

$query = $dbConn->prepare($sql);
$query->execute(); 


// Read records

$result = $dbConn->query($dbConn,"SELECT * FROM topmovies ORDER BY score DESC, titel ASC");

$sql = mysqli_query($dbConn,"SELECT * FROM topmovies");

while($row = $result->fetch(PDO::FETCH_ASSOC)) {

// while($row = mysqli_fetch_assoc($sql)){
   
   // Unserialize

   $arr_unserialize1 = unserialize($row['arr_serialize1']);
   
   
   // Display

   echo "<pre>";
   print_r($arr_unserialize1);
   echo "</pre>";
}

?>


