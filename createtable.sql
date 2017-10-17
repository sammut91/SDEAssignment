-- create database localdb;

use localdb

create table orders(
id varchar(100) not null primary key,
firstname varchar(50) not null,
lastname varchar(50) not null,
books int not null);

go

insert into orders(firstname, lastname, books)
values('john','smith', 2);

go

alter table orders add amount numeric null;

go

update orders
set amount=books*110;