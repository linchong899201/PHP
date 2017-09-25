<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>layout</title>
	<style>
		.container{
			width:600px;
			margin:0 auto;
		}
		form ul{
			padding:0px;
		}
		form ul li{
			list-style: none;
		}
		
		form label{
			display:block;
		}

		form input[type=text],form textarea{
			margin-bottom: 1.5em;
			width: 100%;
		}

	</style>
</head>
<body>
	<div class="container">
		<?php include($path); ?>
	</div>
</body>
</html>