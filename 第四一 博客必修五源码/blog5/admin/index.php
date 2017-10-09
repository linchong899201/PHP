<?php 
require '../blog.php';

$data = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//echo "表单已提交。";
	$title = $_POST['title'];
	$body = $_POST['body'];

	//验证是否提交空
	if ( empty($title) || empty($body)) {
		$data['status'] = '请输入内容。';
	}else{
	//把表单的数据插入到posts表里面
	Blog\DB\query("INSERT INTO posts(title, body) VALUES(:title, :body)",
		array('title' => $title, 'body' => $body),
		$conn);
	$data['status'] = '数据成功插入到posts表。';
	}
}

view('admin/create',$data);

?>