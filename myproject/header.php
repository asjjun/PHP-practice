<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>

    <div id="top">
        <ul id="top2">
            <h3> <a href="index.php">우리 뭐 먹지?</a> </h3>
            <ul id="top_menu">  
<?php
                if(!$userid) {
?>                
                    <li><a href="member_form.php">회원 가입</a></li>
                
                    <li><a href="login_form.php">로그인</a></li>
<?php
                } else {
                    $logged = $username."(".$userid.")님";
?>
                    <li><?=$logged?> </li>
                    
                    <li><a href="logout.php">로그아웃</a> </li>
                 
                    <li><a href="member_modify_form.php">내 정보</a></li>
<?php
                }
?>

            </ul>
        </ul>       
    </div>