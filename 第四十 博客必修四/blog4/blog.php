<?php 
require 'functions.php';
require 'db.php';


$conn = Blog\DB\connect($config);
if( !$conn) die('连接数据库失败');

?>