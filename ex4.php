<html>
<body>
<strong> multiplication table</strong> <br/>

<?php
		$num=1;
		  $num2=2;
	for($i=1;$i<8;$i++)
	{
		echo $num;
		
	 	for($j=0;$j<6;$j++)
		{ 
			
				
			if($i==1)
			{echo $num2;
				$num2++;
			}
			
			If($i>1)
			{	
				$num2=$num+$num2;
				echo $num2;
			}
			
			If($j==5)
			{ echo "<br/>";
				$num++;
				$num2=$num;
			}
		}
			
			
	}
?>
	
</body>
</html>