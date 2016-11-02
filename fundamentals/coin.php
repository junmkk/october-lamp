<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function rand(){
		return rand(0,1);
	}
	function coinToss($num){
		for($i=0; $i<$num;$i++){
			$coin = rand();
		}
	}

?>
</body>
</html>