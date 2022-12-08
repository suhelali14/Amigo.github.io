<?php
/*Here we add database and store the data*/

define('DB_SERVER',  'localhost');
define('DB_USERNAME',  'root');
define('DB_PASSWORD',  '');
define('DB_NAME',  'register');

//try coonect data base

$conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

//cheack the connection

if($conn ==false){
   dir('Error : cannot connect');
}

?>