  <?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/2 0002
 * Time: 14:54
 */echo '<table width=800 height=400 border=5 >';
   for($i=0;$i<4;$i++){
    echo '<tr>';
    for($j=0;$j<3;$j++){
        $l=$i+1; $r=$j+1;
        echo "<td>第{$l}行第{$r}列</td>"; }
    echo '</tr>'; }
    echo '</table>';
  ?>