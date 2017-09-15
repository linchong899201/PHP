<?php 
require 'config.php';
#mysql_connect('localhost','username','password');
 
$id = 126;//临时
 
 
try {
    $conn = new PDO('mysql:host=localhost;dbname=practise',$config['DB_USERNAME'],$config['DB_PASSWORD']);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    $results = $conn->query('SELECT * FROM users WHERE id = ' . $id);
 
    //print_r($results);
 
    foreach ($results as $row) {
        print_r($row);
    }
 
} catch (PDOException $e) {
    echo 'ERROR:' . $e->getMessage();
}
?>
