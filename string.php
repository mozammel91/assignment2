<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$input = '';
foreach($strings as $value){ 
        $input = $value;  
        echo "Original String: ".$input. ", ";    
        echo "Vowel Count: ".countVowels($input). ", ";
        echo "Reversed String: ".strrev($input)."<br/>";
    }
    
    function countVowels($value){
        $input = strtolower($value) .'<br/>';
        $vowelCount = 0;
        for($i = 0; $i<strlen($input); $i++){
        if(in_array($input[$i], ['a', 'e', 'i', 'o', 'u'])){
            $vowelCount++;
        }
     }
    return $vowelCount;
}

