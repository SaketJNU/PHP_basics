<html>
<head>check palidrome</head>
<body>
<form>
<input type="text" name="str"><br>
<input type="submit" name="submit" value="Enter a word or string to check"><br>
</form>
<?php
function palindrome($string)
{	
 for($i=strlen($string)-1,$j=0;$j<$i;$i--,$j++)
 {
 	$temp=$string[$i];
 	$string[$i]=$string[$j];
	$string[$j]=$temp;
 }
 return $string;
}

$string1=$_GET["str"];
if($string1==palindrome($string1))
{
	echo "entered word or string is Palindrome!!";
}
else
{
	echo "its not a Palindrome!!";
}
?>
</body>
</html>
