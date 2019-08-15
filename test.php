<?php 

  $age = 10;

  if($age <= 3) {
   echo "You are Infant";   
  }elseif ($age <= 7) {
    echo "You are Toddler";  
  }elseif ($age <= 15) {
    echo "You are Kid";  
  }elseif ($age <= 21) {
    echo "You are Adolescence";  
  }elseif ($age <= 35) {
    echo "You are Young Professionals";  
  }elseif ($age <= 59) {
    echo "You are Adult";  
  }elseif ($age >= 60) {
    echo "You are Senior Citizen";  
  }

?>