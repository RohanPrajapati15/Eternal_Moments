<?php
$con=mysqli_connect("localhost:3306", "root", "", 
"phpcrud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>