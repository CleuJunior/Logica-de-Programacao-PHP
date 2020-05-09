<?php

// A trick I learned in elementary school to determine whether or not a number was divisible by three is to add all
// of the integers in the number together and to divide the resulting sum by three. If there is no remainder from
// dividing the sum by three, then the original number is divisible by three as well.
// Given a series of numbers as a string, determine if the number represented by the string is divisible by three.
//
// You can expect all test case arguments to be strings representing values greater than 0.
//
// Example:
//
// "123"      -> true
// "8409"     -> true
// "100853"   -> false
// "33333333" -> true
// "7"        -> false

function divisibleByThree(String $str):bool {
    $arrayNum = str_split($str);
    $sum = 0;
    foreach ($arrayNum as $num) {
        $sum += $num;
    }

    return ($sum % 3 == 0)? true : false;
}

echo divisibleByThree("123"). PHP_EOL;
echo divisibleByThree("8409"). PHP_EOL;
echo divisibleByThree("100853"). PHP_EOL;
echo divisibleByThree("33333333"). PHP_EOL;
echo divisibleByThree("7"). PHP_EOL;