<?php

for($i=1,$k=5;$i<=5;$i++,$k--)
{
  for($j=1;$j<=$k-1;$j++)
   {
 echo "-";
   }
  for($j=1; $j<=2*$i-1; $j++)
    {
	 echo "*";
	}
     echo "<br/>";
  }
 
?>