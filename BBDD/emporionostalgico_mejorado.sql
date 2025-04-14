CREATE DATABASE IF NOT EXISTS emporionostalgico;
USE emporionostalgico;

CREATE TABLE usuario (
  ID_Usuario INT(11) NOT NULL AUTO_INCREMENT,
  Nombre_Usuario VARCHAR(255) NOT NULL,
  Correo_Usuario VARCHAR(50) NOT NULL,
  Contrasenia_Usuario VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID_Usuario),
  UNIQUE (Correo_Usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE producto (
  ID_Producto INT(11) NOT NULL AUTO_INCREMENT,
  Nombre_Producto VARCHAR(255) NOT NULL,
  Precio INT(11) NOT NULL,
  Cantidad_Producto INT(11) NOT NULL,
  PRIMARY KEY (ID_Producto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE cesta (
  ID_Cesta INT(11) NOT NULL AUTO_INCREMENT,
  ID_Producto INT(11) NOT NULL,
  ID_Usuario INT(11) NOT NULL,
  Cantidad_Cesta INT(11) NOT NULL,
  PRIMARY KEY (ID_Cesta),
  FOREIGN KEY (ID_Producto) REFERENCES producto(ID_Producto) ON DELETE CASCADE,
  FOREIGN KEY (ID_Usuario) REFERENCES usuario(ID_Usuario) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE favoritos (
  ID_Favorito INT(11) NOT NULL AUTO_INCREMENT,
  ID_Usuario INT(11) NOT NULL,
  ID_Producto INT(11) NOT NULL,
  Cantidad_Favoritos INT(11) NOT NULL,
  PRIMARY KEY (ID_Favorito),
  FOREIGN KEY (ID_Usuario) REFERENCES usuario(ID_Usuario) ON DELETE CASCADE,
  FOREIGN KEY (ID_Producto) REFERENCES producto(ID_Producto) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE preferencias (
  ID_Preferencia INT(11) NOT NULL AUTO_INCREMENT,
  Nombre_Preferencia VARCHAR(255) NOT NULL,
  Epoca_Preferencia DATE,
  Cantidad_Preferencia INT(11),
  PRIMARY KEY (ID_Preferencia)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
