create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    point int(10),
    primary key(num)
);

create table samplefoodList(
  num int(10) not null auto_increment primary key,
  category char(30) not null,
  foodname char(30) not null
);

create table customfoodList(
  num int(10) not null auto_increment primary key,
  id char(15) not null,
  foodname char(30) not null
);

create table review(
  num int(10) not null auto_increment primary key,
  id char(15) not null,
  name char(10) not null,
  regist_day char(20) not null,
  rating int(10) not null,
  content text not null,
  file_name char(40),
  file_type char(40),
  file_copied char(40)
);

INSERT into members (id,pass,name,point) VALUES("php","1234","정승도",1000);
INSERT into members (id,pass,name,point) VALUES("server","123123","안세준",500);
INSERT into members (id,pass,name,point) VALUES("program","123456","김홍진",200);
INSERT into members (id,pass,name,point) VALUES("ming","qwer","차형석",100);

INSERT into samplefoodlist (category,foodname) VALUES("한식","설렁탕");
INSERT into samplefoodlist (category,foodname) VALUES("한식","감자탕");
INSERT into samplefoodlist (category,foodname) VALUES("한식","부대찌개");
INSERT into samplefoodlist (category,foodname) VALUES("한식","보쌈");
INSERT into samplefoodlist (category,foodname) VALUES("한식","육개장");
INSERT into samplefoodlist (category,foodname) VALUES("한식","김치찌개");
INSERT into samplefoodlist (category,foodname) VALUES("한식","갈비");
INSERT into samplefoodlist (category,foodname) VALUES("한식","김치찜");
INSERT into samplefoodlist (category,foodname) VALUES("한식","순두부");
INSERT into samplefoodlist (category,foodname) VALUES("한식","죽");
INSERT into samplefoodlist (category,foodname) VALUES("한식","등갈비");
INSERT into samplefoodlist (category,foodname) VALUES("한식","순대국");
INSERT into samplefoodlist (category,foodname) VALUES("한식","칼국수");
INSERT into samplefoodlist (category,foodname) VALUES("한식","찜닭");

INSERT into samplefoodlist (category,foodname) VALUES("중식","짜장면");
INSERT into samplefoodlist (category,foodname) VALUES("중식","짬뽕");
INSERT into samplefoodlist (category,foodname) VALUES("중식","탕수육");
INSERT into samplefoodlist (category,foodname) VALUES("중식","볶음밥");
INSERT into samplefoodlist (category,foodname) VALUES("중식","마라탕");
INSERT into samplefoodlist (category,foodname) VALUES("중식","짜장밥");
INSERT into samplefoodlist (category,foodname) VALUES("중식","짬뽕밥");
INSERT into samplefoodlist (category,foodname) VALUES("중식","간짜장");
INSERT into samplefoodlist (category,foodname) VALUES("중식","울면");
INSERT into samplefoodlist (category,foodname) VALUES("중식","잡채밥");
INSERT into samplefoodlist (category,foodname) VALUES("중식","유산슬");
INSERT into samplefoodlist (category,foodname) VALUES("중식","양장피");

INSERT into samplefoodlist (category,foodname) VALUES("일식","초밥");
INSERT into samplefoodlist (category,foodname) VALUES("일식","덮밥");
INSERT into samplefoodlist (category,foodname) VALUES("일식","규동");
INSERT into samplefoodlist (category,foodname) VALUES("일식","가츠동");
INSERT into samplefoodlist (category,foodname) VALUES("일식","라멘");


INSERT into samplefoodlist (category,foodname) VALUES("양식","피자");
INSERT into samplefoodlist (category,foodname) VALUES("양식","햄버거");
INSERT into samplefoodlist (category,foodname) VALUES("양식","핫도그");
INSERT into samplefoodlist (category,foodname) VALUES("양식","치킨");
INSERT into samplefoodlist (category,foodname) VALUES("분식","김밥");
INSERT into samplefoodlist (category,foodname) VALUES("분식","떡볶이");
INSERT into samplefoodlist (category,foodname) VALUES("분식","어묵");
INSERT into samplefoodlist (category,foodname) VALUES("분식","순대");

INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","커피");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","에이드");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","아이스크림");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","도넛");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","버블티");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","빵");
INSERT into samplefoodlist (category,foodname) VALUES("카페/디저트","케이크");


INSERT into review (num,id,name,regist_day,rating,content,file_name,file_type,file_copied) VALUES
(1, 'program', '상명대', '2020-12-13 (10:01)', 1, '짜장 불었습니다\r\n1점이에요', 'jjajang.png', 'image/png', '2020_12_13_10_01_59.png'),
(2, 'server', '안세준', '2020-12-14 (10:56)', 4, '피자 4점 드립니다', 'pizza.jpg', 'image/jpeg', '2020_12_14_10_56_59.jpg'),
(3, 'php', '정승도', '2020-12-14 (11:54)', 5, '치킨 맛있습니다!!', 'chicken.jpg', 'image/jpeg', '2020_12_14_11_54_18.jpg');



