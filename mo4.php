<pre style="font-family:'courier new';font-size:40px;">
<?php
for($row=1;$row<=4;$row++) {
	for($col=1;$col<=$row;$col++) {
		echo("*");
	}
	
	for($col=$row;$col>=2;$col--){
		echo($col);
	}
	
	for($col=1;$col<=$row;$col++){
		echo($col);
	}
	
	echo "<br/>";
}
?>