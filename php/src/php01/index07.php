<?php
function judgement($score1,$score2,$score3)
{
    $total = $score1 + $score2 +$score3;
    if ($total > 210) {
        echo "合計点は{$total}なので合格です" . "<br>";
    }else {
        echo "合計点は{$total}なので不合格です" . "<br>";
    }
}
judgement(80,50,90);?>

<?php
function triangleArea($bottom,$height) 
{
    $area = ($bottom * $height) / 2;
    return $area;
}
$answer = triangleArea(10,20);
echo "三角形の面積は $answer です". "<br>";

function squareArea($width,$height)
{
    $area = ($width * $height);
    return $area;
}
$answer2 = squareArea(40,50);
echo "四角形の面積は $answer2 です" . "<br>";

function trapezoidArea($top,$bottom,$height)
{
    $area = ($top + $bottom) * $height / 2 ;
    return $area;
}
$answer3 = trapezoidArea(15,15,30);
echo "台形の面積は $answer3 です" . "<br>";?>
