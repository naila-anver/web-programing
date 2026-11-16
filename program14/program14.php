<?php
$names=array(
"s1"=>"Rabee",
"s2"=>"Samshar",
"s3"=>"Amal",
"s4"=>"Babu");
echo"<center>";
echo"<h2>Orginal student list</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>ascending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>descending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>

