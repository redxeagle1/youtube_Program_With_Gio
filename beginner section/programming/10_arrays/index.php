<?php

$programmingLanguage = ['PHP', 'Python', 'java'];

// // echo '<pre>';
// // print_r($programmingLanguage);
// // echo '</pre>';

// // var_dump($programmingLanguage[3]); // wrong indexing
// // echo nl2br("\n");
// // echo "$programmingLanguage[1]"; // right indexing
// // echo nl2br(sprintf("\n the count is %d", count($programmingLanguage)));

// // passing one element

// $programmingLanguage[] = "go";

// // echo '<pre>';
// // print_r($programmingLanguage);
// // echo '</pre>';

// passing multiple elements

array_push($programmingLanguage,'mojo','rust','c');
echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';

unset($programmingLanguage[1],$programmingLanguage[3],$programmingLanguage[5],);

$programmingLanguage = array_values($programmingLanguage);
// echo '<pre>';
print_r($programmingLanguage);
// echo '</pre>';


// // associative arrays

// $programmingLanguage = [
//     'php' => '8.2',
//     'python' => '3.14',
//     'C++' => 'C26',
//     'java' => '26',
//     ];

// // echo '<pre>';
// // print_r($programmingLanguage);
// // echo '</pre>';

// $programmingLanguage ['go'] = '1.26.5'; 

// // echo '<pre>';
// // print_r($programmingLanguage);
// // echo '</pre>';


// $company = [
//     "HR" => [
//         "manager" => "Alice Smith",
//         "budget" => 50000,
//         "location" => "Floor 2",
//         "family" => ['wife','son','daughter','baby']
//     ],
//     "IT" => [
//         "manager" => "Bob Jones",
//         "budget" => 120000,
//         "location" => "Floor 4",
//         "family" => ['wife','son','daughter','baby']
//     ],
//     "Marketing" => [
//         "manager" => "Charlie Brown",
//         "budget" => 75000,
//         "location" => "Floor 1",
//         "family" => ['wife','son','daughter','baby']
//     ]
// ];

// echo '<pre>';
// print_r($company);
// echo '</pre>';
// echo nl2br("\n{$company['HR']['family'][1]}");


// $array_me = [
//     1,
//     2,
//     100=> 3,
//     4,
// ];

// echo '<pre>';
// print_r($array_me);
// echo /*html*/ '<br>';
// echo count($array_me);
// echo '</pre>';

