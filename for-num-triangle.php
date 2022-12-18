<?php

echo "<table border=1>";
for($row = 1; $row <= 4; $row++){
    echo "<tr>";
    for($col = 1; $col <= 4; $col++){
        echo "<td>$col</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>