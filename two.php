
<?php 

function primeNumbers($arrayp){

$product = 1; 
$length = sizeof($arrayp); // finding the length of array

// echo "$length";

// multiplying the product of each 
for ($i = 0 ; $i < $length ; $i++ ){

 $product = $product * $arrayp[$i];

}

if ($product < 2 ){
     return 1;
     echo "The number is below 2";

     // Condition to check whether the number is prime 

     for ($j = 2; $j <= $product /2 ; $j++){
          if ($product % $j == 0){
               return 0;
               echo "The product of all elements in array is prime";
          }
          else {
               retrun -1;
               echo "The product of all elements in array is not prime ";
          }
     }
}

}
$arrayp = array(1,2,4,5,6,7); 

//Returning values 

$flag  = primeNumbers($arrayp);

if ($flag == 1)
     echo "The product of elements in array is below 2";
if ($flag == 0)
     echo "The product of elements in array is a prime number";
else 
     echo "The product of elements in array is not a prime number";

 ?>
