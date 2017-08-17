<?php
$month ='May';

//if else语句

//if($month == 'January') {
//	echo 'It is Jan';
//} else if ($month == 'February') {
//	echo 'It is Feb';
//} else if ($month == 'March') {
//	echo 'It is March';
//} else {
//	echo 'It is not right month!';
//}

//switch

//switch ($month) {
//	case 'January':
//		echo 'It is Jan';
//		break;

//	case 'February':
//		echo 'It is Feb';
//		break;

//	case 'March':
//		echo 'It is March';
//		break;
	
//	default:
////		echo 'It is not right month!';
//		break;
//}

//lookup

$months = array(
	'January' 	=> 'It is Jan',
	'February' 	=> 'It is Feb',
	'March' 	=> 'It is March',
);

//echo $months[$month];

//echo isset ($months[$month]) ? $months[$month]:'It is not right month!';


//and &&

//if ($month !== 'May' && $month !== 'June'){
//	echo "is not May or June";
//}else {
//	echo 'it is one of those!';
//}

//or ||

if($month !=='May' || $month !== 'June'){
	echo "is not May or June";
}else{
	echo 'it is one of those!';
}

?>


<!doctype>
<html>
<head>
	<title>第七节 PHP条件语句</title>
</head>
<body>
	<h1>第七节 PHP条件语句</h1>
</body>
</html>