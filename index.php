<?php

// *Indexed arrays

$user = ["Tanim", 23, ];
$user[]="O-";

echo "<pre>";
print_r($user);
echo "</pre>";

// *Associative arrays

$userDetails = [ 
   "Name" => "Tanim",
   "Age" => 23,
   "Hobby" => "Playing Football",
   "Work" => "Unemployed"
];
$userDetails["Interview"] = "Passed";

echo "<pre>";
print_r($userDetails);
echo "</pre>";

// *Multidimensional arrays

$usersDetails = [
    [
        "Name" => "Shahidul Islam Tanim",
        "Age" => 23,
        "Hobby" => "Playing Football",
        "Education" =>
        [
            "JSC" =>"2016",
            "SSC"=>"2018",
            "Diploma" =>"2023",
        ],
        "Social" => [
            "Facebook" => [
                "acOne" => "shahidul islam tanim",
                "acTwo" => "shahidul minat"
            ],
            "Instagram"=> [
                "acOne" => "shahidul_tanim",
                "acTwo" => "lived_a_life"
            ]
        ]
    ],
    [
        "Name" => "Sahed Hossen",
        "Age" => 22,
        "Hobby" => "Listening to music",
        "Education" =>
        [
            "JSC" =>"2016",
            "SSC"=>"2018",
            "Diploma" =>"2023",
            "B.sc"=>"Ongoing",
        ]
    ]
];
$usersDetails [0]["Twitter"] = "shaidultanim";

echo "<pre>";
print_r($usersDetails[0]);
echo "</pre>";

// * String Functions

// Uppercase
$upper = "Tanim <br>";
echo strtoupper($upper);

// lowercase
$lower = "SHAHIDULTANIM@GMAIL.COM <br>";
echo strtolower($lower);

// Capitalize
$uWords = "Shahidul Islam Tanim <br>";
echo ucwords($uWords);

// First word Uppercase
$fWord = "Lorem ipsum dolor sit amet. <br>";
echo ucfirst($fWord);

// Reverse
function numChecker($number){
    if($number ==strrev($number)){
        echo "yes <br>";
    }else{
        echo "no";
    }
}
numChecker(55);

function numCheck($number){
    echo $number == strrev($number)? "yes" : "no <br>";
}
numCheck(50);

// Word Position case sensitive
$qoute = "What is the good of your stars and trees, your sunrise and the wind, if they do not enter into our daily lives?";
echo strpos($qoute, "they");

// Word Position case insensitive
$text = "What is the good of your stars and trees, your sunrise and the wind, if they do not enter into our daily lives?";
echo stripos($text, "They");

// SubStr
$text = "What is the good of your stars and trees, your sunrise and the wind, if they do not enter into our daily lives?";
echo substr($text,0,20) . "...";

// Replace
$rep = "There goes that dream" . "<br>";
echo str_replace("goes","comes", $rep);

// Trim
$pass = "7148 " . "<br>";
var_dump(rtrim($pass));

$pass = " 5662" . "<br>";
var_dump(ltrim($pass));

$pass = " 71481113 " . "<br>";
var_dump(trim($pass));

// Pass encryption
$password = "714811135662";
var_dump( md5($pass));

$password = "714811135662";
var_dump( sha1($pass));

$password = "714811135662";
echo password_hash($password, PASSWORD_BCRYPT);

// Length

$text = "When you find yourself in a creative rut, how do you usually get past it? You might read a book, play a game, work out, talk to a friend, or grab a coffee at a local cafe. These are great ways to step away from your problems and hectic schedule to let your brain have a bit of a break. Removing yourself from your problem is one of the most significant ways to relieve your creative block and get a better understanding of that problem.";
echo strlen($text);
