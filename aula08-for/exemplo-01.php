<?php

for ($i = 0; $i <= 1000; $i += 5) {
    if ($i >= 200 && $i <= 800) continue;
    if ($i === 900) break;
    echo $i . "<br>";
}

echo "<br>";

for ($t=0; $t <= 100; $t+= 10) { 
    if ($t === 50) break;
    echo $t . "<br>";
}
