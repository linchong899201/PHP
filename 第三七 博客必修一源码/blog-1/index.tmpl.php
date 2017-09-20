<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客</title>
</head>
<body>
	<h1>博客</h1>
	<?php foreach ($posts as $post) { ?>
		<article>
			<h2><?php echo $post['title']; ?></h2>
			<div class="body">
				<?php echo $post['body']; ?>
			</div>
		</article>
	<?php } ?>
</body>
</html>