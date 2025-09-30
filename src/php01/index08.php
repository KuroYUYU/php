<?php
$people = [
    [
     "name" => "Taro",
     "age" => "25",
     "gender" => "Men"
    ],
    [
     "name" => "Jiro",
     "age" => "20",
     "gender" => "Men"
    ],
    [
     "name" => "Hanako",
     "age" => "19",
     "gender" => "Women"
    ],
] ;

foreach ($people as $person){
    echo $person["name"] . '（'. $person["age"] . '歳' . $person["gender"] . '）' . '<br>' ;
}
