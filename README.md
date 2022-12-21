# PHP-practice
<p align="center">
<img width="500px" height = "350px"  src="https://user-images.githubusercontent.com/29851772/208898259-f353e0c3-5ac4-46e5-8f24-edf3bb2e0c57.png">
<br>     
<img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white"/>
<img src="https://img.shields.io/badge/CSS-1572B6?style=flat-square&logo=CSS3&logoColor=white"/>
<img src="https://img.shields.io/badge/XAMPP-efefef?style=flat-square&logo=XAMPP&logoColor=#FB7A24"/>
<img src="https://img.shields.io/badge/phpMyAdmin-6C78AF?style=flat-square&logo=phpMyAdmin&logoColor=white"/>
</p>

## 환경 설정
     XAMPP
       - Apache와 MySQL 사용
       - port 번호 다음과 같이 설정
     phpMyAdmin
       - MySQL 옆의 Admin을 눌러서 phpMyAdmin에 접속
     
     - 프로젝트 파일의 경로는 D:\xampp\htdocs\myproject
     - http://localhost/myproject/index.php URL로 접속
     
   <img width="540px" height = "350px"  src="https://user-images.githubusercontent.com/29851772/208895314-0c3c6f25-bab1-4543-b3ad-33ec153c8da1.png">
   


## 구현 기능 목록

- 회원가입 & 로그인 & 정보 수정
- 포인트 랭킹
- 랜덤 메뉴 추천
     - Sample DB에서 랜덤 메뉴 추천
- 개인 메뉴리스트
     - 직접 추가한 메뉴 리스트에서 추천
- 추천 메뉴 이미지 띄워주기
- 리뷰 작성 & 리뷰 목록 보기

## 아이디어 스케치

   <img width="675px" height = "380px"  src="https://user-images.githubusercontent.com/29851772/208900335-ea85cde0-908b-41d7-964d-0209de68b959.png">
   
   <img width="675px" height = "380px"  src="https://user-images.githubusercontent.com/29851772/208900511-0180d853-87ed-4da1-af27-3e07e6e67cf7.png">
   
   <img width="675px" height = "380px"  src="https://user-images.githubusercontent.com/29851772/208900657-d445ca6a-40de-4223-961e-c3c0ef12bbdb.png">
   
## 구현한 기능별 설명

- 회원가입 & 로그인 & 정보 수정

   <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208903441-f6687526-88f8-483d-a0f9-37089f0eab1d.png">
   
     - 처음 메인 페이지에 접속하면 보이는 화면 
     - 전체적인 디자인은 "요기요" 홈페이지의 디자인 참고
     - 리뷰를 작성하면 주는 포인트 랭킹을 포인트가 높은 순서대로, 리뷰 목록은 최신순으로 볼 수 있음
   <br><br>
   
   <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208902950-bb64ecd4-5de6-46db-8b1d-da36890c42ad.PNG">
   
     - 회원가입 간단하게 구현
   <br><br>
   
   <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208905030-792f6d1f-d8ee-4676-a7eb-cf79b81835a8.png">
      
     - 가입한 정보로 로그인을 하면 내 정보 버튼도 띄워주고 나의 메뉴 버튼 생성 
     - 로그인을 하지 않아도 샘플 메뉴 추천 기능은 사용 할 수 있지만 본인만의 메뉴 리스트를 따로 만들지는 못함
     - 로그인 된 아이디는 session을 통해 로그인 상태 유지
   <br><br>

   <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208906409-8a7a4e0c-9df8-4e6f-bb14-5cc8ed863e3c.PNG">
       
     - 내 정보에 들어가면 현재 포인트를 알 수 있고, 정보 수정은 간단하게 이름과 비밀번호만 변경 구현
   <br><br>  
   
     <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208907568-4b34eca5-b3b7-4b34-9499-4c590dbff15c.png">
       
    - 샘플 메뉴 버튼을 누르면 6가지 카테고리 중 하나를 선택하고 시작 버튼을 눌러 카테고리에 맞는 메류를 랜덤으로 추천
   <br><br>  
   
     <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208907607-b9d5a95c-db45-44bd-a10b-3c4b3a04acbe.png">
       
     - 나의 메뉴 버튼을 누르면 개인 메뉴 List를 추가 혹은 삭제하며 수정 할 수있고 시작 버튼을 눌러 List의 목록 중에서 랜덤으로 추천 
   <br><br>  
   
     <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208907591-aabdffcb-eb7a-4a44-8c5f-563cdb453951.png">
       
     - 추천 결과가 나오면 배달 페이지로 연결하거나 관련 가게 리스트를 띄워주는 기능을 생각했었지만                          
       시간 관계상 단순하게 이미지를 띄워주는것으로 구현
   <br><br>  
   
     <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208922108-d65e3e04-2aed-4452-b20a-a7a12afad8a1.png">
       
     - 리뷰 목록을 누르면 작성된 리뷰들이 최신순으로 보여짐
   <br><br>  
 
     <img width="850px" height = "605px"  src="https://user-images.githubusercontent.com/29851772/208922124-aedb303d-18cd-49d7-b57c-43ed16c18cd8.png">
       
     - 리뷰 쓰기를 누르면 평점을 선택하고 내용을 적을 수 있고, 이미지도 첨부 가능
     - 이미지 첨부는 선택이지만 평점과 내용은 필수로 입력해야함
   <br><br>  
   
   
   
