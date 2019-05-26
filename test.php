<?php
$con=mysqli_connect("localhost", "root", "zlx7895123")or die("canot connect server");
mysqli_select_db($con,"owwp")or die("cannot select DB");   
mysqli_set_charset($con,"UTF8");  
$sql = "SELECT intro From codes WHERE author='zss'";
		//执行SQL语句
$intro=mysqli_query($con,$sql)or die("失败");
echo $intro;

mysqli_close($con);  
	?>
