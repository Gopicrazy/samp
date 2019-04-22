<html>
<head>
</head>
<body>
<?php

$mark=["Karthik"=>[100,90],"Janani"=>[70,99],"Naga"=>[80,90]];
foreach($mark as $k=>$v)
{
	echo $k." ".max($v);
	echo "<br>";
}
?>
</body>
</html>