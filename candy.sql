create database iniciosecion;
use iniciosecion;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    e_mail VARCHAR(50),
    password int(5));
    insert into usuarios(id,e_mail,password) value (1,"fatimajatzyri1328@gmail.com",12345);
select * from usuarios;

use iniciosecion;
create table registros( id int,
e_mail varchar(50), password int (50));
 insert into registros(id,e_mail) value (1,"Alexasuga10@gmail.com", "12453");
select * from registros;