  <h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>






<p align="center">Лабораторная работа №11 <br> "PHP" </p>






<p align="right">Выполнил: Шандро Н.Б.</p>
<p align="right">Проверил: Соболев Е. И.</p>







<p align="center">г. Южно-Сахалинск <br> 2023 год</p>




<h2 align="center">Введение</h2>
<p align="justify">Решение задач на PHP</p>

<h2 align="center">Цели и задачи</h2>

1.	Создайте массив, заполненный числами от 1 до 100. Найдите сумму элементов данного массива.
2.	Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map сделайте из него массив 'A', 'B', 'C', 'D', 'E'.
3.	Дан массив $arr. Подсчитайте количество элементов этого массива.
4.	Дан массив $arr. С помощью функции count выведите последний элемент данного массива.
5.	Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
6.	Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.
7.	Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.
8.	Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.
9.	Создайте массив, заполненный числами от 1 до 100.
10.	Создайте массив, заполненный буквами от 'a' до 'z'.
11.	 Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
12.	Найдите сумму чисел от 1 до 100 не используя цикл.
13.	 Найдите произведение чисел от 1 до 10 не используя цикл.
14.	Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
15.	Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.
16.	Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5].
17.	 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый массив элементы [2, 3, 4].
18.	 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5].
19.	 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].
20.	 Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.
21.	 Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.
22.	Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.
23.	 Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1.
24.	Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.
25.	 Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
26.	Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.
27.	Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.
28.	Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.
29.	 Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный элемент данного массива.
30.	Дан массив $arr. Перемешайте его элементы в случайном порядке.
31.	 Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.
32.	 Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.
33.	 Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.
34.	Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.
35.	Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.
36.	 Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.
37.	 Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645. 
38.	 Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.
39.	 Заполните массив 10-ю буквами 'x'.
40.	 Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).



<h2 align="center">Решение задач</h2>

1. 

```php
	echo "Задание 1 <br>";
	$arr = range(1,100,1);
	echo array_sum($arr);
	echo "<br>";

```

2. 

```php
	echo "Задание 2 <br>";
	$arr = array('a','b','c','d','e'); 
	$arr = array_map('strtoupper',$arr);
	for($i = 0; $i < count($arr); $i++)
	{
		echo $arr[$i] . " ";
	}
	echo "<br>";
```

3. 

```php
	echo "Задание 3 <br>";
	$arr = array('в','с','е','м','к','у');
	echo count($arr);
	echo "<br>";
```

4. 

```php
	echo "Задание 4 <br>";
	$arr = array('в','с','е','м','к','у');
	echo $arr[count($arr)-1];
	echo "<br>";
```

5. 

```php
  echo "Задание 5 <br>";
	$arr = range(1,10,1);
	$tr = "Нет";
	if(array_search(3,$arr))
	{
		$tr = "Есть";
	}
	echo $tr;
	echo "<br>";
```

6. 

```php
	echo "Задание 6 <br>";
	$arr = range(1,5,1);
	$summ = 0;
	for($i = 0; $i < count($arr); $i++)
	{
		$summ += $arr[$i];
	}
	echo $summ;
	echo "<br>";
```

7. 

```php
	echo "Задание 7 <br>";
	$arr = range(1,5,1);
	$summ = 1;
	for($i = 0; $i < count($arr); $i++)
	{
		$summ *= $arr[$i];
	}
	echo $summ;
	echo "<br>";
```

8. 
```php
	echo "Задание 8 <br>";
	$arr = range(1,5,1);
	$res = (array_sum($arr)/(count($arr)));
	echo $res;
	echo "<br>";
```

9. 

```php
	echo "Задание 9 <br>";
	$arr = range(1,100,1);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

10. 

```php
  echo "Задание 10 <br>";
	$arr = range('a','z');
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

11. 

```php
	echo "Задание 11 <br>";
	$arr = range(1,9,1);
	echo implode('-', $arr);
	echo "<br>";
```

12. 

```php
	echo "Задание 12 <br>";
	$arr = range(1,100,1);
	echo array_sum($arr);
	echo "<br>";
```

13. 

```php
	echo "Задание 13 <br>";
	$arr = range(1,10,1);
	echo array_product($arr);
	echo "<br>";
```

14. 

