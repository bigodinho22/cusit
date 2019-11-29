use cusit;
create table usuario(
	idUsuario int not null auto_increment,
    email varchar(255) not null,
    senha varchar(255) not null,
    primary key(idUsuario)
)engine=innodb;
create table comentario(
	idComentario int not null auto_increment,
    conteudo varchar(255) not null,
    emailUsuario varchar(255),
    hora varchar(100) not null,
    primary key(idComentario)
)engine=innodb;
select * from comentario; 
drop table comentario;
insert into usuario values (1, "admin", "admin");