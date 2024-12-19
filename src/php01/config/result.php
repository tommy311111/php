<?php
$customer = htmlspecialchars($_POST['customer'], ENT_QUOTES);
print "私の名前は、" . $customer.'<br />';

$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
print "ご注文の商品は、" . $goods .'<br />';

$numbers = htmlspecialchars($_POST['numbers'], ENT_QUOTES);
print "ご注文数は、" . $numbers .'<br />';
