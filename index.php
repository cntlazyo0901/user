<?php
echo "Hello wolrd"; 
//bien
// khai bao
	// $a = 'abc';
	// $number =123;
	// echo "Gia tri cua bien a: $a";
	// echo '$number';

	$number1 =123;
	$number2 =3456;
	$string1 = "10acb";
	$string2 = "abc123";
	// $sum1 = $number1 + $number2;
	// $sum2 = $number1 + $string1;
	// $sum3 = $number2 + $string2;
	// $sum4 = $string1 + $string2;
	// echo $number1;
	// echo $sum2;
	// echo $sum3;
	// echo $sum4;

// $number = 12;
// echo $number;
//tham tri
	$newVariable;
	$newVariable = $number2;
	$newVariable = $number2 +10;
	echo "$number2 $newVariable </br>";
	//
	//tham chieu
	$newVariable2;
	$newVariable2 = &$number1;
	echo "$number1 $newVariable2";
	$newVariable2 =200;
	echo "$number1 $newVariable2";

	//ep kieu
		$changtype1 = (float) $string1;
		$changtype2 = (float) $string2;
		echo "<br> $changtype1  $changtype2";
		//Boolean
		$var1 = true;
		$var2 = false;
		$var3 = null;
		//array
		$array = [1,2,3,4,'abc'];
		echo "gia tri cua phan tu vi tri thu 4: ".$array[4];
		//hang so
		echo "hang so";
		define("MALE", 1);
		define("FEMALE", 2);
		echo FEMALE;
		echo "Gioi tinh nam: MALE, nu:FEMALE";
 ?>