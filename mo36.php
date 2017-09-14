<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=3;$row++) {
	for($col=1;$col<=4-$row;$col++){
		echo($row+$col-1);
	}

	for($col=1;$col<=$row;$col++){
		echo("*");
	}

	for($col=2;$col<=$row;$col++){
		echo("*");
	}

	for($col=3;$col>=$row;$col--){
		echo($col);
	}

	echo "<br/>";
}

for($row=2;$row>=1;$row--) {
	for($col=1;$col<=4-$row;$col++){
		echo($row+$col-1);
	}
	for($col=1;$col<=$row;$col++){
		echo("*");
	}
	for($col=3;$col<=1+$row;$col++){
		echo("*");
	}
	
	for($col=3;$col>=$row;$col--) {
		echo($col);
	}

	echo "<br/>";
}

?>