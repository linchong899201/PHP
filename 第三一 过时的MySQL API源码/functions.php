<?php 
function connect($host='localhost',$username,$password,$db = ''){
	$conn = @mysql_connect($host,$username,$password);
	if( !empty($db)){
		mysql_select_db('practise',$conn);
	}
	return $conn;
}

function query($query){
	$results = mysql_query($query);
	if($results){
		$rows = array();
		while ($row = mysql_fetch_object($results)) {
			$rows[] = $row;
		}
		return $rows;	
	}
	return false;
}

?>