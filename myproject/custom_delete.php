<meta charset='utf-8'>
<?php
    $id = $_GET["id"];
	$data = $_GET["data"];

    $foodname = explode(',', $data);
    
	$con = mysqli_connect("localhost:3307", "root", "", "project");
    
    for($i=0; $i < count($foodname); $i++){
        $sql = "delete from customfoodlist where id='$id' and foodname='$foodname[$i]'";
        mysqli_query($con, $sql);
    }
	
	mysqli_close($con);        

	echo "
	      <script>
	          location.href = 'custom_list.php?food=';
	      </script>
	  ";

?>

            
