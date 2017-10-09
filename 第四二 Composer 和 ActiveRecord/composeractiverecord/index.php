<?php 
require 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg){
	$cfg->set_model_directory('models');
	$cfg->set_connections(array(
		'development'=>'mysql://root:root@localhost/blog'
	));
});

//查询一条数据
//$post = Post::find(3);

//通过标题（title）查询一条数据
//$post = Post::find_by_title('aaadfasfasdfadf');
//$posts = post::all();

//通过内容（body）查询一条数据

//print_r($posts);

//更新一条数据

/*$post = Post::find(2);
$post->title='update a title.';
$post->save();*/

//创建一条数据
Post::create(array(
	'title'=>'create a new data.',
	'body'=>'create a new body.'
));
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php foreach ($posts as $p) { ?>
	<article>
		<h2><?php echo $p->title; ?></h2>
		<div class="body"><?php echo $p->body; ?></div>
	</article>
<?php } ?>
	
</body>
</html>-->