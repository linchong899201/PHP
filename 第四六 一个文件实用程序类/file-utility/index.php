<?php 
require 'class/file.php';

//判断文件是否存在
//echo file::exists('sample.txt')?'文件存在':'文件不存在';

//读取文件大小
//echo file::size('class/file.php');

//获取文件名称
//echo file::name('class/file.php');

//获取文件扩展名
//echo file::extension('class/file.php');

//删除文件
//echo file::delete('sample.txt');

//获取文件内容
//echo file::get('sample.txt','阿斯蒂芬阿斯蒂芬');

//添加内容到文件
//echo file::put('sample.txt','添加新数据。'.PHP_EOL,true);

//删除文件内容
echo file::truncate('sample.txt');


?>