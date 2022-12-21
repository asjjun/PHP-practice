<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];

    $con = mysqli_connect("localhost:3308", "root", "1234", "project");

	$sql = "insert into members(id, pass, name, point) ";
	$sql .= "values('$id', '$pass', '$name', 0)";

	mysqli_query($con, $sql);  
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