```php
	echo "Задание 14 <br>";
	$arr1 = range(1,3,1);
	$arr2 = array('a','b','c');
	$res = array_merge($arr1, $arr2);
	foreach($res as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

15. 

```php
	echo "Задание 15 <br>";
	$arr = range(1,5,1);
	$result = array_slice($arr,1,3);
	foreach($result as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

16. 

```php
	echo "Задание 16 <br>";
	$arr = range(1,5,1);
	array_splice($arr,1,2);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

17. 

```php
	echo "Задание 17 <br>";
	$arr = range(1,5,1);
	$result = array_splice($arr,1,3);
	foreach($result as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

18. 

```php
	echo "Задание 18 <br>";
	$arr = range(1,5,1);
	array_splice($arr,3,0,['a','b','c']);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

19. 

```php
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
```

20. 

```php
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
```

21. 

```php
	echo "Задание 21 <br>";
	$arr1 = array('a','b','c');
	$arr2 = array(1,2,3);
	$res = array_combine($arr1,$arr2);
	print_r($res);
	echo "<br>";
```

22. 

```php
	echo "Задание 22 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$arr = array_flip($arr);
	print_r($arr);
	echo "<br>";
```

23. 

```php
	echo "Задание 23 <br>";
	$arr = range(1,5,1);
	$arr = array_reverse($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

24. 

```php
	echo "Задание 24 <br>";
	$arr = array('a','-','b','-','c','-','d');
	echo "Индекс первого '-' = " . array_search('-',$arr);
	echo "<br>";
```

25. 

```php
	echo "Задание 25 <br>";
	$arr = array('a','-','b','-','c','-','d');
	echo "Индекс первого '-' = " . array_search('-',$arr) . "<br>";
	array_splice($arr,array_search('-',$arr),1);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

26. 

```php
	echo "Задание 26 <br>";
	$arr = array('a','b','c','d','e');	
	print_r(array_replace($arr,[0 => '!', 3 => '!!']));
	echo "<br>";
```

27. 

```php
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
```

28. 

```php
	echo "Задание 28 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$x = array_rand($arr, 1);
	echo $x;
	echo "<br>";
```

29. 

```php
	echo "Задание 29 <br>";
	$arr = array("a" => 1, "b" => 2, "c" => 3);
	$x = array_rand($arr, 1);
	echo $arr[$x[0]];
	echo "<br>";
```

30. 

```php
	echo "Задание 30 <br>";
	$arr = range(1,10,1);
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";

```

31. 

```php
echo "Задание 31 <br>";
	$arr = range(1,25,1);
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

32. 

```php
	echo "Задание 32 <br>";
	$arr = range('a','z');
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

33. 

```php
	echo "Задание 33 <br>";
	$arr = range('a','f');
	shuffle($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";

```

34. 

```php
	echo "Задание 34 <br>";
	$arr = array('a','b','c','b','a');
	$arr = array_unique($arr);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

35. 

```php
	echo "Задание 35 <br>";
	$arr = range(1,5,1);
	echo "Первый элемент: " . array_shift($arr) . "<br>";
	echo "Последний элемент: " . array_pop($arr) . "<br>";
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";

```

36. 

```php
	echo "Задание 36 <br>";
	$arr = range(1,5,1);
	array_unshift($arr,0);
	array_push($arr,6);
	foreach($arr as $x)
	{
		echo $x . " ";
	}
	echo "<br>";
```

37. 

```php
	echo "Задание 37 <br>";
	$arr = range(1,8,1);
	$x = count($arr);
	for($i = 0; $i < ($x / 2); $i++)
	{
		echo array_shift($arr) . array_pop($arr);
	}
	echo "<br>";
```

38. 

```php
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
```

39. 

```php
	echo "Задание 39 <br>";
	$arr = array_fill(0,10,'x');
	foreach($arr as $x)
	{
		echo $x;
	}
	echo "<br>";
```

40. 

```php
	echo "Задание 40 <br>";
	$arr = range(1,20,1);
	$arr = array_chunk($arr, 4);
	print_r($arr);
```

<h2 align="center">Вывод</h2>
В данной лабораторной работе я улучшил свои навыки программирования на PHP.
