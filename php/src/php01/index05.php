<?php
$a = 5;
$b = 7;

if($a === 5){
    echo "\$aは5です";
}
echo "<br />";
if($b === 5){
    echo "\$bは5です";
}else{
    echo "\$bは5以外です";
}
echo "<br />";
if($b === 5){
    echo "\$bは5です";
}elseif($b === 7){
    echo "\$bは7です";
}else{
    echo "\$bは5と7以外です";
}
echo "<br />";

$people = "Saburo";

switch ($people) {
    case "Saburo":
        echo "三郎です";
        break;
    case "Jiro":
        echo "三郎ではありません";
        break;
    default:
        echo "次郎と三郎ではありません";
        break;
}?>
<?php
$a = 7;

echo "<br />";
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;