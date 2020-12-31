<?php

$DBConnect = @mysqli_connect("localhost","root","", "mydb")
		Or die("<p></p>");
echo "<p></p>";
@mysqli_select_db($DBConnect, "mydb")
		Or die("<p></p>");
echo "<p></p>";

$ch1=$_REQUEST["user"];

$ch2=$_REQUEST["mail"];

$ch3=$_REQUEST["pass"];

$s="select * from registeration where user='$ch1'";

$result=mysqli_query($DBConnect,$s);

$num=mysqli_num_rows ($result);

if($num==1)
{
	echo "<script>alert('This user id alredy use and try again');window.location='nb.html'</script>";
	
	
}else{

$SQLstring = "insert into registeration(user,mail,Pass) values('$ch1','$ch2','$ch3')";
$QueryResult = @mysqli_query($DBConnect, $SQLstring)
		Or die("<p>Unable to execute the query.</p>". "<p>Error code " . mysqli_errno($DBConnect). ": " . mysqli_error($DBConnect)) . "</p>";
echo "<p><script>alert('you have created the account.');window.location='nb.html'</script>;</p>";
echo "<p>" . mysqli_info($DBConnect) . "</p>";
}
mysqli_close($DBConnect);
?>


