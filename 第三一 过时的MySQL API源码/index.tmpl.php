<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>第三一过时的MySQL API</title>
</head>
<body>
<?php 
if($results){
	foreach ($results as $row) {
		echo $row->username ."<br>";
	}
}
?>
</body>
</html>