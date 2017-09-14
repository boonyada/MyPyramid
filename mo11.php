<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=5;$row++) {
	for($col=1;$col<=5-$row;$col++) {
	echo(".");
	}
	for($col=$row;$col<=$row;$col++){
		echo($row);
	}
	for($col=2;$col<=$row;$col++){
		echo(".");
	}
	echo($row);
	echo "<br/>";
}
?>