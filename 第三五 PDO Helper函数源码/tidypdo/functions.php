<?php 

$config = array(
    'username'=>'root',
    'password'=>'root',
);
 
function connect($config){
	try{
		$conn = new PDO('mysql:host=localhost;dbname=practise',
			$config['username'],
			$config['password']);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
	}catch(Exception $e){
		return false;
	}
//return pdo connection
}

function get($tableName,$conn){
	try {
		$result = $conn->query("select * from $tableName");

		return ($result->rowCount() > 0)
			? $result
			: false;
	} catch (Exception $e) {
		return false;
	}
}

function query($query,$bindings,$conn){
	$stmt = $conn->prepare($query);
	//$stmt = $conn -> query("select * from users where id = :id");
	$stmt->execute($bindings);
	//$stmt->execute('id'=>126);

	//return $stmt->fetchAll();

	$results = $stmt->fetchAll();

	return $results ? $results : false;

}

?>