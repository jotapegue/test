<?php

function testCallback(array $array, callable $callback = null)
{
    if(!is_null($callback) && is_callable($callback)){
        return $callback($array);
    }
    return $array;
}


$array = [
    1 => 'impar',
    2 => 'par',
    3 => 'impar',
    4 => 'par',
    5 => 'impar',
    6 => 'par',
    7 => 'impar',
    8 => 'par',
    9 => 'impar',
    10 => 'par',
];

testCallback($array, function($list){
    foreach ($list as $key => $value) {
        if($value == 'impar') echo $key;
    }
});
