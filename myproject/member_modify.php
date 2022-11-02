<?php
    $id = $_GET["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];

          
    $con = mysqli_connect("localhost:3307", "root", "", "project");
    $sql = "update members set pass='$pass', name='$name'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            unset($_SESSION["userid"]);
            unset($_SESSION["username"]);
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
        }

            
    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>