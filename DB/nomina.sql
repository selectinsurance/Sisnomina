DROP DATABASE IF EXISTS nomina;

CREATE DATABASE IF NOT EXISTS nomina;

 USE nomina;
 
CREATE TABLE empleados(
    IdEmpleado INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(55) NOT NULL,
    apellido VARCHAR(55) NOT NULL,
    TipoDocumento VARCHAR(55) NOT NULL,
    documento VARCHAR(70) NOT NULL,
    telefono VARCHAR(55) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    fechaNacimiento DATE NOT NULL,
    correo VARCHAR(100) NOT NULL,
    sueldo INT(7) NOT NULL,
    AuxilioTransporte INT(10) NOT NULL,
    NombreEmpresa VARCHAR (70) NOT NULL,
    NIT VARCHAR(70) NOT NULL
);

CREATE TABLE usuario(
    user VARCHAR(25) PRIMARY KEY,
    pass VARCHAR(100),
    IdEmpleado INT NOT NULL,
    INDEX(IdEmpleado),
    FOREIGN KEY usuario(IdEmpleado) REFERENCES empleados(IdEmpleado)
);

CREATE TABLE Horas(
    idColilla INT PRIMARY KEY AUTO_INCREMENT,
    HordinariaDiurna INT(3) NOT NULL,
    HordinariaNocturna INT(3) NOT NULL,
    HExtraOrdinariaDiurna INT(3) NOT NULL,
    HExtraOrdinariaNocturna INT(3) NOT NULL,
    HfestivaDiurna INT(3) NOT NULL,
    HfestivaNocturna INT(3) NOT NULL,
    HExtraFestivaDiurna INT(3) NOT NULL,
    HExtraFestivaNocturna INT(3) NOT NULL,
    IdEmpleado INT NOT NULL,
    INDEX(IdEmpleado),
    FOREIGN KEY Horas(IdEmpleado) REFERENCES empleados(IdEmpleado)
);

CREATE TABLE Valores(
    idValor INT PRIMARY KEY AUTO_INCREMENT,
    VHordinariaDiurna FLOAT(11) NOT NULL,
    VHordinariaNocturna FLOAT(11) NOT NULL,
    VHExtraOrdinariaDiurna FLOAT(11) NOT NULL,
    VHExtraOrdinariaNocturna FLOAT(11) NOT NULL,
    VHfestivaDiurna FLOAT(11) NOT NULL,
    VHfestivaNocturna FLOAT(11) NOT NULL,
    VHExtraFestivaDiurna FLOAT(11) NOT NULL,
    VHExtraFestivaNocturna FLOAT(11) NOT NULL,
    idColilla INT NOT NULL,
    INDEX(idColilla),
    FOREIGN KEY Valores(idColilla) REFERENCES Horas(idColilla)
);

CREATE TABLE Totales(
    idTotal INT PRIMARY KEY AUTO_INCREMENT,
    Bruto FLOAT(11) NOT NULL,
    Deducciones  FLOAT(11) NOT NULL,
    Neto FLOAT(11) NOT NULL
);



INSERT INTO empleados(
    nombre,
    apellido,
    TipoDocumento,
    documento,
    telefono,
    direccion,
    fechaNacimiento,
    correo,
    sueldo,
    AuxilioTransporte,
    NombreEmpresa,
    NIT
) VALUES(
    'Cristian',
    'Aguirre Cataño',
    'cc',
    '1035391050',
    '3166857000',
    'CARRERA 33 # 47 - 35',
    '1994-07-16',
    'dextter1913@gmail.com',
    1500000,
    106454,
    'SELECT INSURANCE',
    '888888888'
    );



INSERT INTO usuario(
    user,
    pass,
    IdEmpleado
) VALUES(
    'admin',
    '123', 
    1
);