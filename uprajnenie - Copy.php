
<?php
//5.4
$arr=[];
$row=4;
$col=4;
$num=1;
for ($i=0;$i<$row;$i++){
	for($j=0;$j<$col;$j++){
		$arr[$i][$j]=$num;
		$num++;
	}

	$num=$num*2-1;
}

echo "<table border=1>";
for($m=0;$m<$row;$m++){
	echo "<tr>"; 
	for($n=0;$n<$col;$n++){
		echo "<td>" .  $arr[$m][$n] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php
//5.6 zada4a
$arr=[];
$row=4;
$col=4;
$str_num='';
$num=1;
for ($i=0;$i<$row;$i++){
	for($j=0;$j<$col;$j++){
		$arr[$i][$j]=$str_num . $num;
		$str_num .='4';
		//'4'
		//'44'
		//'444'
		//'4444'
		
	}
	$num++;
	$str_num='';
}
echo "<table border=1>";
for($m=0;$m<$row;$m++){
	echo "<tr>"; 
	for($n=0;$n<$col;$n++){
		echo "<td>" .  $arr[$m][$n] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php
//zada4a 6.1
$arr=[];
$row=4;
$col=4;
$num=1;
for ($i=0;$i<$row;$i++){
	for($j=0;$j<$col;$j++){
		$arr[$i][$j]=$num;
		$num++;
			}
}

		echo "<table border=1>";
for($m=0;$m<$row;$m++){
	echo "<tr>"; 
	for($n=0;$n<$col;$n++){
		echo "<td>" .  $arr[$n][$m] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php
//zada4a 6.2
$arr=[];
$row=5;
$col=4;
$num=1;
for ($i=0;$i<$row;$i++){
	for($j=0;$j<$col;$j++){
		$arr[$i][$j]=$num;
		$num++;
			}
}

		echo "<table border=1>";
for($m=0;$m<$col;$m++){
	echo "<tr>"; 
	for($n=0;$n<$row;$n++){
		echo "<td>" .  $arr[$n][$m] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<hr>
<?php
//zada4a 6.6
$arr=[];
$row=4;
$col=4;
$num=1;
for ($i=0;$i<$row;$i++){
	for($j=0;$j<$col;$j++){
		$arr[$i][$j]=$num;
		$num++;
			}
}

		echo "<table border=1>";
for($m=0;$m<$col;$m++){
	echo "<tr>"; 
	for($n=0;$n<$row;$n+=2){
		echo "<td>" .  $arr[$n][$m] . "</td>";
		echo "<td>" .  $arr[$n+1][$col-$m-1] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>