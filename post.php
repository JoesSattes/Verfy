<?php
require 'Connection.php';//connect to db
$config = require 'config.php';//config file
require 'File.php';
//connect to db
$pdo = Connection::make($config['database']);
$statement = $pdo->prepare("SELECT * FROM files");
$statement->execute();
$datas = $statement->fetchAll(PDO::FETCH_CLASS, 'File');

$file_name = $_POST['name'];
$file_type = $_POST['type'];
$hash_md5 = $_POST['hash'];
$file_size = $_POST['size'];
$timestamp =  date('Y-m-d H:i:s',time());

foreach ($datas as $data) {
    if($data->hash == $hash_md5)
    {
        $res = array('success' => 0, 'hash' => $data->hash, 'timestamp' => $data->timestamp);
        echo json_encode($res);
        return 1;
    }
}

$insert = $pdo->prepare('INSERT INTO files (file_name, timestamp, hash, file_type, file_size) VALUES (:name, :timestamp, :hash, :type, :size)');
$insert->bindParam(':name', $file_name);
$insert->bindParam(':timestamp', $timestamp);
$insert->bindParam(':hash', $hash_md5);
$insert->bindParam(':type', $file_type);
$insert->bindParam(':size', $file_size);
$insert->execute();
$res = array('success' => 1);
echo json_encode($res);

