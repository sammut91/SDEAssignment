create database Assignmentdb1;

go
use Assignmentdb1

create table orders(
firstname varchar(50) not null primary key,
lastname varchar(50) not null,
noOftyres int not null);

go

insert into orders(firstname, lastname, noOfTyres)
values('john','smith', 2);

go