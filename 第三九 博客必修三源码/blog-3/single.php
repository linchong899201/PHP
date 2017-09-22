<?php 
require 'blog.php';
use Blog\DB;

$post = DB\get_by_id((int)$_GET['id'],$conn);


if ($post) {
	$post=$post[0];
}else{
	header("location:index.php");
}

view('single',array(
	'post'=>$post
));
?>