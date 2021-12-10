
create database if not exist agendadb;

create table contactos{
'id' int (11) NOT NULL AUTO_INNCREMENT,
'nombreContacto' varchar(20) NOT NULL,
'apellido' varchar (15) NOT NULL,
'telefonoContacto (20) NOT NULL,
'hora_creacion' datetime,
'hora_actulización datetime,
primary key ('id')
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

}
