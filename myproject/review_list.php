<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>우리 뭐 먹지?</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?asssxsxss">
<link rel="stylesheet" type="text/css" href="./css/review.css?assscxxxsss">
<script>
</script>
</head>
<body>         
    <header>
    	<?php include "header.php";?>
    </header>
    <section>
    <div id="main_img_bar">
        
    </div>
    <div id="main_content">
        <div id="review_box">
	    <h3><a href="review_form.php">리뷰 쓰기</a></h3>
        <ul id="review_list">
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost:3307", "root", "", "project");
	$sql = "select * from review order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result);

	$scale = 10;


	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 

	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);

      $row = mysqli_fetch_array($result);

	  $id          = $row["id"];
      $regist_day  = $row["regist_day"];
      $rating      = $row["rating"];
	  $content     = $row["content"];
      $file_name    = $row["file_name"];
	  $file_type    = $row["file_type"];
      $file_copied  = $row["file_copied"];
      
?>
      <div id="list_box">
          <span id="list_name"><?=$id?>님</span>
          <span id="list_day"><?=$regist_day?></span><br><br>            
          <span id="list_rating">
<?php
          while($rating > 0){
?>                         
          ★
<?php  
          $rating--;
          }
?>
          </span><br><br>
<?php
            if($file_name) {
                $real_name = $file_copied;
				$file_path = "./data/".$real_name;
				$file_size = filesize($file_path);	
?>
                <img src = "<?= $file_path ?>" id="list_img"><br>
<?php
            }
            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br>", $content);
?>      
            <span id="list_content"><?=$content?></span>
      </div>
<?php
   	   $number--;
   }
   mysqli_close($con);

?>
        </ul>
        </div>
    </div>
    </section>
    <footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>