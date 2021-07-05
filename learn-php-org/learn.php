<?php


//First lesson
echo "Hello, World!";

//Second Lesson Variables and Types

// Part 1: add the name and age variables.
$name = "Jake";
$age =  20; 
echo "Hello $name. You are $age years old.\n";

// Part 2: sum up the variables x and y and
// put the result in the sum variable.
$x = 195793;
$y = 256836;
$sum = $x + $y;

echo "The sum of $x and $y is $sum.\n";


//Third Lesson  Simple arrays

// TODO: add the even_numbers array here
$even_numbers = [2,4,6,8,10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

//Lesson 4 Arrays with keys
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
    "Eric" => "415-874-7659",  
  ];
  
  print_r($phone_numbers);

  echo "\n";

//Leeson 5 Multidimensional arrays  
  $matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;

    foreach ($numbers as $number){
    $sum += $number; 
    }

    echo "{$sum}\n";
}


echo "\n";
//Lesson 6 Stings 

$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,62,66,14,62,97,66,74,78,66,2,79,29,72,6,3,71,46,68,48,4,12,52,66,48,14,39,63,69,81,61,21,77,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";

// TODO: split the $numbers variable to an array
$number_list = explode(",",  $numbers);
// called $number_list

print_r($number_list);

echo "\n";
//Lesson 7 for loops

$even_numbers = [2,4,6,8,10,12,14,16,18,20];

foreach($even_numbers as $number) {
	echo $number ."\n";
}

echo "\n";
//Lesson 10 Functions

class Car{
    

  public function __construct($brand, $year){

  $this->brand = $brand;
  $this->year = $year;   
  }
      public function print_details(){
          echo "This car is a ". $this->year . " " . $this->brand . ".";
      }    
  
}

$car = new Car("Toyota", 2006);