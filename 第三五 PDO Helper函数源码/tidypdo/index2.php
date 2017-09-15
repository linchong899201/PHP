<?php 
	require 'functions.php';
	$conn = connect($config);
	if ($conn) {
		$id = isset($_GET['id']) ? (int)$_GET['id'] : 1261111;
		$row = query("select * from users where id = :id",
			array('id'=>$id),
			$conn)[0];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	/*	if ($row) {
			print_r($row);
		}else echo'没有！'*/
		
		if ($row) : ?>
			<h1><?php echo $row['username'];?>基本资料。</h1>
			<h1><?php //print_r($row);?></h1>
		<?php else :?>
			<h1>没有用户。</h1>
		<?php	endif;	?>
</body>
</html>