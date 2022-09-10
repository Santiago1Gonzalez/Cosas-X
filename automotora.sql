CREATE DATABASE automotora;
USE automotora;

CREATE TABLE vendedor(
    ci INT (9) PRIMARY KEY,
    nombre VARCHAR (25) not null,
    direccion VARCHAR (50) not null,
    pass VARCHAR (25) not null
)ENGINE=innoDB;

CREATE TABLE cliente (
    ci INT (9) PRIMARY KEY,
    nombre VARCHAR (25) not null,
    telefono VARCHAR (9) not null
)ENGINE=innoDB;

CREATE TABLE vehiculo (
    matricula VARCHAR (7),
    cicliente INT (9),
    PRIMARY KEY (matricula, cicliente),
    marcha VARCHAR (25) not null,
    año INT (4),
    color VARCHAR (25),
    fecha DATE,
    FOREIGN KEY (cicliente) REFERENCES Cliente (ci)
)ENGINE=innoDB;

CREATE TABLE vende (
    vendedorci INT (9),
    cicliente INT (9),
    matricula VARCHAR (7),
    PRIMARY KEY (vendedorci, cicliente, matricula),
    fecha DATE,
    monto INT (9),
    FOREIGN KEY (cicliente) REFERENCES cliente (ci),
    FOREIGN KEY (vendedorci) REFERENCES Vendedor (ci),
    FOREIGN KEY (matricula) REFERENCES vehiculo (matricula)
)ENGINE=innoDB;