<?php 
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
	//print_r($_POST);

	setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);

	//第一种方法

	$font_size = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px';
	//header('Location:font.php');

	//第二种方法
	//if (isset($_POST['font-size'])) {
	//	$font_size = $_POST['font-size'];
	//}else if(isset($_COOKIE['fontSize'])){
	//	$font_size = $_COOKIE['fontSize'];
	//}else{
	//	$font_size=16;
	//}

	//第三种方法
	// header('Location:font.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{

			/*第一种方法
			/*font-size: <?php //echo $_COOKIE['fontSize'] . 'px'; ?>;*/

			/*font-size: <?php //echo isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px;' : '16px;'; ?>*/

			font-size: <?php echo htmlspecialchars($font_size) . ';'; ?>


			/*第二种方法

			font-size: <?php //echo $font_size . 'px;'; ?>*/

			/*第三种方法
			font-size: <?php //echo $_COOKIE['fontSize'] . 'px;'; ?>*/
			
		}
		form ul{
			margin:0px;
			padding: 0px;
		}

		form ul li{
			list-style: none;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<ul>
		<li>
			<label for="font-size">字体大小编好设置：</label>
			<br>
			<select name="font-size" id="font-size">
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
			</select>
		</li>
		<li>
			<input type="submit" name="submit" value="提交">
		</li>
	</ul>
</form>

<h2>文章标题</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</body>
</html>