<?php
function insertIntoArray($array, $item, $position)
{
    // Validate position
    if ($position < 0 || $position > count($array)) {
        return "Invalid position.";
    }
    // Split the array into two parts
    $firstPart = array_slice($array, 0, $position);
    $secondPart = array_slice($array, $position);
    // Insert the item into the first part
    $firstPart[] = $item;
    // Merge the parts back together
    $resultArray = array_merge($firstPart, $secondPart);
    return $resultArray;
}
// Example usage
$myArray = [1, 2, 3, 4, 5];
$newItem = 100;
$insertPosition = 2;
$result = insertIntoArray($myArray, $newItem, $insertPosition);
print_r($result);
