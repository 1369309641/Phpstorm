<?php

echo '<table width=400 height=200 border=2 >';
for($i=0;$i<4;$i++){
    echo '<tr>';
    for($j=0;$j<3;$j++){
        $l=$i+1; $r=$j+1;
        echo "<td>第{$l}行第{$r}列</td>"; }
        echo '</tr>'; }
        echo '</table>';
?>