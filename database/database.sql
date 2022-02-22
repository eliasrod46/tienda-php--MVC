CREATE DATABASE tienda_master;
USE tienda_master;
#------------------------------------------------------

CREATE TABLE usuarios (
  id        int(255) auto_increment NOT NULL,
  nombre    varchar(100) NOT NULL,
  apellidos varchar(255),
  email     varchar(255) NOT NULL,
  password  varchar(255) NOT NULL,
  rol       varchar(20),
  imagen    varchar(255),

  constraint pk_usuarios PRIMARY KEY(id),
  constraint uq_email UNIQUE (email)
)ENGINE=InnoDb;


INSERT INTO usuarios VALUES(NULL, 'admin', 'admin', 'admin@admin', 1234, 'admin', NULL);
#------------------------------------------------------

CREATE TABLE categorias(
  id        int(255) auto_increment NOT NULL,
  nombre    varchar(100) NOT NULL,
  
  constraint pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;


INSERT INTO categorias VALUES(NULL, 'Manga corta');
INSERT INTO categorias VALUES(NULL, 'Tirantes');
INSERT INTO categorias VALUES(NULL, 'Manga larga');
INSERT INTO categorias VALUES(NULL, 'Sudaderas');
#------------------------------------------------------

CREATE TABLE productos (
  id            int(255) auto_increment NOT NULL,
  categoria_id  int(255) NOT NULL,
  nombre        varchar(100) NOT NULL,
  descrpcion    text,
  precio        float(100, 2) NOT NULL,
  stock         int(255) NOT NULL,
  oferta        varchar(2),
  fecha         date NOT NULL,
  imagen        varchar(255) NOT NULL,

  constraint pk_productos PRIMARY KEY(id),
  constraint fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)

)ENGINE=InnoDb;
#------------------------------------------------------

CREATE TABLE pedidos(
  id          int(255) auto_increment NOT NULL,
  usuario_id  int(255) NOT NULL,
  provincia   varchar(100) NOT NULL,
  localidad   varchar(100) NOT NULL,
  direccion   varchar(255) NOT NULL,
  coste       float(200,2) NOT NULL,
  estado      varchar(20) NOT NULL,
  fecha       date,
  hora        time,

  CONSTRAINT pk_pedidos PRIMARY KEY(id),
  CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)

)ENGINE=InnoDb;
#------------------------------------------------------

CREATE TABLE lineas_pedidos(
  id          int(255) auto_increment NOT NULL,
  pedido_id   int(255) NOT NULL,
  producto_id  int(255) NOT NULL,
  

  CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
  CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
  CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)

)ENGINE=InnoDb;