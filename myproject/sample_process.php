<?php
    $category = $_POST["cate_text"];
    $con = mysqli_connect("localhost:3307", "root", "", "project");
    $sql = "select * from samplefoodlist where category='$category'";
    $result = mysqli_query($con, $sql); 
    
    $total = mysqli_num_rows($result); //$total은 검색한 카테고리 개수
    
    $random_num = mt_rand(0,$total-1); 
    
    mysqli_data_seek($result, $random_num);
    $row = mysqli_fetch_array($result);

    $foodname = $row["foodname"];
    mysqli_close($con);

    echo "
	      <script>
	          location.href = 'sample_list.php?food=$foodname';
	      </script>
	  ";
?>


