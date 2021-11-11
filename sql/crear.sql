CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id      int(255) auto_increment not null,
nombre  varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
categoria_id    int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE NO ACTION
)ENGINE=InnoDb;








/*  BASE DE  DATOS MJ SOLUCIONES */




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










CREATE TABLE videos(

  id          int(255) auto_increment not null,
  titulo     varchar(100) not null,
  descripcion   varchar(100) not null,
  ruta       varchar(255) not null,
  categoria_id int(255) not null,
  CONSTRAINT pk_videos PRIMARY KEY (id),

  CONSTRAINT fk_videos_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id),
 
  CONSTRAINT uq_titulo UNIQUE(titulo)
 
  )  ENGINE=InnoDB DEFAULT CHARSET=utf8;





select * from `usuarios`;




CREATE TABLE categorias(

  id int(255) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  CONSTRAINT pk_categorias PRIMARY KEY (id),

  CONSTRAINT up_nombre UNIQUE (nombre)

  )  ENGINE=InnoDB DEFAULT CHARSET=utf8;





  