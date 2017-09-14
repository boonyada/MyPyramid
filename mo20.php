<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=5;$row++) {
	for($col=1;$col<=$row;$col++) {
		echo($row);	
	}

	for($col=1;$col<=$row;$col++) {
		echo("*");	
	}

	for($col=1;$col<=$row;$col++) {
		echo($row);	
	}

	echo "<br/>";
}
?>