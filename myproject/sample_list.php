<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>우리 뭐 먹지?</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?assssdss">
<link rel="stylesheet" type="text/css" href="./css/menulist.css?sxxs">
<script>
    function result_popup(foodname) {
        if(foodname){
            window.open(
            "https://search.naver.com/search.naver?where=image&sm=tab_jum&query="+foodname, 
            "naver",
            "left=450,top=100,width=1000,height=800,scrollbars=no,resizable=yes" 
        );
        document.sample_start.cate_text.value = foodname;
        }
    }
    
    function set_text1() {
        document.sample_start.cate_text.value = "한식";
    }
    function set_text2() {
        document.sample_start.cate_text.value = "양식";
    }
    function set_text3() {
        document.sample_start.cate_text.value = "중식";
    }
    function set_text4() {
        document.sample_start.cate_text.value = "일식";
    }
    function set_text5() {
        document.sample_start.cate_text.value = "분식";
    }
    function set_text6() {
        document.sample_start.cate_text.value = "카페/디저트";
    }
    
    
    
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
<?php
    $foodname = $_GET["food"];
?>
    <form name="category" id="category" method="post" action="sample_process.php">
        <ul>
            <img src="img/한식.png" id="sample_menu" name="korean" value="한식" onclick="set_text1()">
            <img src="img/양식.png" id="sample_menu" name="western" value="양식" onclick="set_text2()">
            <img src="img/중식.png" id="sample_menu" name="chinese" value="중식" onclick="set_text3()">
        </ul>
        <ul>
            <img src="img/일식.png" id="sample_menu" name="japanese" value="일식" onclick="set_text4()">
            <img src="img/분식.png" id="sample_menu" name="school" value="분식" onclick="set_text5()">
            <img src="img/카페.png" id="sample_menu" name="dessert" value="카페/디저트" onclick="set_text6()">
        </ul>
        
    </form>
    
    <form name="sample_start" id="sample_start" method="post" action="sample_process.php">
        <input type="text" id="foodname" name="cate_text" value=""><br>
        <input type="button" id="start_btn" name="cate_btn" value="시작" onMouseDown="submit()" onMouseUP="result_popup('<?=$foodname?>')">
    </form>
    </div>
    </section>
    <footer>
    	<?php include "footer.php";?>
    </footer>
    </body>
</html>
