<?php

include 'autoload.inc.php';

$operator = $_POST['symbol'];
$first_number = $_POST['first_num'];
$second_number = $_POST['second_num'];

$calcu = new Calc((int)$first_number, (int)$second_number, $operator);

echo $calcu->calculate();

?>