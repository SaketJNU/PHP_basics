<html>
<body>
<form>enter number<br>
<input type="text" name="x1"><br>
<input type="submit" name="submit">
</form>
<?php
$num=$_GET["x1"];
function fact($num)
{
if($num<=1)
{
return 1;
}
else
{
return $num*fact($num-1);
}
}
$result=fact($num);
echo "factorial of ".$num."is ".$result;
?>
</body>
</html>
