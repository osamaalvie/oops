<?php
$keys = [9,8,7,6,4,3,2,1,1,1,5];
//$values = [9,8,7,6,4,3,2,1,1,1,1];
//$array = array_combine($keys, $values);
//echo array_shift($array);
//$array = array_unique($array);
//$array = array_slice($array,0,5);
//array_splice($array,0,5);
//$array = array_flip($array);
//array_shift($array);
//array_pop($array);

//array_unshift($array, 7);
//print_r(array_count_values($array));

//$array = [1,2,3,4,5,6];
//$array2 = [7,8,9];
//$array = array_merge($array, $array2);

$array = [['name' => 'osama alvi', 'age' => 37, 'profession' => 'programmer']];
//echo array_search(4, $array);
//$array = array_fill(2,2,7);
//$array = array_change_key_case($array,CASE_UPPER);

$array = [1, 5, 6, 6, 6, 5, 8, 9, 1, 3, 4];
$array2 = [7, 8, 9];
//$chunk = array_chunk($array, 5, true);
//$array = array_column($array, 'name');
//$array = array_diff($array2, $array);
//$array = array_diff_assoc($array, $array2);


function bubbleSort(&$array)
{
    $size = count($array);
    do {
        $swapped = false;
        for ($i = 1; $i < $size; $i++) {

            if($array[$i] < $array[$i-1]){
                list($array[$i], $array[$i-1]) = [$array[$i-1], $array[$i]];
                $swapped = true;
            }
        }
    } while ($swapped);

    return $array;
}

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

function upper(&$item, $key, $prefix){
    $item = "$item:$key:$prefix";
}

$a = ['name' => 'Banana',  'age' => 'Apple'];
$b = ['age' => 'Osama Alvi', 'name' => 'Adeel Alvi'];
//$array = array_diff_key($a, $b);
//bubbleSort($array);
//$r = array_diff_uassoc($a, $b, 'key_compare_func');
//$r = array_diff_ukey($a, $b , 'key_compare_func');
//$b = array_fill_keys($b, 'name');
//print_r(array_flip($b));
//$r = array_intersect($a, $b);
//$r = array_intersect_key($a, $b);
//$r = array_intersect_assoc($a, $b);
//$r = array_intersect_uassoc($a, $b,'key_compare_func');
//$r = array_intersect_ukey($a, $b,'key_compare_func');
//$r = array_key_exists('named',$a);
//$r = array_keys($keys);
//$r = array_merge_recursive($a, $b);
//array_multisort($a);
//$r = array_pad($a,4,4);
//$r = array_product($keys);
//$k = array_rand($keys);
//array_walk($a,'upper','test');
$r = array_replace($a, $b);
print_r($r);
