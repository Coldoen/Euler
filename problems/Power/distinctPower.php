
<?php
$start_time = microtime(true);

function descriptionInput(){
    echo "Please choose a number x to find the number of unique terms in the sequence
     a". '<sup>'. "b" .'</sup>'. "for a and b integers belonging to [2, x]";
    return 0;
}

function distinctPower($input){
    $array = [];

    for($i = 2; $i <= $input; $i++){
        for($j = 2; $j <= $input; $j++){
            $temp = pow($i, $j);
            if(!in_array($temp, $array)){
                array_push($array, $temp);
            }
        }
    }
    $result = count(array_unique($array));
    return $result;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo "The number of the distinct terms of the sequence 2". '<sup>'. "b" . '</sup> ' . " 
    with a and b belonging to [2, $input] is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}
?>
