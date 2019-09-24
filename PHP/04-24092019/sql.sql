create table users.thongtin(
id int auto_increment primary key,
email varchar(255),
password varchar(255)
);

insert into users.thongtin(id,email,password)
values
(1,'sonha@gmail.com','123'),
(2,'vantinh@gmail.com','234'),
(3,'duc@gmail.com','323'),
(4,'kahnh@gmail.com','453'),
(5,'tinh@gmail.com','234');

select * from users.thongtin limit 3;

select *from users.thongtin where id < 3;

