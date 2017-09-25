<?php namespace Blog\DB;

$config = array(
    'username'=>'root',
    'password'=>'root',
    'database' =>'blog'
);
 
function connect($config){
	try{
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
			$config['username'],
			$config['password'],
			array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')
		);
		$conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		return $conn;
	}catch(Exception $e){
		return false;
	}
//return pdo connection
}

function get($tableName,$conn,$limit = 10){
	try {
		$result = $conn->query("select * from $tableName order by id desc limit $limit");

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

	//$results = $stmt->fetchAll();

	//return $stmt ? $stmt : false;
	return ($stmt->rowCount()>0) ? $stmt : false;
}

function get_by_id($id,$conn){
	$query = query('select * from posts where id = :id limit 1',array('id'=>$_GET['id']),$conn);
	return $query->fetchAll();
}

?>