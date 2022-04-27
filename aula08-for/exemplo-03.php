<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100; $i -= 1) { 
    echo "<option value = " .$i. "> " .$i . "</option>";
}

echo "</select>";