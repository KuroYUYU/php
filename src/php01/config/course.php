<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES
);
echo "私の名前は" . $name ;

$set = htmlspecialchars($_POST['set'], ENT_QUOTES
);
echo "ご注文商品は" . $set ;

$number = htmlspecialchars($_POST['number'], ENT_QUOTES
);
echo "注文数は" . $number ;