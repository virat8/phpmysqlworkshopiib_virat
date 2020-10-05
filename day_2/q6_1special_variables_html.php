<html>
<body>
<?php

if($_POST["s1"]==$_POST["s2"] and $_POST["s2"]==$_POST["s3"] and $_POST["s3"]==$_POST["s1"])
{
	echo "Equilateral Triangle";
}

elseif($_POST["s1"]==$_POST["s2"] or $_POST["s2"]==$_POST["s3"] or $_POST["s3"]==$_POST["s1"])
{
	echo "Isoceles";
}
else{
	echo"Scelene Triangle";
}
?>
 
</body>
</html>