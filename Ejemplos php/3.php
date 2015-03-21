 -- Evalua una condición</p>  
 
  <?php $color = 'b';
 if($color == 'r'){
 $co = '#f00';
 }else{
 $co = '#00f';
 }
  ?> 
  <p style="color:<?php print $co; ?>">bloque if / else  -- Evalua dos condiciones</p>  <?php 
  $color = 'g';
  if($color == 'r'){
  $co = '#f00';
  }else if($color ='g'){
  $co = '#0f0';
  }else{
  Y$co = '#00f';
  } 
  ?> 
  <p style="color:<?php print $co; ?>">bolque if/else if /else  -- Evaluamáss de dos condiciones</p> 