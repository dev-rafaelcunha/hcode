<?php

//$ts = strtotime("2022-06-28");
$ts = strtotime("+1year"); // +2second ou +3day etc.. //

echo date("l, d/m/Y", $ts);