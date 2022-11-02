<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>우리 뭐 먹지?</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?assxxssss">
<link rel="stylesheet" type="text/css" href="./css/review.css?sccvs">
<script>
  function check_input() {
      if (!document.review_form.rating.value)
      {
          alert("평점을 입력하세요!");
          document.review_form.rating.focus();
          return;
      }
      if (!document.review_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.review_form.content.focus();
          return;
      }
      document.review_form.submit();
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
        <h3 id="review_title">
	    		리뷰 작성
		</h3>
	    <form  name="review_form" method="post" action="review_insert.php" enctype="multipart/form-data">
	    	 <ul id="review">
				<li>
                    <input type="text" name="rating" list="rating" placeholder="평점을 선택해주세요!">
                        <datalist id="rating">
                            <option value="1">
                            <option value="2">
                            <option value="3">
                            <option value="4">
                            <option value="5">
                        </datalist>
                    <label for="file"></label>
                    <input type="file" id="file" name="upfile">
				</li>		
	    	
	    		<li id="text_area">	
	    			<pre><textarea name="content" id="content" placeholder="내용"></textarea></pre>
	    		</li>
            </ul>
	    	<ul class="buttons">
                <button type="button" id="review_regi_btn" onclick="location.href='review_list.php'">목록보기</button>   &nbsp;&nbsp;&nbsp;&nbsp;     
				<button type="button" id="review_regi_btn" onclick="check_input()">등록하기</button>
			</ul>
	    </form>
    </div>
    </section>
    <footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>