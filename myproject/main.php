<div id="main_img_bar">

</div> 
<div id="main_content">
    
<!-- 메뉴 추천해주기 -->
    <div id="menu">
        <h4>메뉴 추천</h4>
        <div><input type="button" id="menu_btn" value ="샘플 메뉴" onclick="location.href='sample_list.php?food=none'"></div>
<?php
    if($userid){
?>
        <div><input type="button" id="menu_btn" value="나의 메뉴" onclick="location.href='custom_list.php?food=none'"></div>
<?php
    }
?>
    </div>
    
    
<!-- 리뷰 랭킹 표시하기 -->    
        <div id="review_rank">
            <h4>리뷰 포인트 랭킹</h4>
            <ul>
<?php
    $rank = 1;
    $con = mysqli_connect("localhost:3308", "root", "1234", "project");
    $sql = "select * from members order by point desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "회원 DB 테이블(members)이 생성 전이거나 아직 가입된 회원이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
            $name  = $row["name"];        
            $id    = $row["id"];
            $point = $row["point"];
            $name = mb_substr($name, 0, 1)." * ".mb_substr($name, 2, 1);
?>
                <li>
                    <span><?=$rank?></span>
                    <span><?=$name?></span>
                    <span><?=$id?></span>
                    <span><?=$point?> p</span>
                </li>
<?php
            $rank++;
        }
    }  
?>
            </ul><br><br><br>
            <h4><a href="review_list.php">리뷰 목록</a></h4>
            <ul>
<?php
    $review_num = 1;
    $sql = "select * from review order by num desc limit 5";
    $result = mysqli_query($con, $sql);
                
    if (!$result)
        echo "review 테이블이 생성 전이거나 아직 작성된 리뷰가 없습니다!";
    else {
        while( $row = mysqli_fetch_array($result) ){
            $id  = $row["id"];
            $content = $row["content"];
            $rating = $row["rating"];
?>
                <li>
                    <span><?=$review_num?></span>
                    <span><?=$id?></span>
                    <span>
                        <div id="review_rank_content">
                            <?=$content?>
                        </div>
                    </span>
                    <span>
<?php
                    while($rating > 0){
?>                         
                        ★
<?php  
                    $rating--;
                    }
?>
                    </span>
                </li>
<?php                
            $review_num++;           
        }
    }
    mysqli_close($con);
?>
            </ul>
        </div>
</div>






