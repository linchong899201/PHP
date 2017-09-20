<?php 
require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);
if( !$conn) die('连接数据库失败');

$posts = DB\get('posts',$conn);

include 'index.tmpl.php';

//var_dump($posts);

/*foreach ($posts as $post) {
   print_r($post);
}
*/
//读取posts表的数据

//遍历显示到视图，index.tmpl.php
?>
