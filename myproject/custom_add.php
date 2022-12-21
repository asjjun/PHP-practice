<?php
    $id   = $_POST["userid"];
    $foodname = $_POST["foodname"];
    if($foodname){
        $con = mysqli_connect("localhost:3308", "root", "1234", "project");
	$sql = "insert into customfoodlist(id, foodname) ";
	$sql .= "values('$id', '$foodname')";

	mysqli_query($con, $sql);  
    mysqli_close($con);     

    
    }
    echo "
	      <script>
	          location.href = 'custom_list.php?food=$foodname';
	      </script>
	  ";
?>

   
