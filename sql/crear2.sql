
/* crear tabla categoria productos*/

CREATE TABLE productos(
id          int(255) auto_increment not null,
categoria  varchar(50) not null,
nombre      varchar(100) not null,

marca   varchar(100) ,
modelo       varchar(100) ,
detalles   text  ,
precio   decimal(5,2) not null,
CONSTRAINT pk_productos PRIMARY KEY(id)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;





/*  tabla de usuarios */




CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
tel         int(13),
password    varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


