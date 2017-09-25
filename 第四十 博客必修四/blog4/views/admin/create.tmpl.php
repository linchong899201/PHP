<h1>编写我们的博客</h1>
<form action="" method="POST">
	<ul>
		<li>
			<label for="title">标题：</label>
			<input type="text" name="title" id="title">
		</li>
		<li>
			<label for="body">内容：</label>
			<textarea name="body" id="body" cols="30" rows="28"></textarea>
		</li>
		<li>
			<input type="submit" value="提交">
		</li>
	</ul>
	<?php if (isset($status)) { ?>
		<p><?php echo $status ?></p>
	<?php } ?>
</form>