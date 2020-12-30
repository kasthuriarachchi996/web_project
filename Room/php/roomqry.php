<?php
$DBConnect = @mysqli_connect("localhost","root","", "mydb")
    Or die("<p></p>");
echo "<p></p>";
@mysqli_select_db($DBConnect, "mydb")
    Or die("<p></p>");
echo "<p></p>";
 $bd = $_REQUEST['bdate'];
 $cname = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $mail = $_REQUEST['email'];
 
$s="select * from book where date='$bd'";

$result=mysqli_query($DBConnect,$s);

$num=mysqli_num_rows ($result);

if($num==5)
{
  echo "<script>alert('Sorry sir.you can not book room,Because already all rooms are booked.');window.location='new1.html'</script>";
  
  
}else{

$SQLstring = "insert into book(date,name,phone,mail)values('$bd','$cname','$phone','$mail')";
$QueryResult = @mysqli_query($DBConnect, $SQLstring)
    Or die("<p>Unable to execute the query.</p>". "<p>Error code " . mysqli_errno($DBConnect). ": " . mysqli_error($DBConnect)) . "</p>";
echo "<p><script>alert('you have booked Hotel.');window.location='new1.html'</script>;</p>";
echo "<p>" . mysqli_info($DBConnect) . "</p>";
}
mysqli_close($DBConnect); 

 ?>