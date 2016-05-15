create database posts;

use posts;

grant all on posts. * to testuser@localhost identified  by '9999';

create table users(
id int primary key auto_increment,
name varchar(32),
comment varchar(32),
created_at varchar(32)
);