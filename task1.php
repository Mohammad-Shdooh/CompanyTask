<?php
function sortList(array $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
            // just for tracing 
            // 9,3,5,6,7,1,2  [the first loop]/[$i = 0]
            // 3,9,5,6,7,1,2  [the second loop]/[$i = 1] 
            // 3,5,9,6,7,1,2  [the third loop]/[$i = 2]
            // and thus ...
        }
    }
    return $arr;
};
$result =  sortList(array(5, 3, 6, 9, 7, 1, 2));
foreach ($result as $item) {
    echo $item . "    ";
}
echo "<br/>";
$requierd_result_sample = sortList(array(3, 6, 8, 7, 0, 1, 4, 2, 9, 5));

foreach ($requierd_result_sample as $item) {
    echo $item . "    ";
} 
// i use a bubble sort algorithem 
//that swapping a value for the next value if that value is less than the current value . 
