<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=0;$row<=4;$row++) {

	echo($row+1);

	echo("*");

	for($col=1;$col<=1;$col++){
		echo($col+$row+$row);
	}

	echo("*");

	for($col=2;$col<=2;$col++){
		echo($col+$row+$row);
	}
	echo "<br/>";
}
?>