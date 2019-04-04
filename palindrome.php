<?php
$file=fopen("PalindromeCases.txt","r");
while(!feof($file)){
    $line=fgets($file);
    $line = trim($line);
    $reversedLine= strrev($line);
    if($line==$reversedLine){
        echo "$line is a palindrome.\n";
    }else{ 
       echo "$line is not a palindrome.\n";
   }
}


echo "\n";
fclose($file);
?>