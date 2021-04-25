<?php

include 'autoload.inc.php';

$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['symbol'];

$calculation = new Calc($first_num, $second_num, $operator);
echo $calculation->calculate();

?>