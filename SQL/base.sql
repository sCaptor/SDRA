-- --CREATE DATABASE tecnica2db;
-- CREATE USER 'admin'@'server' IDENTIFIED BY 'contraseña';
-- GRANT ALL PRIVILEGES ON tecnica2db.* to 'admin'@'localhost';

CREATE TABLE roles (
id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(50) NOT NULL
);

CREATE TABLE tareas (
id INT PRIMARY KEY AUTO_INCREMENT,
descripcion VARCHAR(100) NOT NULL
);

CREATE TABLE usuarios (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
id_rol INT,
username VARCHAR(50) NOT NULL,
contrasena VARCHAR(255) NOT NULL,
fec_registro DATE,
fec_vencimiento DATE,
FOREIGN KEY (id_rol) REFERENCES roles(id)
);

-- -- UPDATE usuarios SET contrasena = 'nuevo_hash_de_contrasena',
-- --     fecha_ultimo_cambio = CURDATE(),
-- --     fecha_vencimiento = DATE_ADD(CURDATE(), INTERVAL 90 DAY)
-- -- WHERE id = 1;

CREATE TABLE bitacora (
id INT PRIMARY KEY AUTO_INCREMENT,
id_usuario INT NOT NULL,
id_tarea INT NOT NULL,
descripcion VARCHAR(100) NOT NULL,
fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
FOREIGN KEY (id_tarea) REFERENCES tareas(id)
); 

CREATE TABLE docente (
id INT PRIMARY KEY AUTO_INCREMENT,
dni VARCHAR(8) NOT NULL,
nombre VARCHAR(50) NOT NULL,
apellido VARCHAR(50 ) NOT NULL
);

CREATE TABLE cursos (
id INT PRIMARY KEY AUTO_INCREMENT,
cod_curso VARCHAR(10) NOT NULL,
nombre_curso VARCHAR(10) NOT NULL,
id_docente INT NOT NULL,
FOREIGN KEY (id_docente) REFERENCES docente(id)
);

CREATE TABLE alumno (
id INT PRIMARY KEY AUTO_INCREMENT,
dni VARCHAR(8) NOT NULL,
legajo INT NOT NULL,
nombre VARCHAR(50) NOT NULL,
apellido VARCHAR(50) NOT NULL,
fec_nac VARCHAR(50) NOT NULL,
fec_ingreso VARCHAR(50) NOT NULL,
curso INT NOT NULL,
carrera VARCHAR(30) NOT NULL,
FOREIGN KEY (curso) REFERENCES cursos(id)
);

CREATE TABLE responsable (
id INT PRIMARY KEY AUTO_INCREMENT,
dni VARCHAR(8) NOT NULL,
id_alumno INT NULL,
nombre VARCHAR(50) NOT NULL,
apellido VARCHAR(50) NOT NULL,
FOREIGN KEY (id_alumno) REFERENCES alumno(id)
);

CREATE TABLE retiros (
id INT PRIMARY KEY AUTO_INCREMENT,
id_responsable INT,
nameresponsable VARCHAR(100),
id_alumno INT,
namealumno VARCHAR(100),
id_docente INT,
namedocente VARCHAR(100),
horario TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
FOREIGN KEY (id_responsable) REFERENCES responsable(id),
FOREIGN KEY (id_alumno) REFERENCES alumno(id),
FOREIGN KEY (id_docente) REFERENCES docente(id)
);