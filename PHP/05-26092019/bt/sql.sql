create database blog ;
create table blog.posts(
id_post int not null auto_increment primary key,
title varchar(255),
description varchar(255),
content text,
id_categorie int ,
foreign key (id_categorie) references blog.categories(id_categorie)

);
create table blog.categories(
id_categorie int not null auto_increment primary key,
name_cata varchar(255)
);
insert into blog.categories values
(1,'phap luat'),
(2,'khoa hoc va cong nghe'),
(3,'kinh te xa hoi'),
(4,'doi song'),
(5,'xe'),
(6,'chinh tri'),
(7,'the gioi'),
(8,'suc khoe'),
(9,'giao duc'),
(10,'chinh tri');

insert into blog.posts values
(1,'dam chem cuop hiep','thieu nu 15 tuoi bi hiep','abcxyz gau gau hihihhahahah a du`',1),
(2,'o nhiem moi truong ','dat ban','abcxyz gau gau hihihhahahah a du`',8),
(3,'xe audi ','audi ra mat sp ','abcxyz gau gau hihihhahahah a du`',5),
(4,'sinh nhat bac ho','15-9','abcxyz gau gau hihihhahahah a du`',10);

SELECT * FROM blog.posts as a inner join blog.categories as b  on a.id_categorie =b.id_categorie;








