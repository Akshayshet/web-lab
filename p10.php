<html>
<head>
<title> Sorting students records </title>
</head>
<body>
<?php
function selectionSort($array) {
$length = count($array);
for ($j = 0; $j < $length-1; $j++) {
$iMin = $j;
for ($i = $j+1; $i < $length; $i++) {
if ($array[$i] < $array[$iMin]) {
$iMin = $i;
}
}
if ($iMin != $j) {
$temp = $array[$j];
$array[$j] = $array[$iMin];
$array[$iMin] = $temp;
}
}
return $array;
}
$con=@mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'test1');
$sql="select * from student";
$result=mysqli_query($con,$sql) or die("No such user: " . mysqli_error());
if (mysqli_num_rows($result) == 0)
{
echo "No matching records!!!!";
}
$i=0;
while($row=mysqli_fetch_row($result))
{
$n[$i] = $row[0];
$usn[$i] = $row[1];
$addr[$i] = $row[2];
$email[$i] = $row[3];
$i = $i+1;
}
$a = selectionSort($n);
echo "<table border>
<th> Name </th>
<th> USN </th>
<th> address </th>
<th> Email </th>";
for ($j = 0; $j < count($a); $j++)
{
for ($k = 0; $k < count($a); $k++)
{
if($a[$j] == $n[$k])
{
echo "<tr>
<td>$n[$k]</td>
<td>$usn[$k]</td>
<td>$addr[$k]</td>
<td>$email[$k]</td>
<tr>";
}
}
}
echo"</table>";
?>
</body>
</html>
