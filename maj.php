<?php 
$ch1="banque arabe tunisien";
$sol = ucwords($ch1['0']);
$i=0;
while($i<strlen($ch1))
{
 $c = $ch1[$i];
	if($c==" ")
	{
 	  $j=$i;
	  while(($ch1[$j]==" ")&&($j<strlen($ch1)))
	  { 
	    $j=$j+1;
          }
	  $c=$ch1[$j];
	  $j=$j+1;
          
          $c= ucwords($c);

	  $i=$j;	
	   $sol= $sol." ".$c;
	}
	   else
		{
		  $i=$i+1;
		}
}
echo $sol;
?>