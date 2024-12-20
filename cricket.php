<!DOCTYPE html>
<html>
<head>
<title>Cricket</title>
</head>
<body>
<h1>TEAM INDIA</h1>
</body>
<?php

$name=["VIRAT KOLI","ROSHIT SHARMA","SANJU SAMSON","RISHAP PANT","R.JADEJA","R.ASHWIN","ISHAN KISHAN","JASPRIT BUMBRAH","SREYAS IYER","MS DHONI","MUHAMED SHAMI"];

$role=["batsman","batsman","wicket keeping batsman","wicket keeping batsman","all rounder","bowler","wicket keeping batsman""bowler","batsman","wicket keeping batsman","bowler"];

echo "STARTING XI<br><br>";
<table border='3px'>
<tr>
<th>SL NO</th>
<th>PLAYER</th>
<th>POSITION</th>;

for($i=0;i<11;i++)
{
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
