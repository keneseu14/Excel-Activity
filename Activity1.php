<?php 
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
?>