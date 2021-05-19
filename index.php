<?php

function binarySearch( array $numbers, int $needle): bool
{
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high)/2);

        if ($numbers[$mid] > $needle) {
            echo $mid . " ". "too High"."<br>";
            $high = $mid -1;
        } else if ($numbers[$mid] < $needle){
            echo $mid. "too Low"."<br>";
            $low = $mid + 1;
        } else {
            echo "Correct";
            return true;

        }
    }
    return false;
}
$numbers = range(1,100);
$needle = 28;
binarySearch($numbers,$needle);