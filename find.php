<?php
$con=mysqli_connect('localhost','root');
if(!$con)
echo "connection failed";
//else
//echo "connection done";
//$yourName = ($_POST['name1']);
//$yourName = $conn->real_escape_string($_POST['name1']);
mysqli_select_db($con,'portal');
$q="select jobrole from xyz where skill ='".$_POST["name1"]."'";
$result=mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($result))
{
	$name   = $row['jobrole'];
	//$email = $row['email'];
	//$phone = $row['phone'];
	//$var_value = $_POST[$row['phone']];
}


//echo  $name;
Echo
"<h1> your job role assosiate with your skill is  $name</h1>";


//session_start();
//$_SESSION["phone_num"] = $phone;


mysqli_close($con);
 //$_POST['name1'];
?>
<a href="welcome.php" class="btn btn-primary">Back to Home</a>






