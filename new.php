<?php
    $con= mysqli_connect("localhost","root","","pux");
	if(isset($_POST['serch'])){
    $name = $_POST['search'];
   //echo  $name;
   $query = "SELECT * FROM user WHERE username='$name'";
  // echo  $query;
$result = mysqli_query($con,$query);
	

if ($row = mysqli_fetch_array($result))
{
        echo $row['username'] . " <br>" . $row['password'];
        echo "<br>";
}
else echo'pux';
    mysqli_close($con);
	}
    ?>