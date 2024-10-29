create database Character_Forge
use Character_Forge

create table users(
id int primary key Auto_increment,
username varchar(30),
password varchar(255)
);

delimiter //
create procedure adduser( _username varchar(30), _password varchar(255))
begin
insert into users(username,password) values(_username,_password);
end //
delimiter ;