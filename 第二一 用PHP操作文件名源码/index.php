<?php 

//寻找与模式匹配的文件路径
//$files = glob("r*.txt");

$images  = glob('images/*{png,jpg,jpeg}',GLOB_BRACE);

/*
//将GLOB_BRACE传给glob第二个参数
foreach ($images as $img) {
	echo $img;
	echo "\r";
}
*/

/*
//basename函数获取文件名称

foreach ($images as $img) {
	echo basename($img);
	echo "\r";
}

foreach ($images as $img) {
	echo basename('/dir/of/path/test.php');
	
	echo "\r";
}
*/

/*
//substr--返回字符串的子串

foreach ($images as $img) {
	echo substr($img, -4);
	echo "\r";
}
*/

/*
//pathinfo — 返回文件路径的信息

foreach ($images as $img) {
	//print_r(pathinfo($img));

	$info = pathinfo($img);

	echo $info['extension'];

	echo "\r";
}
*/


/*
//extract — 从数组中将变量导入到当前的符号表

foreach ($images as $img) {
	extract(pathinfo($img));

	echo $extension;

	echo "\r";
}

//填入这个数组数据

foreach ($images as $img) {
	$data = array();
	extract($data);
	echo $extension . "\n";
}

*/

//使用pathinfo的第二个参数的选项


foreach ($images as $img) {
	echo pathinfo($img,PATHINFO_FILENAME);
	echo "\n";
}

//添加-thumb
foreach ($images as $img) {
	$info = pathinfo($img);

	$thumb_name = $info['filename'].'_thumb.' . $info['extension'];

	echo $thumb_name . "\n";

}



/*
//插值-thumb

foreach ($images as $img) {
	extract(pathinfo($img));

	$thumb_name = "thumb-{$filename}.{$extension}";

	echo $thumb_name ."\n";
}

*/
?>