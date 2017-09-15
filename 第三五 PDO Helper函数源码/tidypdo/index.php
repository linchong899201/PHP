<?php 
require 'functions.php';
$conn = connect($config);
if($conn){
    $users = get('adsfdsa',$conn);
}else die('连接数据库失败')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($users) {
       foreach ($users as $user) {
            echo "<li>{$user['username']}</li>";
        }
    }else{
        echo "没有返回表行数据。";
    }
    ?>
</body>
</html>