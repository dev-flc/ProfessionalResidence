use residence;

# Tutores 
INSERT INTO `residence`.`tutores` (`id`, `TUT_nombre`, `TUT_apellido_p`, `TUT_apellido_m`, `TUT_correo`, `TUT_tel`, `TUT_cel`)
 VALUES 
 ('1', 'mauricio', 'cordoba', 'portillo', 'mauricio@gmail.com', '7474803030', '7471234555'),
 ('2', 'maria', 'nava', 'nava', 'maria@gmail.com', '7474803030', '7471234555'),
 ('3', 'cristian', 'rios', 'marim', 'mauricio@gmail.com', '7474803030', '7471234555'),
 ('4', 'yadira', 'lopez', 'portillo', 'mauricio@gmail.com', '7474803030', '7471234555'),
 ('5', 'mario', 'loaeza', 'carrillo', 'mauricio@gmail.com', '7474803030', '7471234555');

# Directores
INSERT INTO `residence`.`directores` (`id`, `DI_nombre`, `DI_apellido_p`, `DI_apellido_m`, `DI_correo`) 
VALUES 
('1', 'gerardo', 'gonzalez', 'reyes', 'gerardo@gmail.com'),
('2', 'miriam', 'diaz', 'flore', 'miriam@gmail.com'),
('3', 'gustavo', 'robles', 'reyes', 'gustavo@gmail.com'),
('4', 'ramon', 'nava', 'hernandez', 'ramon@gmail.com'),
('5', 'nancy', 'gonzalez', 'reyes', 'nancy@gmail.com');

# Diarios
INSERT INTO `residence`.`diarios` (`id`, `DIA_nombre`, `DIA_descripcion`) 
VALUES 
('1', 'diario1', 'mi diario'),
('2', 'diario1', 'mi diario'),
('3', 'diario1', 'mi diario'),
('4', 'diario1', 'mi diario'),
('5', 'diario1', 'mi diario');

# Direccion

INSERT INTO `residence`.`direcciones` (`id`, `DIR_calle`, `DIR_numero`, `DIR_estado`, `DIR_ciudad`, `DIR_colonia`, `DIR_cp`) 
VALUES 
('1', 'palo blanco', '23', 'guerrero', 'chilpancingo', 'barrio de la purisima', '39101'),
('2', '5 de mayo', '24', 'guerrero', 'chilpancingo', 'barrio de la purisima', '39101'),
('3', 'idalgo', '25', 'guerrero', 'chilpancingo', 'barrio de la purisima', '39101'),
('4', 'acalco', '26', 'guerrero', 'chilpancingo', 'barrio de la purisima', '39101'),
('5', 'ruiz gomez', '27', 'guerrero', 'chilpancingo', 'barrio de la purisima', '39101');
 
# Estatus
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) 
VALUES 
 ('1', '1'),
 ('2', '2'),
 ('3', '3'),
 ('4', '4'),
 ('5', '5');

# Escuelas
INSERT INTO `residence`.`escuelas` (`id`, `ESC_nombre`, `ESC_clave`, `DIR_id`, `DI_id`) 
VALUES 
('1', 'itch', '123456', '1', '1'),
('2', 'itch', '123456', '2', '2'),
('3', 'itch', '123456', '3', '3'),
('4', 'itch', '123456', '4', '4'),
('5', 'itch', '123456', '5', '5');

# Notas
INSERT INTO `residence`.`notas` (`id`, `NOT_nombre`, `NOT_descripcion`, `NOT_archivo`, `DIA_id`) 
VALUES 
('1', 'mi nota', 'nota diario 1', 'no hay archivo', '1'),
('2', 'mi nota', 'nota diario 2', 'no hay archivo', '2'),
('3', 'mi nota', 'nota diario 3', 'no hay archivo', '3'),
('4', 'mi nota', 'nota diario 4', 'no hay archivo', '4'),
('5', 'mi nota', 'nota diario 5', 'no hay archivo', '5');

# anteproyectos
INSERT INTO `residence`.`anteproyectos` (`id`, `ANT_nombre`, `ANT_descripcion`, `EST_id`) 
VALUES 
('1', 'anteproyecto 1', 'este es mi anteproyecto', '1'),
('2', 'anteproyecto 2', 'este es mi anteproyecto', '2'),
('3', 'anteproyecto 3', 'este es mi anteproyecto', '3'),
('4', 'anteproyecto 4', 'este es mi anteproyecto', '4'),
('5', 'anteproyecto 5', 'este es mi anteproyecto', '5');

#esquemas
INSERT INTO `residence`.`esquemas` (`id`, `ESQ_nombre`, `ESQ_descripcion`, `EST_id`) 
VALUES 
('1', 'esquema 1', 'este es mi esquema', '1'),
('2', 'esquema 2', 'este es mi esquema', '2'),
('3', 'esquema 3', 'este es mi esquema', '3'),
('4', 'esquema 4', 'este es mi esquema', '4'),
('5', 'esquema 5', 'este es mi esquema', '5');

