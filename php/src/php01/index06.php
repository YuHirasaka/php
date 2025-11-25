<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . '<br />';
}

$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

$count = 0;
while ($count < 20) {
    $count += 2;
    echo $count . '<br />';
}?>
<?php
$i = 0;
echo "<br />";
while ($i < 10) {
    if ($i == 5) {
        break;
    }
    echo $i;
    $i++;
}?>
<?php
$i = 0;
echo "<br />";
while($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}?>
<?php
echo "<br />";
$count = 0;
while($count < 100) {
    if ($count % 3 === 0){
        $count++;
        continue;
    }
    if ($count == 20) {
        break;
    }
    echo $count . "<br>";
    $count++;
}?>
<?php
$i = 0;
do {
    echo $i . '<br>';
    $i++;
} while($i < 5);?>

<?php
$num = 0;
echo "<br>";
do {
    echo 'num = ' . $num .'<br>';
    $num++; 
} while($num < 3);?>

<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 === 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 === 0) {
        echo "Fizz<br>";
    }
    elseif ($i % 5 === 0) {
        echo "Buzz<br>";
    }else {
        echo $i . "<br>";
    }
}?>

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    }   elseif ($i % 3 == 0){
        echo $Fizz;
    }   elseif ($i % 5 == 0){
        echo $Buzz;
    }   else {
        echo $i;
    }
} echo "<br>";?>

<?php
for ($i = 1; $i < 6; $i++){
    for ($u = 1;$u < 6; $u++) {
        echo "⚫︎";
    }
    echo "<br />";
}