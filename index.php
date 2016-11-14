<?php
require 'File.php'; //Class of all col in db
require 'functions.php';//var_dump for debug
require 'Connection.php';//connect to db
$config = require 'config.php';//config file
//connect to db
$pdo = Connection::make($config['database']);
//Select all data in DB
$statement = $pdo->prepare("SELECT * FROM (
    SELECT * FROM files ORDER BY id DESC LIMIT 10
) sub
ORDER BY id DESC");
$statement->execute();
$datas = $statement->fetchAll(PDO::FETCH_CLASS, 'File');

require 'index.view.php';
