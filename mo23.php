<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=5;$row++) {
	echo($row);

	for($col=1;$col<=7-$row;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$row;$col++) {
		echo(".");	
	}

	echo($row);

	echo "<br/>";
}
?>