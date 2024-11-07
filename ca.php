<?php
function removeDuplicates($arr) {
    $seen = []; 
    $result = []; 

    foreach ($arr as $item) {
        if (!in_array($item, $seen)) {
            $result[] = $item; 
            $seen[] = $item; 
        }
    }

    return $result;
}
$arr = [4, 5, 6, 7, 8, 9, 4, 5, 6]; 
$result = removeDuplicates($arr);

foreach ($result as $index => $value) {
    echo "[$index] => $value\n" ;
    echo "<br>";
}

?>
