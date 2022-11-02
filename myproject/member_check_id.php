<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>우리 뭐 먹지?</title>
<style>
h3 {
    padding-left: 5px;
    border: solid 5px #cccccc;
    text-align: center;
}
#close {
    margin-top: 50px; margin-left: 120px; 
    cursor:pointer;
    width: 120px; height: 45px;
}

</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost:3307", "root", "", "project");

 
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
         $id_check = "false";
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
         $id_check = "true";
      }
    
      mysqli_close($con);
   }
?>
</p>


        <img src="./img/close.png" id="close" onclick="javascript:self.close()">


</body>
</html>


