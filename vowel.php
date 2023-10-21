<?php
echo "My first PHP script!<br>";
$name = "wally dignos <br>";
echo $name;
echo countVowels($name);

function countVowels($name) {
    // Convert the name to lowercase to make it case-insensitive
    $name = strtolower($name);
    
    // Define an array of vowels
    $vowels = array('a', 'e', 'i', 'o', 'u');
    
    // Initialize a variable to count the vowels
    $vowelCount = 0;
    
    // Loop through each character in the name
    for ($i = 0; $i < strlen($name); $i++) {
        $char = $name[$i];
        // Check if the character is a vowel
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

?>