<?php

echo '<table width=400 height=200 border=2 >';
for($i=0;$i<4;$i++){
    echo '<tr>';
    for($j=0;$j<3;$j++){
        $l=$i+1; $r=$j+1;
        echo "<td>��{$l}�е�{$r}��</td>"; }
        echo '</tr>'; }
        echo '</table>';
?>