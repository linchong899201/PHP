<?php 
require 'functions.php';
require 'config.php';

$conn = connect ($config['DB_HOST'],$config['DB_USERNAME'],$config['DB_PASSWORD'],'practise');
$results = query('select * from users',$conn);

require 'index.tmpl.php';
?>