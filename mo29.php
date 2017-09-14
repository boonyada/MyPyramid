<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=5;$row++) {

	echo($row);

	echo("*");

	echo(2+$row);

	for($col=1;$col<=2+$row;$col++) {
		echo("*");
	}

	echo "<br/>";
}
?>