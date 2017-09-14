<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=4;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);
	}
	for($col=$row;$col<=$row;$col++) {
		echo($col+4);
	}
	
	for($col=0;$col<=3+$row;$col++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>