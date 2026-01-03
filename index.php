<a href="./min-project/index.php" style="background-color:blue; padding:20px;color:white; text-decoration:none;border-radius:10px; margin:40px">MIni project</a>
<br>

<h2>what I applay in learing on plan d'action</h2>
<br>
<br>
<?php
// declaration of array in php 
$arr = Array(); 

var_dump($arr);
$arr1 = [];
echo "<br>";
var_dump($arr1);    

//condition

//if
$em = 2;
if (empty($em)) {
    echo "<br>the variable is empty<br>";
}else{
    echo '<br> the variable is not empty<br>';
}

if ($em == 2) {
    echo $em . ' that is valur of your variable';
}


//loops

//for
function help($var){
    echo '<br>';
    echo $var;
}

$tab = ["younes raji", "youssef raji", "anour raji"];
$tab1 = [
    "name"=> "younes raji",
    "age" => 21,
    "email" => "rajix2100@gmail.com",
    "contact" => [
        "youssef" => "063456789",
        "mohamed" => "063345689",
        "alea" => "063476589"
    ]
];

$tab2 = [[
            "name" => "hassan",
            "lastname" => "yyy",
            "age" => 21
        ],
        [
            "name" => "hmmed",
            "last name" => "bou raba",
            "age"=> 32
        ]
        ];

$var = 0;

for ($i=0; $i <count($tab) ; $i++) { 
    help($tab[$i]);
}
while ($var != 5) {
    help("hi");
    $var++;
}

help("");

do {
    help("are you good");
    $var++;
} while ($var != 10);

help("");

foreach ($tab1 as $key => $value) {
    help($value);
}
foreach ($tab1['contact'] as $key => $value) {
    help($key);
    help($value);
}

help("");
for ($i=0; $i <count($tab2) ; $i++) { 
    foreach ($tab2[$i] as $key => $value) {
        help($value);
    }
}

array_push($tab2, [
    "name" => "younes",
    "last name"=> "rajix",
    "age" => 21
]);

help("");
for ($i=0; $i <count($tab2) ; $i++) { 
    foreach ($tab2[$i] as $key => $value) {
        help($value);
    }
}

if (in_array("younes raji", $tab)) {
    help("younes is exist");
}
// functions 
function sayHi($name): string{
    return $name.' say hi to you!';
}
help(sayHi("ahmad"));

$array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
];


var_dump(array_all($array, function (string $value) {
    return strlen($value) < 12;
}));
//array_all in is function that are exit in php that is check if $value are last then 12 
//that is just example native function are function are all ready in  php that helps devloppers

$tab4 = [1,3,5,6,7,8];

for ($i=0; $i < count($tab4); $i++) { 
    $tab4[$i] = $tab4[$i]+1;
    help($tab4[$i]);
}

//formialire and global variable