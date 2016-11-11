<?php
require 'Connection.php';//connect to db
$config = require 'config.php';//config file
//connect to db
$pdo = Connection::make($config['database']);

if(!empty($_POST))
{
  $file_name = $_POST['name'];
  $file_type = $_POST['type'];
  $hash_md5 = $_POST['hash'];
  $file_size = $_POST['size'];
  $timestamp =  date('Y-m-d H:i:s',time());

  $insert = $pdo->prepare('INSERT INTO files (file_name, timestamp, hash, file_type, file_size) VALUES (:name, :timestamp, :hash, :type, :size)');
  $insert->bindParam(':name', $file_name);
  $insert->bindParam(':timestamp', $timestamp);
  $insert->bindParam(':hash', $hash_md5);
  $insert->bindParam(':type', $file_type);
  $insert->bindParam(':size', $file_size);
  $insert->execute();
  echo 'http://localhost:8000/index.php#history';
}
else {
  echo 'Please chose any file!!';
}
