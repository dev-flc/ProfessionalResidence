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
 ('5', '5'),
 ('6', '6'),
 ('7', '7'),
 ('8', '8'),
 ('9', '9'),
 ('10', '10');

 # Escuelas
INSERT INTO `residence`.`escuelas` (`id`, `ESC_nombre`, `ESC_clave`, `DIR_id`, `DI_id`) 
VALUES 
('1', 'escuela normal urbane federal', '123456', '1', '1'),
('2', 'escuela secundaria tecnica N° 33', '123456', '2', '2'),
('3', 'uagro', '123456', '3', '3'),
('4', 'instituto tecnologico de chilpancingo', '123456', '4', '4'),
('5', 'colegio mexico', '123456', '5', '5');

#Anteproyecto
INSERT INTO `residence`.`anteproyectos` (`id`, `ANT_nombre`, `ANT_descripcion`, `EST_id`) 
VALUES 
('1', 'control de calidad para los estudiantes', 'el control de calidad es uno de los principales problemas en las escuelas', '1'),
('2', 'manejo de tablas', 'el 50% de los estudiantes tiene problemas con las tablas', '1'),
('3', 'control de calidad para los estudiantes', 'descripcion', '1'),
('4', 'control de calidad para los estudiantes', 'el control de calidad es uno de los principales problemas en las escuelas', '1'),
('5', 'control de calidad para los estudiantes', 'el control de calidad es uno de los principales problemas en las escuelas', '1');

#esquemas
INSERT INTO `residence`.`esquemas` (`id`, `ESQ_nombre`, `ESQ_descripcion`, `EST_id`) 
VALUES 
('1', 'esquema 1', 'este es mi esquema', '1'),
('2', 'esquema 2', 'este es mi esquema', '2'),
('3', 'esquema 3', 'este es mi esquema', '3'),
('4', 'esquema 4', 'este es mi esquema', '4'),
('5', 'esquema 5', 'este es mi esquema', '5');

#documentos
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`)
 VALUES 
 ('1', 'anteproyecto 1', 'descripcion del anteproyecto', '2016-03-19', '201-03-19',' 08:00:00', 'no hay archivo', '1', '9'),
 ('2', 'anteproyecto 2', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19',' 08:00:00', 'no hay archivo', '2', '9'),
 ('3', 'anteproyecto 3', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19',' 08:00:00', 'no hay archivo', '3', '9'),
 ('4', 'anteproyecto 4', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19',' 08:00:00', 'no hay archivo', '4', '9'),
 ('5', 'anteproyecto 5', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19 ','08:00:00', 'no hay archivo', '5', '9');


 #seguimientos
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`,`EST_id`) 
VALUES 

('1', 'seguimiento', 'descripcion del seguimiento', '2016-03-19','2016-03-19',' 08:00:00', 'no hay archovo', '1','9'),
('2', 'seguimiento', 'descripcion del seguimiento', '2016-03-19','2016-03-19',' 08:00:00', 'no hay archovo', '2','9'),
('3', 'seguimiento', 'descripcion del seguimiento', '2016-03-19','2016-03-19',' 08:00:00', 'no hay archovo', '3','9'),
('4', 'seguimiento', 'descripcion del seguimiento', '2016-03-19','2016-03-19 ','08:00:00', 'no hay archovo', '4','9'),
('5', 'seguimiento', 'descripcion del seguimiento', '2016-03-19','2016-03-19',' 08:00:00', 'no hay archovo', '5','9');

#comentariodocumentos
INSERT INTO `residence`.`comentarios_documentos` (`id`, `CODO_usuario`, `CODO_fecha`, `CODO_comentario`, `DOC_id`)
 VALUES 
 ('1', '1', '2016-03-19 08:00:00', 'soy el comentario', '1'),
 ('2', '2', '2016-03-19 08:00:00', 'soy el comentario', '2'),
 ('3', '3', '2016-03-19 08:00:00', 'soy el comentario', '3'),
 ('4', '4', '2016-03-19 08:00:00', 'soy el comentario', '4'),
 ('5', '5', '2016-03-19 08:00:00', 'soy el comentario', '5');

#comentarioseguimientos
INSERT INTO `residence`.`comentarios_seguimientos` (`id`, `COSE_usuario`, `COSE_fecha`, `COSE_comentario`, `SEG_id`)
 VALUES 
 ('1', '1', '2014-01-19 18:00:00', 'comentario', '1'),
 ('2', '2', '2014-02-19 18:00:00', 'comentario', '2'),
 ('3', '3', '2014-03-19 18:00:00', 'comentario', '3'),
 ('4', '4', '2014-03-19 18:00:00', 'comentario', '4'),
 ('5', '5', '2014-03-19 18:00:00', 'comentario', '5');

