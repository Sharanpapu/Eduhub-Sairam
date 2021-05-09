<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_name='eduhub-sairam';
  $db_db = 'information_schema';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
?>