#Anteproyecto
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_archivo`, `ANT_id`)
 VALUES 
 ('1', 'anteproyecto 1', 'descripcion del anteproyecto', '2016-10-10', 'no hay archivo', '1'),
 ('2', 'anteproyecto 2', 'descripcion del anteproyecto', '2016-10-10', 'no hay archivo', '2'),
 ('3', 'anteproyecto 3', 'descripcion del anteproyecto', '2016-10-10', 'no hay archivo', '3'),
 ('4', 'anteproyecto 4', 'descripcion del anteproyecto', '2016-10-10', 'no hay archivo', '4'),
 ('5', 'anteproyecto 5', 'descripcion del anteproyecto', '2016-10-10', 'no hay archivo', '5');

#seguimientos
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_archivo`, `ESQ_id`) 
VALUES 
('1', 'seguimiento 1', 'descripcion del seguimiento', '2016-10-11', 'no hay archovo', '1'),
('2', 'seguimiento 2', 'descripcion del seguimiento', '2016-10-11', 'no hay archovo', '2'),
('3', 'seguimiento 3', 'descripcion del seguimiento', '2016-10-11', 'no hay archovo', '3'),
('4', 'seguimiento 4', 'descripcion del seguimiento', '2016-10-11', 'no hay archovo', '4'),
('5', 'seguimiento 5', 'descripcion del seguimiento', '2016-10-11', 'no hay archovo', '5');

#comenntariodocumento
INSERT INTO `residence`.`comentarios_documentos` (`id`, `CODO_usuario`, `CODO_fecha`, `CODO_hora`, `CODO_comentario`, `DOC_id`)
 VALUES 
 ('1', 'fer', '2016', '21:00', 'comentario', '1'),
 ('2', 'fer', '2016', '21:00', 'comentario', '2'),
 ('3', 'fer', '2016', '21:00', 'comentario', '3'),
 ('4', 'fer', '2016', '21:00', 'comentario', '4'),
 ('5', 'fer', '2016', '21:00', 'comentario', '5');

#comentario seguimiento
INSERT INTO `residence`.`comentarios_seguimientos` (`id`, `COSE_usuario`, `COSE_fecha`, `COSE_hora`, `COSE_comentario`, `SEG_id`) 
VALUES 
('1', 'fer', '2016-10-09', '10:00', 'comentario', '1'),
('2', 'fer', '2016-10-09', '10:00', 'comentario', '2'),
('3', 'fer', '2016-10-09', '10:00', 'comentario', '3'),
('4', 'fer', '2016-10-09', '10:00', 'comentario', '4'),
('5', 'fer', '2016-10-09', '10:00', 'comentario', '5');

#asesores
INSERT INTO `residence`.`asesores` (`id`, `ASE_nombre`, `ASE_apellido_p`, `ASE_apellido_m`, `ASE_tel`, `ASE_cel`, `DIR_id`, `USU_id`)
 VALUES 
 ('1', 'juan', 'lucena', 'gomez', '4899387', '7471234543', '1', '1'),
 ('2', 'juan', 'lucena', 'gomez', '4899387', '7471234543', '2', '2'),
 ('3', 'juan', 'lucena', 'gomez', '4899387', '7471234543', '3', '3'),
 ('4', 'juan', 'lucena', 'gomez', '4899387', '7471234543', '4', '4'),
 ('5', 'juan', 'lucena', 'gomez', '4899387', '7471234543', '5', '5');

#subdirectores
INSERT INTO `residence`.`subdirectores` (`id`, `SUB_nombre`, `SUB_apellido_p`, `SUB_apellido_m`, `SUB_tel`, `SUB_cel`, `DIR_id`, `USU_id`) 
VALUES 
('1', 'subdirector 1', 'gomez ', 'lopez', '4833923', '7471233299', '1', '6'),
('2', 'subdirector 2', 'gomez ', 'lopez', '4833923', '7471233299', '2', '7'),
('3', 'subdirector 3', 'gomez ', 'lopez', '4833923', '7471233299', '3', '8'),
('4', 'subdirector 4', 'gomez ', 'lopez', '4833923', '7471233299', '4', '9'),
('5', 'subdirector 5', 'gomez ', 'lopez', '4833923', '7471233299', '5', '10');

