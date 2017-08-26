<?php 
$file_path = 'images/my-file.txt';

//展示三种不同的方式来获取字符串my-file
//需要将该结果存储在名为file_name的变量中


//第一种方法:pathinfo
/*
$file_name = pathinfo($file_path,PATHINFO_FILENAME);
echo $file_name;
*/

//第二种方法：basename — 返回路径中的文件名部分
/*
$file_name = basename($file_path,'.txt');
echo $file_name;
*/

//第三种方法：explode — 使用一个字符串分割另一个字符串

/*
$file_name = explode('/', $file_path);
//print_r($file_name); 
echo $file_name[1];
*/

/*
$file_name = substr(explode('/', $file_path)[1], 0,-4);
echo $file_name;

*/

//第四种方法：replace代替 search
//str_replace — 子字符串替换
//preg_replace - 执行一个正则表达式的搜索和替换
//end — 将数组的内部指针指向最后一个单元

/*
$file_name = explode('/', $file_path);
//$file_name = str_replace('.txt', '', end($file_name));
$file_name = preg_replace('/\.txt$/i', '', end($file_name));
echo $file_name;

*/

//implode — 将一个一维数组的值转化为字符串

echo implode('|', ['a','b','c']);

?>