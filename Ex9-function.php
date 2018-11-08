<?php
function compare($nbr1,$nbr2){
  if($nbr1==$nbr2)
      return $nbr1." est égal à ".$nbr2."<br>";
  elseif($nbr1>$nbr2)
       return $nbr1." est plus grand que ".$nbr2."<br>";
  else
       return $nbr2." est plus grand que ".$nbr1."<br>";
}
echo compare(10 ,9);

function sinusAngle($angle,$unite="r"){
   if($unite=="r")
       echo sin($angle);
   elseif($unite=="d") {
       $value = $angle * pi() / 180;
       echo sin($value);
   }
}
echo sinusAngle(90,"d");