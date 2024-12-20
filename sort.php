<!DOCTYPE html>
<head>
<title>student</title>
</head>
<body>
<?php
$name=["Arun","arjun","sanu","anu","anoop"];
$t=$name;
echo"Dispaly using print_r<b>";
print_r($name);
echo"<br><br>";
echo"print using asort()";
asot($name);
print_r($name);
echo"<br><br>";
echo"print using arsort()";
arsort($t);
print_r($t);
?>
</body>
</html>
