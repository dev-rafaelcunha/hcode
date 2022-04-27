<?php

for ($i=0; $i < 100; $i+=5) { 
    if ($i == 10) continue;
    if ($i == 50) break;
    
    echo $i;
    echo "<br>";
}