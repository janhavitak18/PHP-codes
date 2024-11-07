<?php
//php array functions:
// $a= [6,5,4,8,2,4,12,15];
// $n = count($a);
// $sum = 0;
// for ($i =0; $i < $n; $i++)
// {
//     $sum += $a[$i];
// }
// echo $sum;

//******median of an array****************

// $num = [5, 2, 9, 1, 7, 6, 3];
// sort($num);
// $count = count($num);

// if ($count % 2 === 0) {
//     $middle1 = $num[$count / 2 - 1];
//     $middle2 = $num[$count / 2];
//     $median = ($middle1 + $middle2) / 2;
// } else {
//     $median = $num[floor($count / 2)];
// }
// echo "Median: " . $median;

//**************************array function***********************/
// $name = array("krishna", "Radha", "Janhavi");
// $marks = array("45","75","55");
// // $age = array("20","25","30");
// $comb= array_combine($name,$marks);
// print_r($comb);

//*************************array chunk************** */

// $course=array("Php","Laravel","Node","React","Nextjs","Java");
// print_r(array_chunk($course,2));

//*********array count values**************/
// $a = array("block 2", "block 3", "block 4");
// print_r(array_count_values($a));
// echo "<br>";

// array_diff
$a=array("Block 34","block 35","block 36","block 37");
$b=array("Block 34","block 36","block 38");
print_r(array_diff($a,$b));
echo "<br>";

//array_flip
$a1 = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
$result = array_flip($a1);
print_r($result);
echo "<br>";

//array_intersect()
$a1 = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
$b1 = array("e"=>"red", "f"=>"green", "g"=>"blue");
$c1 = array("red", "blue");
$result=(array_intersect($a1,$b1,$c1));
print_r($result);
echo "<br>";

//array_merge


//array_pop
// $a = array("red","green", "blue");
// array_pop($a);
// print_r($a);
// echo "<br>";

//array_push
// $a = array("red","green",);
// array_push($a,"blue", "yellow");
// print_r($a);
// echo "<br>";

//array_reverse
// $a = array("a"=>"volvo", "b"=>)

//array_search


//array_slice

//array_column

//loosely typed language 
// function add( $a, $b){
    // echo $a + $b;
// }
// add(2, 3);

//php default argument value
//variable length arg 




?>






