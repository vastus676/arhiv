<?php


// $str = "ayy lmao ";
// $res = explode(" ",$str);

// echo "<pre>";
// var_dump($res);
// echo "</pre>";

// $str = ['a','a','a','a'];
// $str_res = implode(',',$str);

// // echo "$str_res";

// $num = strlen($str_res);
// var_dump($str_res);
// echo $num;

//task1
// $bg_str ='ayy lmao';
// $num = lcfirst($bg_str);

// echo $num;

// $bg_str ='ayy lmao';
// $num = ucfirst($bg_str);

// echo $num;

//task2
// $str = 'The
// quick brown fox jumps over the lazy dog.';

// if ( strpos($str, 'jumps')) {
// 	echo "true";

// }
// else
// 	echo "false";

//task4

// $str= 'lorem ipsum';
// $len= strlen($str);
// for ($i=0; $i < $len; $i++) { 
// 	if(ord($str[$i])>97 && ord($str[$i])<=122)
// 		echo $str[$i];
// }
?>
<form>
	<input type="text" name="str" type="post">
	</br>
	<input type="radio" name="p1" value="p1">
	</br>
	<input type="radio" name="p2" value="p2">
	</br>
	<input type="radio" name="p3" value="p3">
	</br>
	<input type="submit" name="" value="submit">
</form>

<?php
$str= $_POST['str'];
$p1 = '/[A-Z]/';
$p2 = '/[a-z]/';
$p3 = '/[0-9]/';


$res = preg_match_all($p1, $str, $matches);
?>





