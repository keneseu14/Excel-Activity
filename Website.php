<!DOCTYPE html>
<html lang="en">
<body>
<?php

// $output = "HELLO WORLD <br>";
// echo $output;
// echo "Hello World <br>";

// $_Var= "qwelasdoi";
// echo $_Var;

// #this is a comment
// /* this is a multiple line*/

// #Data tpyes

// #String
// $str = "Hello world";

// #for number
// $number = 1;

// #Boolean
// $statement = true;

// #Float
// $number2 = 1.2;

// echo "<br>";
// echo "<br>";

// $fname = "kenneth";
// $lname = "santiago";
// $fullname = $fname." ".$lname;

// echo $fullname;
// echo "<br>";
// #CONSTANT
// define("GREETINGS", "Hello everyone".true);
// echo GREETINGS;


// 	function myFunction() {
// 		$num1 = 5;
// 		echo "<p>The number is: ".$num1."<p>";
// 	}
// 	myFunction();

// 	$people = array("Kenneth","Kat","Keneseu");
// 	echo $people[1];
// 	echo "<br>";
// 	echo count($people);
// 	echo "<br>";
// 	var_dump($people);
// 	sort($people);

// 	echo "<br>";

// 	for ($i=0; $i < 3; $i++) { 
// 		echo $people[$i]."<br>";
// 	}

// 	echo "<br>";

// 	$people1 = array("Kenneth" => 1,
// 					"Kat" => 2,
// 					"Keneseu" => 3
// 				);

// 	echo $people1["Keneseu"];


// 	echo "<br>";
// 	echo "<br>";

// 	$cars = array(
// 			array("BMW",2019, 3),
// 			array("Toyota",2013, 6),
// 			array("Honda",2012, 9)
// 		);

// 	for ($row=0; $row < 3; $row++) { 
// 		for ($col=0; $col < 3; $col++) { 
// 			echo $cars[$row][$col]."	";
// 		}
// 		echo "<br>";
// 	}

// 	echo "<br>";
// 	echo "<br>";

// 	echo $cars[0][0]." ".$cars[0][1]." ".$cars[0][2];
// 	echo "<br>";
// 	echo $cars[1][0]." ".$cars[1][1]." ".$cars[1][2];
// 	echo "<br>";
// 	echo $cars[2][0]." ".$cars[2][1]." ".$cars[2][2];

// 	echo "<br>";

// 	$num = 0;
// 	do {
// 		echo "<br>";
// 		echo $num++;
// 	} while ($num < 10);


// 	echo "<br>";

// 	$peoPeps = array("Kenneth" => "Y@gmail.com",
// 					"Kat" => "G@gmail.com",
// 					"Keneseu" => "S@gmail.com"
// 				);

// 	foreach ($peoPeps as $peoName => $email) {
// 		echo $peoName."".$email."<br>";
// 	}


	// #Substring
	// $output = substr("Excel",0,3);
	// echo $output;

	// echo "<br>";

	// #strlen()
	// $message = strpos("Excel Technical", "e");
	// echo $message;

	// $value = array(true,false,null,'abc',123,'123',0,'',1.0,';');
	// $valLeng = count($value);
	// $holder= 0;
	// for ($i=0; $i < $valLeng ; $i++) { 
	// 	if(is_string($value[$i])){
	// 		$holder++;
	// 	}
	// }
	// echo $holder;


	// $loggedIn = false;
	// echo ($loggedIn) ? "you are logged in" : "please login";

	$age = 5;
	$score = 20;
	echo "Your score is: " 
	.($score > 10 ? 
	($age > 10 ? "Exceptional" : "Good"):
	($age < 10 ? "Horrorible": "Average"));

?>
</body>
</html>