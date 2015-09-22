create database mydb

select*from myguest
TRUNCATE TABLE myguest
delete from myguest where id=3
create table myguest_backup like mydb.myguest
select*from myguest_backup
drop table myguest_backup
drop table myguest

select firstname,email from myguest

ALTER TABLE myguest MODIFY COLUMN reg_date NOT NULL DEFAULT CURRENT_TIMESTAMP 

alter table myguest drop column reg_date

alter table myguest add column reg_date timestamp not null default current_timestamp

select distinct email from myguest

update myguest set email='johndoe@example.com' where id=1

update myguest set id=3 where email='john@example.com'

delete from myguest where id=4

CREATE TABLE login
(
UserNameID int(9) NOT NULL auto_increment,
username VARCHAR(40) NOT NULL,
pass VARCHAR(40) NOT NULL,
PRIMARY KEY(UserNameID)
);

drop table UserName

insert into login(username,pass)values('vrushal',123)
select*from login
create database mydb

insert into login(username,pass)values('vrushal1',1234)
alter table login add column signup_date timestamp not null default current_timestamp

CREATE TABLE student
(
student_id int(9) NOT NULL auto_increment,
student_name varchar(25) not null,
student_email varchar(25) not null,
student_contact numeric not null,
student_address varchar(255) not null,
primary key(student_id)
)

select*from student
alter table student add column record_time timestamp not null default current_timestamp
alter table student modify column student_contact numeric not null

delete from student where student_contact=2147483647