#asesores
INSERT INTO `residence`.`asesores` (`id`, `ASE_nombre`, `ASE_apellido_p`, `ASE_apellido_m`, `ASE_tel`, `ASE_cel`, `DIR_id`, `USU_id`)
 VALUES 
 ('1', 'armando', 'lucena', 'gomez', '4899387', '7471234543', '1', '11'),
 ('2', 'diego', 'gomez', 'locia', '4899387', '7471234543', '2', '12'),
 ('3', 'elena', 'reyes', 'perez', '4899387', '7471234543', '3', '13'),
 ('4', 'mariam', 'mendoza', 'gomez', '4899387', '7471234543', '4', '14'),
 ('5', 'luz maria', 'rosas', 'reyes', '4899387', '7471234543', '5', '15');

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

#actas
INSERT INTO `residence`.`actas` (`id`, `ACT_nombre`, `ACT_descripcion`, `ACT_fecha`, `SEC_id`)
 VALUES 
 ('1', 'acta 1', 'descripcion de la acta', '2014-03-19 18:00:00', '1'),
 ('2', 'acta 2', 'descripcion de la acta', '2014-03-19 18:00:00', '2'),
 ('3', 'acta 3', 'descripcion de la acta', '2014-03-19 18:00:00', '3'),
 ('4', 'acta 4', 'descripcion de la acta', '2014-03-19 18:00:00', '4'),
 ('5', 'acta 5', 'descripcion de la acta', '2014-03-19 18:00:00', '5');

#notas
INSERT INTO `residence`.`notas` (`id`, `NOT_nombre`, `NOT_descripcion`, `NOT_archivo`) 
VALUES 
('1', 'bitacora 1', 'descripcion', 'no hay archovo'),
('2', 'bitacora 2', 'descripcion', 'no hay archovo'),
('3', 'bitacora 3', 'descripcion', 'no hay archovo'),
('4', 'bitacora 4', 'descripcion', 'no hay archovo'),
('5', 'bitacora 4', 'descripcion', 'no hay archovo'),
('6', 'mi reporte', 'descripcion', 'no hay archovo'),
('7', 'mi reporte', 'descripcion', 'no hay archovo'),
('8', 'mi reporte', 'descripcion', 'no hay archovo'),
('9', 'mi reporte', 'descripcion', 'no hay archovo'),
('10', 'mi reporte', 'descripcion', 'no hay archovo');

#alumnos
INSERT INTO `residence`.`alumnos` (`id`, `ALU_nombre`, `ALU_apellido_p`, `ALU_apellido_m`, `ALU_sexo`, `ALU_tel`, `ALU_cel`, `ALU_matricula`, `ALU_semestre`, `ALU_periodo`, `EST_id`, `USU_id`, `TUT_id`, `DIR_id`, `ESC_id`, `ANT_id`, `ESQ_id`) 
VALUES 
('1', 'steohanie', 'astudillo', 'sandoval', 'mujer', '4802099', '7475345644', '11073192', '7', 'agost-diciembre', '1', '1', '1', '1', '1', '1', '1'),
('2', 'amairani', 'barrera', 'cerros', 'mujer', '4802099', '7475345644', '11073222', '7', 'agost-diciembre', '1', '2', '2', '2', '2', '2', null),
('3', 'mayuly samantha', 'cadena', 'romero', 'mujer', '4802099', '7475345644', '11073233', '7', 'agost-diciembre', '1', '3', '3', '3', '3', '3', '3'),
('4', 'alma delia', 'dominguillo', 'martinez', 'mujer', '4802099', '7475345644', '11073267', '7', 'agost-diciembre', '1', '4', '4', '4', '4', '4', '4'),
('5', 'ramiro', 'espiridion', 'rios', 'hombre', '4802099', '7475345644', '11073269', '7', 'agost-diciembre', '1', '5', '5', '5', '5', '5', '5');




 #diairios

 INSERT INTO `residence`.`diarios` (`id`, `DIA_nombre`, `DIA_descripcion`,`DIA_fecha`, `NOT_id`, `ALU_id`) 
 VALUES 
  ('1', 'diario 1', 'descripcion','2014-03-19 18:00:00', '1', '1'),
  ('2', 'diario 2', 'descripcion','2014-03-19 18:00:00', '2', '2'),
  ('3', 'diario 3', 'descripcion','2014-03-19 18:00:00', '3', '3'),
  ('4', 'diario 4', 'descripcion','2014-03-19 18:00:00', '4', '4'),
  ('5', 'diario 5', 'descripcion','2014-03-19 18:00:00', '5', '5'),
  ('6', 'titulo del diario', 'descripcion','2014-03-19 18:00:00', '6', '1'),
  ('7', 'titulo del diario', 'descripcion','2014-03-19 18:00:00', '7', '1'),
  ('8', 'titulo del diario', 'descripcion','2014-03-19 18:00:00', '8', '1'),
  ('9', 'titulo del diario', 'descripcion','2014-03-19 18:00:00', '9', '1'),
  ('10', 'titulo del diario', 'descripcion','2014-03-19 18:00:00', '10', '1');

INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`,`ALAS_tipo`)
 VALUES 
 ('1', '1', '1','asesor'),
 ('2', '2', '1','asesor'),
 ('3', '3', '3','asesor'),
 ('4', '4', '4','asesor'),
 ('5', '5', '2','asesor'),
 ('6', '1', '2','revisor'),
 ('7', '1', '4','revisor');

 UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 1', `DOC_archivo`='archivo.pdf', `ANT_id`='1' WHERE `id`='2';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2', `DOC_archivo`='archivo.pdf', `ANT_id`='2' WHERE `id`='3';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2', `DOC_archivo`='archivo.pdf', `ANT_id`='2' WHERE `id`='4';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 3', `DOC_archivo`='archivo.pdf', `ANT_id`='3' WHERE `id`='5';
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`) VALUES ('6', 'anteproyecto 3', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '3', '9');
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`) VALUES ('7', 'anteproyecto 4', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '4', '9');
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`) VALUES ('8', 'anteproyecto 4', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '4', '9');
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`) VALUES ('9', 'anteproyecto 5', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '5', '9');
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `DOC_archivo`, `ANT_id`, `EST_id`) VALUES ('10', 'anteproyecto 5', 'descripcion del anteproyecto', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '5', '9');
UPDATE `residence`.`documentos` SET `DOC_archivo`='archivo.pdf' WHERE `id`='1';


UPDATE `residence`.`seguimientos` SET `SEG_archivo`='archivo.pdf', `ESQ_id`='1' WHERE `id`='2';
UPDATE `residence`.`seguimientos` SET `SEG_archivo`='archivo.pdf', `ESQ_id`='2' WHERE `id`='3';
UPDATE `residence`.`seguimientos` SET `SEG_archivo`='archivo.pdf', `ESQ_id`='2' WHERE `id`='4';
UPDATE `residence`.`seguimientos` SET `SEG_archivo`='archivo.pdf', `ESQ_id`='3' WHERE `id`='5';
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`, `EST_id`) VALUES ('6', 'seguimiento', 'descripcion del seguimiento', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '3', '9');
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`, `EST_id`) VALUES ('7', 'seguimiento', 'descripcion del seguimiento', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '4', '9');
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`, `EST_id`) VALUES ('8', 'seguimiento', 'descripcion del seguimiento', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '4', '9');
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`, `EST_id`) VALUES ('9', 'seguimiento', 'descripcion del seguimiento', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '5', '9');
INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `SEG_hora_entrega`, `SEG_archivo`, `ESQ_id`, `EST_id`) VALUES ('10', 'seguimiento', 'descripcion del seguimiento', '2016-03-19', '2016-03-19', '08:00:00', 'archivo.pdf', '5', '9');
UPDATE `residence`.`seguimientos` SET `SEG_archivo`='archivo.pdf' WHERE `id`='1';


UPDATE `residence`.`seguimientos` SET `SEG_nombre`='seguimiento dos' WHERE `id`='2';
UPDATE `residence`.`seguimientos` SET `SEG_nombre`='seguimiento dos' WHERE `id`='4';
UPDATE `residence`.`seguimientos` SET `SEG_nombre`='seguimiento dos' WHERE `id`='6';
UPDATE `residence`.`seguimientos` SET `SEG_nombre`='seguimiento dos' WHERE `id`='8';
UPDATE `residence`.`seguimientos` SET `SEG_nombre`='seguimiento dos' WHERE `id`='10';

INSERT INTO `residence`.`seguitosasignacion` (`id`, `SEGS_nombre`, `SEGS_fecha`) VALUES ('1', 'seguimiento', '2016-03-19');
INSERT INTO `residence`.`seguitosasignacion` (`id`, `SEGS_nombre`, `SEGS_fecha`) VALUES ('2', 'seguimiento dos', '2016-03-19');


UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2' WHERE `id`='2';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2' WHERE `id`='6';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2' WHERE `id`='8';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 2' WHERE `id`='10';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 1' WHERE `id`='3';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 1' WHERE `id`='5';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 1' WHERE `id`='7';
UPDATE `residence`.`documentos` SET `DOC_nombre`='anteproyecto 1' WHERE `id`='9';


INSERT INTO `residence`.`documentosasignacion` (`id`, `DOCS_nombre`, `DOCS_fecha`) VALUES ('1', 'anteproyecto 1', '2016-03-19');
INSERT INTO `residence`.`documentosasignacion` (`id`, `DOCS_nombre`, `DOCS_fecha`) VALUES ('2', 'anteproyecto 2', '2016-03-19');


UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='1';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='2';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='3';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='4';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='5';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='6';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='7';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='8';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='9';
UPDATE `residence`.`notas` SET `NOT_archivo`='archivo.pdf' WHERE `id`='10';
UPDATE `residence`.`notas` SET `NOT_descripcion`='\nLos niños juegan en el patio, los \nadultos conversan acaloradamente \nsobre temas divergentes. Las mascotas\nlos observan atónitos, no comprenden \nla razón de aquella discusión. Sacuden \nla cabeza en signo reprobatorio. \n\nSe dirigen al patio, se reúnen con los \nniños, estos ríen, corren junto a ellos. \nSe embarran, caen, se levantan y vuelven\na caer. Mientras los adultos siguen enfrascados\nen sus desavenencias, ellos son felices. ' WHERE `id`='1';
