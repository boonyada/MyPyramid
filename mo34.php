<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=3;$row++) {
	for($col=1;$col<=3-$row;$col++) {
		
		echo(".");
	}


		echo("*");


	for($col=2;$col<=$row;$col++){
		echo($col);
	}
	for($col=$row;$col<=$row;$col++) {
		
		echo($col);
	}
	for($col=$row;$col>=2;$col--){
		echo($col);
	}
	echo("*");

	for($col=1;$col<=3-$row;$col++) {
		
		echo(".");
	}

	echo "<br/>";
}

for($row=2;$row>=1;$row--) {
	for($col=1;$col<=3-$row;$col++) {
		echo(".");
	}
	
	echo("*");

	for($col=1;$col<=$row;$col++){
		echo($row);
	}
	
	for($col=2;$col<=$row;$col++){
		echo($col);
	}

	echo("*");

	for($col=1;$col<=3-$row;$col++) {
		echo(".");
	}

	echo "<br/>";
}

?>