<?php 

$post = array(
	'author' 		=>'林大',
	'title' 		=>'这是非常牛逼的标题',
	'body' 			=> '请看这篇文章内容就这里。',
	'publish-date' 	=>'2017-8-10',
	'catagory'		=> '技术文献',
);

//最原始写法
//$email = "<h1>{$post['title']}</h1><p>作者：{$post['author']}</p><div>{$post['body']}";

//改良使用 . 链接

//$email = "<h1>{$post['title']}</h1>";
//$email .="<p>作者{$post['author']}</p>";
//$email .="<div>{$post['body']}</div>";


//用sprintf简化

//$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>",$post['title'],$post['author'],$post['body']);


//用heredocs进一步简化

$email = <<<EOT
<h1>{$post['title']}</h1>
<p>作者:{$post['author']} 属于：{$post['catagory']}</p>
<p>作者:{$post['body']}</p>
EOT;

//用extract深度优化

//extract($post);
//echo $body;

echo $email;

?>