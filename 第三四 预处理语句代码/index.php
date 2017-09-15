<?php 
require 'config.php';
#mysql_connect('localhost','username','password');
 
//$id = 3;//临时

$letter = 'J';
 
 
try {
    $conn = new PDO('mysql:host=localhost;dbname=practise',$config['DB_USERNAME'],$config['DB_PASSWORD']);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    /*$results = $conn->query('SELECT * FROM users WHERE id = ' . $id);*/
    /*$stmt = $conn->prepare('SELECT * FROM users WHERE id = :id');*/
    //$stmt = $conn->prepare('SELECT * FROM users WHERE username LIKE :letter');
    $stmt = $conn->prepare('INSERT INTO users(username) VALUES(:username)');
    //$stmt->setFetchMode(PDO::FETCH_OBJ);
    
/*    $stmt->execute(array(
    	'letter'=>$letter.'%'
	));*/

	$stmt->bindParam(':username',$username,PDO::PARAM_STR);

	//$stmt->execute();
    
/*    $result = $stmt->fetchAll();
    print_r($result);*/

    $users = array('aabb','ddd','asdfds');

    foreach ($users as $username) {
        $stmt->execute();
    }
 
    //$row = array();
/*    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }*/
 
} catch (PDOException $e) {
    echo 'ERROR:' . $e->getMessage();
}
?>