<html>
<head>
<title>
Indian cricket players
</title>
<style>
table {
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:center;
border:1px solid black;
}
th
{
background-color:lightgray;
}
</style>
</head>
<body>
<h2 style="text-align:center;">
list of indian cricket players </h2>
<?php
$players=array("Virat kohli","Rohith sharma","Sachin tedulkar","MS Dhoni","Shikar dhavan","KL rahul","Jadeja","Hardhik pandya","buvaneshvar kumar","Nishanth sharma");
echo"<table>";
echo"<tr><th>S.No</th><th>Player name</th></tr>";
foreach($players as $x=>$player)
{
echo"<tr>
<td>" .($x+1)."</td><td>".$player."</td>
</tr>";
}
echo "</table>";
?>
</body>
</html>
