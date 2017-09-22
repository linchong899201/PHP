<?php 
require 'blog.php';
use Blog\DB;

//读取所有posts表的记录
$posts = DB\get('posts',$conn);

view('index',array(
	'posts'=>$posts,
	'name'=>'adfasdfadsf'
));

?>
