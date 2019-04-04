
<?php
$file=fopen("palindrome.txt","r");
while(!feof($file)){
    $line=fgets($file);
    $line = trim($line);

    $isPalindrome = true;
    $startMarker = 0;
    $endMarker = strlen($line) - 1;
    while ($startMarker < $endMarker) {
        if ($line[$startMarker] != $line[$endMarker]) {
            $isPalindrome = false;
            break;
        }
        $startMarker++;
        $endMarker--;
    }
    if ($isPalindrome) {
        echo "$line is a PALINDROME\n";
    } else {
        echo "$line is NOT a PALINDROME\n";
    }
}
echo "\n";
fclose($file);
?>