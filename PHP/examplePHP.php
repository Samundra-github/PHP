<?php
    // 1. Concatenation.

    // $a = "Hello World!";
    // $b = "Welcome to PHP";
    // echo $a . $b;

    // 2. PHP Program to Print "Chaturdev made a earning of 5 and a expanses of 6
    // with a profit/loss of __.
    
    // function profitLoss($x, $y) {
    //     $c = "Chaturdev";
    //     $diff = $x - $y;
    //     if ($diff > 0) {
    //         echo $c . " made a earning of $x and expenses of $y with a profit of " . $diff ;
    //     } else {
    //         echo $c . " made a earning of $x and expenses of $y with a loss of " . abs($diff);
    //     }
    // }
    // profitLoss(5,6);

    // 3. PHP program to take a string input and check the enter string is palindrome or not.
    
    // function checkPalindrome($string) {
    //     if (strrev($string) == $string) { // comparing reverse string to string
    //         return 1; // if true
    //     }
    //     else {
    //         return 0; // else false
    //     }
    // }
    // $str = "raceecar";
    // if (checkPalindrome($str)) { // passing arguments 
    //     echo "Given Number is Palindrome";
    // } else {
    //     echo "Given Number is not Palindrome";
    // }

    // 4. Program to count Vowels and Consonants.

    // $vowels = 0;
    // $consonants = 0;
    // $str = "Education";
    // $vowelList = array('a', 'e', 'i', 'o','u', 'A', 'E', 'I','O','U');
    // for ($i=0; $i < strlen($str); $i++) { 
    //     if (in_array($str[$i], $vowelList)) {
    //         $vowels++;
    //     } else {
    //         $consonants++;
    //     }
    // }
    // echo "Number of Vowels : " . $vowels ."</br>";
    // echo "Number of Consonants : " . $consonants;

    // Using Function
    // function vowelCount ($str) {
    //     $vowelList = array('a', 'e', 'i', 'o','u', 'A', 'E', 'I','O','U');
    //     $vowels = 0;
    //     $consonants = 0;
    //     for ($i=0; $i < strlen($str); $i++) { 
    //         if (in_array($str[$i], $vowelList)) {
    //             $vowels++;
    //         } else {
    //             $consonants++;
    //         }
    //     }
    //     echo "Number of Vowels : " . $vowels ."</br>";
    //     echo "Number of Consonants : " . $consonants;
    // }
    // vowelCount("Education");

    /* 5. Write a program to print following pattern: 
          *
        * * *
      * * * * *
    * * * * * * *.
    */

    // $row = 4; 
    // for ($i=0; $i < $row; $i++) { 
    //     for ($j=0; $j < $row - $i - 1; $j++) { 
    //         echo "&nbsp;&nbsp; "; // Print Spaces
    //     }
    //     for ($k=0; $k < 2 * $i + 1 ; $k++) { 
    //         echo " * "; // Print Stars
    //     }
    //     echo "<br>";
    // }

    // 6. Write a PHP program to sort the given array.
    //  [2, 17, 6, 3, 12, 9, 8]
    // Ascending 
    // ODD
    // Even
    $input = array(2, 17, 6, 3, 12, 9, 8);
    sort($input);
    $arrlength = count($input);
    echo "Ascending Array : ";
    for($x = 0; $x < $arrlength; $x++) {
        echo " $input[$x] "; // Printing Ascending Array
    }
    
    function oddCmp($input) {
        return ($input & 1); // returns odd
    }
    function evenCmp($input) {
        return !($input & 1); // returns even
    }
    $odd = array_filter($input, "oddCmp"); // filter odd index element
    $odd = array_values(array_filter($odd)); // re-indexing array
  
    $even = array_filter($input, "evenCmp"); // filter even index element
    $even = array_values(array_filter($even)); // re-indexing
  
    print" <br> Odd Array : ";
    array_map(function($value){
        echo " $value ";
    }, $odd); // printing odd indexed array
  
    print" <br> Even Array : ";
    array_map(function($value){
        echo " $value ";
    }, $even); // printing even indexed array
    


?>