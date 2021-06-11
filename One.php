

<?php 

function even_odd($number) {
     $sum = 0;

//Checking if the number is even 
if ($number % 2 == 0){
     echo "It is a even number ";

// printing the sum that is 0+1+2+3....(number entered)
for ($i = 0; $i <= $number; $i ++ ){
$sum = $sum + $i;
}
echo " <br> The sum of number is =$sum";
}

// printing the odd numbers
else {
     echo "It is odd number ";
}
}

// Enter number to search 
$number = 110;
even_odd($number);

?>
