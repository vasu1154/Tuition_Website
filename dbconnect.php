<?php  
	define( 'DB_SERVER', 'localhost:3306');
	define('DB_USERNAME', 'id22237400_das');
	define('DB_PASSWORD', 'Dastuition@123');
	define('DB_DATABASE', 'id22237400_dastbl');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
?>