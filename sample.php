<?php 

	$fullname = "KENNETH M. SANTIAGO";
	$age = 23;

	$details ="My name is ".$fullname. " and I am ".$age." years old.";

	echo $details;

	echo "<br>";

	#PHP Functions with Parameters
	function simpleFunction ($name){
		echo "Are you having fun ".$name."?";
	}
	simpleFunction("Kenneth");

	echo "<br>";

	#PHP Functions returning value
	function addNumber($num1, $num2) {
		$sum = $num1 + $num2;
		return $sum;
	}
	$returnValue = addNumber(2,3);
	echo "Returned value from the function : ".$returnValue;

	echo "<br>";
	echo "<br>";
	echo "<br>";



	function reverseNumber1 () {
		$i = 4;
		echo "Reverse Value: ";
		do {
			echo $i--." ";
		} while ($i > 0);

	}
	reverseNumber1();


	echo "<br>";
	echo "<br>";
	echo "<br>";

	function reverseNumber2 ($revNum){
		echo "Reverse Value: ";
		do {
			echo $revNum--." ";
		} while ($revNum > 0);
	}
	reverseNumber2(4);
	
	#Arithmetic Operators
	$x1 = 100;
	$y1 = 20;
	echo "The Sum of x and y is: ".($x1+$y1)."<br>";
	echo "The Difference of x and y is: ".($x1-$y1)."<br>";
	echo "The Product of x and y is: ".($x1*$y1)."<br>";
	echo "The Quotient of x and y is: ".($x1/$y1)."<br>";
	echo "The Remainder of x and y is: ".($x1%$y1)."<br>";


	#Assignment Operator
	// x = y	x = y	The left operand gets set to the value of the expression on the right	
	// x += y	x = x + y	Addition	
	// x -= y	x = x - y	Subtraction	
	// x *= y	x = x * y	Multiplication	
	// x /= y	x = x / y	Division	
	// x %= y	x = x % y	Modulus	

	#Comparison Operator
	// ==	Equal	$x == $y	Returns true if $x is equal to $y	
	// ===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
	// !=	Not equal	$x != $y	Returns true if $x is not equal to $y	
	// <>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
	// !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
	// >	Greater than	$x > $y	Returns true if $x is greater than $y	
	// <	Less than	$x < $y	Returns true if $x is less than $y	
	// >=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
	// <=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	

	# Increment / Decrement Operators
	// ++$x	Pre-increment	Increments $x by one, then returns $x	
	// $x++	Post-increment	Returns $x, then increments $x by one	
	// --$x	Pre-decrement	Decrements $x by one, then returns $x	
	// $x--	Post-decrement	Returns $x, then decrements $x by one


	#Logical Operators
	// and	And	$x and $y	True if both $x and $y are true	
	// or	Or	$x or $y	True if either $x or $y is true	
	// xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
	// &&	And	$x && $y	True if both $x and $y are true	
	// ||	Or	$x || $y	True if either $x or $y is true	
	// !	Not	!$x	True if $x is not true

	#String Operators
	// .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
	// .=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

	#Array Operators
	// +	Union	$x + $y	Union of $x and $y	
	// ==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
	// ===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
	// !=	Inequality	$x != $y	Returns true if $x is not equal to $y	
	// <>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
	// !==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
	
?>