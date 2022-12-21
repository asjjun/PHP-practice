<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>우리 뭐 먹지?</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?assssss">
<link rel="stylesheet" type="text/css" href="./css/menulist.css?sxsss">
<script>
    function result_popup(foodname) {
        window.open(
            "https://search.naver.com/search.naver?where=image&sm=tab_jum&query="+foodname, 
            "naver",
            "left=450,top=100,width=1000,height=800,scrollbars=no,resizable=yes" 
        );
        document.custom_start.custom_text.value = foodname;
    }
    
    function delete_list(userid){
        var food_list = document.getElementsByName("list");
        var data = "";
        var list_check = false;
        
        for(i=0; i<food_list.length; i++){
            if (food_list[i].checked == true ) { 
                if(data == ""){
                    data = food_list[i].value; 
                }else{
                    data = data + "," +food_list[i].value;
                }
                list_check = true;   
            }
        }
        
        if(list_check){
            document.custom_add.action = "custom_delete.php?data="+data+"&id="+userid;
            document.custom_add.submit();
            document.custom_add.action = "custom_add.php";
        }
    }
    
    
</script>
</head>
<body>
    <header>
    	<?php include "header.php";?>
    </header>
    <div id="main_img_bar">
        
    </div>
    <section>
    <div id="main_content">
        <div id="custom_list">
        <h1>메뉴 List</h1>
<?php
        if (isset($_GET["page"])){
            $page = $_GET["page"];
        }else{
            $page = 1;
        }
			
        $foodname = $_GET["food"];
        
        $con = mysqli_connect("localhost:3308", "root", "1234", "project");
        $sql = "select * from customfoodlist where id='$userid' order by num desc";
        $result = mysqli_query($con, $sql);
        
        $total = mysqli_num_rows($result); //$total은 검색한 아이디의 전체음식 개수
        
        
        $scale = 7;

	    
	    if ($total % $scale == 0){
            $total_page = floor($total / $scale);  
        }else{
            $total_page = floor($total / $scale) + 1; 
        }
            
          
        $start = ($page - 1) * $scale;      

	    $number = $total - $start;
        
        for ($i=$start; $i<$start+$scale && $i < $total; $i++) {
            mysqli_data_seek($result, $i);
            
            $row = mysqli_fetch_array($result);
           
            $foodlist = $row["foodname"]; 
?>            
            <ul id="foodlist">
                <input type="checkbox" name="list" value="<?=$foodlist?>"> <?=$foodlist?>
            </ul>
<?php
   	        $number--;
        }
        mysqli_close($con);
?>
        <ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='custom_list.php?food=$foodname&page=$new_page'>◀</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)    
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li> <a href='custom_list.php?food=$foodname&page=$i'> $i </a> <li>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo "<li> <a href='custom_list.php?food=$foodname&page=$new_page'>▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
        </ul>        
        <form name="custom_add" id="custom_add" method="post" action="custom_add.php">
            <input type="hidden" name="userid" value="<?=$userid?>">
            <input type="text" id="foodname" name="foodname" value="">
            <input type="button" id ="custom_add_btn" value="추가" onclick="submit()" >
        </form>
        </div>
        
        <button id="custom_del_btn" onclick="delete_list('<?=$userid?>')">삭제</button>
        
        <form name="custom_start" id="custom_start" method="post" action="custom_process.php">
            <input type="hidden" name="userid" value="<?=$userid?>">
            <input type="text" id="foodname" name="custom_text" value=""><br>
            <input type="button" id="start_btn" value="시작" onMouseDown="submit()" onMouseUP="result_popup('<?=$foodname?>')">
        </form>
    </div>
    </section>
    <footer>
    	<?php include "footer.php";?>
    </footer>
    </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
