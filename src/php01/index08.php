<?php
$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "name" => "hanako",
    "age" => 16,
    "gender" => "women"
  ]
];
foreach ($people as $name => $age) {
  print $people["name"] . "は" . $people["age"] . "です" . '<br />';
}