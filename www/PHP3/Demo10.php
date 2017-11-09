<?php

  $products=array(

     array("Ж»№ы",6,28.8),
     array("ЦнИв",2,32.6),
     array("±эёЙ",3,45.3),
  );
 
   //echo count($products)
   //echo count($products[1]);
   for ($i=0;$i<count($products);$i++){
       for ($j=0;$j<count($products[$i]);$j++){
        echo $products[$i][$j]."|";
       }
      echo "<br>";
   }
?>