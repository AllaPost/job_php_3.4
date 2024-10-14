<?php

echo "<strong>Задание 1: Определение простой функции и возвращаемые значения</strong> <br>";
function multiply($a, $b) {
    return $a * $b;
}

echo multiply(3, 4) . "<br>";

echo "<strong>Задание 2: Область видимости переменных</strong> <br>";

$globalVar = 50;

function sumGlobal() {
    global $globalVar;
    $localVar = 100;
    return $globalVar + $localVar;
}

echo sumGlobal() . "<br>";

echo "<strong>Задание 3: Рекурсия</strong> <br>";

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5) . "<br>"; 

echo "<strong>Задание 4: Анонимные функции</strong> <br>";

$array = ["apple", "banana", "cherry"];

$result = array_map(function($str) {
    return strtoupper($str);
}, $array);

echo '<pre>';
print_r($result);
echo '</pre><br>';

echo "<strong>Задание 5: Стрелочные функции</strong> <br>";

$sum = fn($a, $b) => $a + $b;

echo $sum(3, 4) . "<br>"; 

echo "<strong>Задание 6: Замыкания / Closure</strong> <br>";

function counter() {
    $count = 0;
    return function() use (&$count) {
        $count++;
        return $count;
    };
}

$myCounter = counter();

echo $myCounter(); 
echo "<br>";
echo $myCounter() . "<br>"; 

echo "<strong>Задание 7: Генераторы и оператор yield</strong> <br>";

function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}

$generator = generateNumbers();

foreach ($generator as $number) {
    echo $number . "<br>"; 
}

echo "<strong>Задание 8: Использование встроенных функций</strong> <br>";

$array = [3, 7, 2, 8, 4, 10, 1];

$minValue = min($array);
$maxValue = max($array);

echo "Минимум: " . $minValue . "\n"; 
echo "<br>";
echo "Максимум: " . $maxValue . "\n";

?>