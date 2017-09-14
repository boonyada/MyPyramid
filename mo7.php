<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=7;$row++) {
	for($col=0;$col<=7-$row;$col++) {
	echo(".");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=3;$col<=1+$row;$col++){
		echo($col-1);
	}

		echo($row);

	for($col=$row;$col>=1;$col--){
		echo($col);
	}

	echo "<br/>";
}
?>