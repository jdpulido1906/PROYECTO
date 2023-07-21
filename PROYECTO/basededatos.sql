create DATABASE santyfashion;
-- drop database santyfashion;
USE santyfashion;

CREATE TABLE Referencia (
  idReferencia INT NOT NULL PRIMARY KEY,
  nombre VARCHAR(60) NOT NULL,
  descripcion VARCHAR(60) NOT NULL,
  referencia VARCHAR(60) NOT NULL,
  imagen LONGBLOB NOT NULL
);

CREATE TABLE Prenda (
  idPrenda INT NOT NULL PRIMARY KEY,
  -- idVenta INT NOT NULL,
  idReferencia INT NOT NULL,
  talla VARCHAR(60) NOT NULL,
  fecha DATE NOT NULL,
  estado VARCHAR(60) NOT NULL,
  color VARCHAR(60) NOT NULL,
  precio int NOT NULL
);

CREATE TABLE Venta (
  idVenta INT NOT NULL PRIMARY KEY,
  idUsuarios  int not null,
  idPrenda INT NOT NULL,
  codigo VARCHAR(60) NOT NULL,
  estado VARCHAR(60) NOT NULl
);

create table Usuarios (
idUsuarios  int not null primary key,
nombre varchar(60) not null,
apellido varchar(60) not null,
email varchar(60) not null,
direccion varchar(60) not null,
contrasena varchar(60) not null,
rolusuario int not null);

SELECT * FROM Venta;


ALTER TABLE Prenda
ADD FOREIGN KEY (idReferencia) REFERENCES Referencia(idReferencia);

-- ALTER TABLE Prenda
-- ADD FOREIGN KEY (idVenta) REFERENCES Venta(idVenta);

ALTER TABLE Venta
ADD FOREIGN KEY (idUsuarios) REFERENCES Usuarios(idUsuarios);


select * from Prenda;
select * from Referencia;

