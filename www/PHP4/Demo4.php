<?php
  //���ش��̿��ÿռ��С
  echo round(disk_free_space('D:')/1024/1024/1024,2).'GB';
  //�����ܿռ��С
  echo '<br>'.round(disk_total_space('D:')/1024/1024/1024,2).'GB';

?>