<!DOCTYPE html>
<html>
<head></head>

<body>
		<?php
				date_default_timezone_set("UTC");
				
				$curdate = date("m");
				
				if($curdate==08)
				{
					echo "It's August, so it's really hot";
				}
				else
				{
					echo "<h2> It's not August, so at least it is not in the peak of the heat </h2>";
				}
		
		?>
</body>

</html>