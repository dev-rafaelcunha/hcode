<?php

echo date('d/m/Y H:i:s', 1688087239);

echo '<br>';

$dt = new DateTime ('+1year');

echo $dt->format ('d/m/Y H:i:s');

echo '<br>';

echo time();

echo '<br>';

echo strtotime('+1year');