<?php 
require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);
if( !$conn) die('连接数据库失败');

$post = DB\query('select * from posts where id = :id limit 1',array('id'=>$_GET['id']),$conn);

if ($post) {
	$post=$post[0];
}else{
	header("location:index.php");
}

$view_path = 'views/single.tmpl.php';
require 'views/layout.php';
?>