#presidentes
INSERT INTO `residence`.`presidentes` (`id`, `PRE_nombre`, `PRE_apellido_p`, `PRE_apellido_m`, `PRE_tel`, `PRE_cel`, `DIR_id`, `USU_id`) 
VALUES 
('1', 'presidente 1', 'de la cruz', 'avila', '5656778', '7471454344', '1', '21'),
('2', 'presidente 2', 'de la cruz', 'avila', '5656778', '7472454344', '2', '22'),
('3', 'presidente 3', 'de la cruz', 'avila', '5656778', '7473454344', '3', '23'),
('4', 'presidente 4', 'de la cruz', 'avila', '5656778', '7474454344', '4', '24'),
('5', 'presidente 5', 'de la cruz', 'avila', '5656778', '7475454344', '5', '25');

#secretarios
INSERT INTO `residence`.`secretarios` (`id`, `SEC_nombre`, `SEC_apellido_p`, `SEC_apellido_m`, `SEC_tel`, `SEC_cel`, `DIR_id`, `USU_id`)
VALUES 
('1', 'secretario 1', 'gomez', 'reyes', '4802345', '7471323444', '1', '16'),
('2', 'secretario 2', 'gomez', 'reyes', '4802345', '7472323444', '2', '17'),
('3', 'secretario 3', 'gomez', 'reyes', '4802345', '7473323444', '3', '18'),
('4', 'secretario 4', 'gomez', 'reyes', '4802345', '7474323444', '4', '19'),
('5', 'secretario 5', 'gomez', 'reyes', '4802345', '7475323444', '5', '10');

#acta
INSERT INTO `residence`.`actas` (`id`, `ACT_nombre`, `ACT_descripcion`, `ACT_fecha`, `SEC_id`) 
VALUES 
('1', 'acta 1', 'descripcion de la acta', '2016-09-10', '1'),
('2', 'acta 2', 'descripcion de la acta', '2026-09-20', '2'),
('3', 'acta 3', 'descripcion de la acta', '2036-09-30', '3'),
('4', 'acta 4', 'descripcion de la acta', '2046-09-40', '4'),
('5', 'acta 5', 'descripcion de la acta', '2056-09-50', '5');


#alumnos
INSERT INTO `residence`.`alumnos` (`id`, `ALU_nombre`, `ALU_apellido_p`, `ALU_apellido_m`, `ALU_sexo`, `ALU_tel`, `ALU_cel`, `ALU_matricula`, `ALU_semestre`, `EST_id`, `USU_id`, `TUT_id`, `DIR_id`, `ESC_id`, `ANT_id`, `ESQ_id`, `DIA_id`) 
VALUES 
('1', 'alumno 1', 'flores ', 'reyes', 'h', '4803188', '74721', '12345678', '7', '1', '1', '1', '1', '1', '1', '1', '1'),
('2', 'alumno 2', 'flores ', 'reyes', 'h', '4803288', '74722', '22345678', '7', '2', '2', '2', '2', '2', '2', '2', '2'),
('3', 'alumno 3', 'flores ', 'reyes', 'h', '4803388', '74723', '32345678', '7', '3', '3', '3', '3', '3', '3', '3', '3'),
('4', 'alumno 4', 'flores ', 'reyes', 'h', '4803488', '74724', '42345678', '7', '4', '4', '4', '4', '4', '4', '4', '4'),
('5', 'alumno 5', 'flores ', 'reyes', 'h', '4803588', '74725', '52345678', '7', '5', '5', '5', '5', '5', '5', '5', '5');

#relacion
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`)
 VALUES 
 ('1', '1', '1'),
 ('2', '2', '2'),
 ('3', '3', '3'),
 ('4', '4', '4'),
 ('5', '5', '5');


 UPDATE `residence`.`direcciones` SET `DIR_estado`='Baja California Sur' WHERE `id`='1';
UPDATE `residence`.`direcciones` SET `DIR_estado`='Estado de México' WHERE `id`='2';
UPDATE `residence`.`direcciones` SET `DIR_estado`='Guerrero' WHERE `id`='3';
UPDATE `residence`.`direcciones` SET `DIR_estado`='Nuevo Leon' WHERE `id`='4';
UPDATE `residence`.`direcciones` SET `DIR_estado`='Quintana Roo' WHERE `id`='5';

INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('6', '1', '5');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('7', '2', '4');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('8', '3', '3');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('9', '4', '2');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('10', '5', '1');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('11', '1', '2');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('12', '2', '3');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('13', '3', '4');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('14', '4', '5');
INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`) VALUES ('15', '5', '1');


UPDATE `residence`.`asesores` SET `USU_id`='11' WHERE `id`='1';
UPDATE `residence`.`asesores` SET `USU_id`='12' WHERE `id`='2';
UPDATE `residence`.`asesores` SET `USU_id`='13' WHERE `id`='3';
UPDATE `residence`.`asesores` SET `USU_id`='14' WHERE `id`='4';
UPDATE `residence`.`asesores` SET `USU_id`='15' WHERE `id`='5';
