<?php
	echo "Задание 1 <br>";
	$arr = range(1,100,1);
	echo array_sum($arr);
	echo "<br>";


	echo "Задание 2 <br>";
	$arr = array('a','b','c','d','e'); 
	$arr = array_map('strtoupper',$arr);
	for($i = 0; $i < count($arr); $i++)
	{
		echo $arr[$i] . " ";
	}
	echo "<br>";


	echo "Задание 3 <br>";
	$arr = array('в','с','е','м','к','у');
	echo count($arr);
	echo "<br>";


	echo "Задание 4 <br>";
	$arr = array('в','с','е','м','к','у');
	echo $arr[count($arr)-1];
	echo "<br>";


	echo "Задание 5 <br>";
	$arr = range(1,10,1);
	$tr = "Нет";
	if(array_search(3,$arr))
	{
		$tr = "Есть";
	}
	echo $tr;
	echo "<br>";


	echo "Задание 6 <br>";
	$arr = range(1,5,1);
	$summ = 0;
	for($i = 0; $i < count($arr); $i++)
	{
		$summ += $arr[$i];
	}
	echo $summ;
	echo "<br>";


	echo "Задание 7 <br>";
	$arr = range(1,5,1);
	$summ = 1;
	for($i = 0; $i < count($arr); $i++)
	{
		$summ *= $arr[$i];
	}
	echo $summ;
	echo "<br>";


	echo "Задание 8 <br>";
	$arr = range(1,5,1);
	$res = (array_sum($arr)/(count($arr)));
	echo $res;
	echo "<br>";


	echo "Задание 9 <br>";
	$arr = range(1,100,1);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 10 <br>";
	$arr = range('a','z');
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 11 <br>";
	$arr = range(1,9,1);
	echo implode('-', $arr);
	echo "<br>";


	echo "Задание 12 <br>";
	$arr = range(1,100,1);
	echo array_sum($arr);
	echo "<br>";


	echo "Задание 13 <br>";
	$arr = range(1,10,1);
	echo array_product($arr);
	echo "<br>";


	echo "Задание 14 <br>";
	$arr1 = range(1,3,1);
	$arr2 = array('a','b','c');
	$res = array_merge($arr1, $arr2);
	foreach($res as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 15 <br>";
	$arr = range(1,5,1);
	$result = array_slice($arr,1,3);
	foreach($result as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 16 <br>";
	$arr = range(1,5,1);
	array_splice($arr,1,2);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 17 <br>";
	$arr = range(1,5,1);
	$result = array_splice($arr,1,3);
	foreach($result as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 18 <br>";
	$arr = range(1,5,1);
	array_splice($arr,3,0,['a','b','c']);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 19 <br>";
	$arr = range(1,5,1);
	array_splice($arr,1,0,['a','b']);
	array_splice($arr,count($arr) - 1, 0, ['c']);
	array_splice($arr,count($arr), 0, ['e']);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 20 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$keys = array_keys($arr);
	$values = array_values($arr);
	echo "Ключи: ";
	foreach($keys as $x)
	{
		echo $x . " ";
	}
	echo "<br> Значения: ";
	foreach($values as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 21 <br>";
	$arr1 = array('a','b','c');
	$arr2 = array(1,2,3);
	$res = array_combine($arr1,$arr2);
	print_r($res);
	echo "<br>";


	echo "Задание 22 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$arr = array_flip($arr);
	print_r($arr);
	echo "<br>";


	echo "Задание 23 <br>";
	$arr = range(1,5,1);
	$arr = array_reverse($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 24 <br>";
	$arr = array('a','-','b','-','c','-','d');
	echo "Индекс первого '-' = " . array_search('-',$arr);
	echo "<br>";


	echo "Задание 25 <br>";
	$arr = array('a','-','b','-','c','-','d');
	echo "Индекс первого '-' = " . array_search('-',$arr) . "<br>";
	array_splice($arr,array_search('-',$arr),1);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 26 <br>";
	$arr = array('a','b','c','d','e');	
	print_r(array_replace($arr,[0 => '!', 3 => '!!']));
	echo "<br>";


	echo "Задание 27 <br>";
	$arr = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');
	sort($arr);
	print_r($arr);
	echo "<br>";
	arsort($arr);
	print_r($arr);
	echo "<br>";
	asort($arr);
	print_r($arr);
	echo "<br>";
	krsort($arr);
	print_r($arr);
	echo "<br>";
	ksort($arr);
	print_r($arr);
	echo "<br>";
	rsort($arr);
	print_r($arr);
	echo "<br>";


	echo "Задание 28 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$x = array_rand($arr, 1);
	echo $x;
	echo "<br>";


	echo "Задание 29 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$x = array_rand($arr, 1);
	echo $arr[$x[0]];
	echo "<br>";


	echo "Задание 30 <br>";
	$arr = range(1,10,1);
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 31 <br>";
	$arr = range(1,25,1);
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 32 <br>";
	$arr = range('a','z');
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 33 <br>";
	$arr = range('a','f');
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 34 <br>";
	$arr = array('a','b','c','b','a');
	$arr = array_unique($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 35 <br>";
	$arr = range(1,5,1);
	echo "Первый элемент: " . array_shift($arr) . "<br>";
	echo "Последний элемент: " . array_pop($arr) . "<br>";
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 36 <br>";
	$arr = range(1,5,1);
	array_unshift($arr,0);
	array_push($arr,6);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";


	echo "Задание 37 <br>";
	$arr = range(1,8,1);
	$x = count($arr);
	for($i = 0; $i < ($x / 2); $i++)
	{
		echo array_shift($arr) . array_pop($arr);
	}
	echo "<br>";


	echo "Задание 38 <br>";
	$arr = array('a','b','c');
	for($i = 0; $i < 3; $i++)
	{
		array_push($arr,'-');
	}
	foreach($arr as $x)
	{
		echo $x;
	}
	echo "<br>";


	echo "Задание 39 <br>";
	$arr = array_fill(0,10,'x');
	foreach($arr as $x)
	{
		echo $x;
	}
	echo "<br>";


	echo "Задание 40 <br>";
	$arr = range(1,20,1);
	$arr = array_chunk($arr, 4);
	print_r($arr);
?>