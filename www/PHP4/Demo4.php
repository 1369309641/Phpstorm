<?php
  //返回磁盘可用空间大小
  echo round(disk_free_space('D:')/1024/1024/1024,2).'GB';
  //返回总空间大小
  echo '<br>'.round(disk_total_space('D:')/1024/1024/1024,2).'GB';

?>