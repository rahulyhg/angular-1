<?php
require 'connect.php';

$connect = connect();

// Get the data
$people = array();
$sql = "SELECT id, name, phone FROM people";

if($result = mysqli_query($connect,$sql))
{
  $count = mysqli_num_rows($result);

  
  $cr = 1;
  while($row = mysqli_fetch_assoc($result))
  {
      $people[$cr]['id']    = $row['id'];
      $people[$cr]['name']  = $row['name'];
      $people[$cr]['phone'] = $row['phone'];

      $cr++;
  }
}

$json = json_encode($people);

  if($json=="e"){
    $json = "empty";
  }
  else {
   echo $json; 
  }
exit;