<?php 

$str = "QLGNAEKIRLRNGEAE";
$str_lengh = strlen($str);
$str_sqrt = round(sqrt((int) $str_lengh));

$search_str = "KING";
echo "<pre>";


$arr = [];
$count = 0;
for ($i = 0; $i < $str_sqrt; $i++) {

    // echo substr($str, $count, $str_sqrt) . ", ";
    array_push($arr, substr($str, $count, $str_sqrt));
    $count = $count + $str_sqrt;
}



$res = [];

for ($i = 0; $i < strlen($search_str); $i++) {
    // echo $search_str[$i] . ", ";
    for ($iter = 0; $iter < count($arr); $iter++) {
        // echo $arr[$iter] . ", ";
        if (str_contains($arr[$iter], $search_str[$i])) {
            // echo array_search($arr[$iter], $arr) . 'WOOORK';
            $horizontal = array_search($arr[$iter], $arr) . ", ";
            $vertical = stripos($arr[$iter], $search_str[$i]) . ', ';
            $array_final = [$horizontal, $vertical];
            array_push($res, $array_final);
            break;
        }
    }
}

print_r($res);

print_r($arr);
echo "</pre>";


// [1,2]->[1,3]->[0,3]->[0,2]

?>