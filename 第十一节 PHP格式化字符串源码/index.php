<?php
//echo "我的马甲是林大";

$age = 32;
$name = "林大1";
//$greeting = "我的马甲是$name,我的年龄是$age.";

//使用超级全局_GET把年龄嵌入到字符串

//$greeting = "我的马甲是$name,我的年龄是{_GET['age']}";

//echo $greeting;

//printf("我的马甲是%s,我的年龄是%d.",$name,$age )

//我们要把printf字符串存储到$greeting的变量

//$greeting = printf("我的马甲是%s,我的年龄是%d.",$name,$age );

//printf("我的博客发布时间是%s, %s %d",'7号','7月','2017');


//("我的博客发布时间是%s, %s %d",'7号','7月','2017');
//$posted = sprintf("我的博客发布时间是%s, %s %d",'7号','7月','2017');

//echo $posted;

//sprintf

//不会输出到屏幕

//sprintf("我的马甲是%s,我的年龄是%d.",$name,$age );

//$greeting = sprintf("我的马甲是%s,我的年龄是%d.",$name,$age );

//echo $greeting;


//深入理解printf/sprintf/sscanf

//$posted = printf("我的博客发布于%s,%s %d","2017年","8月","3");

//echo $posted;

//$results = sscanf("这篇博客 发布于2017年6月8号", "%s %s");

//$results = sscanf("2017年 6月, 8","%s %[^,] %d");

print_r ($results);

//list函数

//list($year,$month,$day)= sscanf("2017年 6月,8","%s %[^,], %d");

//echo($day);

//list($name,$age) = array('林大','32');

//echo($age);

sscanf("2017年 6月,8", "%s %[^,], %d", $year,$month,$day);

echo($month);

?>