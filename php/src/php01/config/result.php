<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$sets = htmlspecialchars($_POST['sets'],ENT_QUOTES);
$order = htmlspecialchars($_POST['order'],ENT_QUOTES);

print "私の名前は、" . $name . '<br>';
echo "ご注文の商品は、" . $sets . '<br>';
print "ご注文数は、" . $order . '<br>';


