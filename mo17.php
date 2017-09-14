<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);
	}

	echo "<br/>";
}
?>