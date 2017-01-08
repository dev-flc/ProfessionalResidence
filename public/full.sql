use residence;
# 3tutores


INSERT INTO `residence`.`tutores` (`id`, `TUT_nombre`, `TUT_apellido_p`, `TUT_apellido_m`, `TUT_correo`, `TUT_tel`, `TUT_cel`) 
VALUES 
('1', 'miriam', 'perez', 'nava', 'mian123@gmai.com', '4823456', '7545123456'),
('2', 'alberto', 'rivera', 'mendoza', 'rivera1900@gmai.com', '4823456', '7571123456'),
('3', 'jan', 'hernandez', 'flores', 'nuanitho12@gmai.com', '4823456', '747133455'),
('4', 'diana', 'morales', 'dueñas', 'di@gmai.com', '4826856', '7471093323'),
('5', 'luz', 'jimenez', 'eulina', 'nena12_33@gmai.com', '4653456', '7545123336'),
('6', 'lucas', 'nava', 'epifanio', 'luc.ji.eu.12@gmai.com', '4233456', '752323456'),
('7', 'mario', 'gonzalez', 'guerrero', 'mar436@gmai.com', '4233456', '7335123456'),
('8', 'maria', 'velazquez', 'herrera', 'maria23@gmai.com', '44223456', '732123456');


#4 directores
INSERT INTO `residence`.`directores` (`id`, `DI_nombre`, `DI_apellido_p`, `DI_apellido_m`, `DI_correo`) 
VALUES 
('1', 'daniel', 'gomez', 'reyes', 'daniewl@gmai.com'),
('2', 'juan manuel', 'adame', 'tapia', 'tapqwia@gmai.com'),
('3', 'jose antonio', 'rodriguez', 'hernandez', 'joswe@gmai.com'),
('4', 'josue', 'sanchez', 'bautista', 'sanchqwez@gmai.com'),
('5', 'francisco', 'isidro', 'reyes', 'isqwidro@gmai.com'),
('6', 'samuel', 'villaseñor', 'isai', 'iswai@gmai.com'),
('7', 'alexis', 'martinez', 'isidro', 'alqex@gmai.com'),
('8', 'carlos', 'garcia', 'isidro', 'carlows@gmai.com'),
('9', 'joaquin', 'guzman', 'loera', 'loeqwra@gmai.com'),
('10', 'xochilt', 'bautista', 'reyes', 'rewyes@gmai.com'),
('11', 'oscar', 'gomez', 'ortiz', 'ortwiz@gmai.com'),
('12', 'martin', 'county', 'adame', 'martien@gmai.com'),
('13', 'marisol', 'isidro', 'flores', 'soql@gmai.com'),
('14', 'maricruz', 'bautista', 'isidro', 'cruqwz@gmai.com'),
('15', 'ana irma', 'flores', 'isidro', 'anqnie@gmai.com');

#5 direccion
INSERT INTO `residence`.`direcciones` (`id`, `DIR_calle`, `DIR_numero`, `DIR_estado`, `DIR_ciudad`, `DIR_colonia`, `DIR_cp`) 
VALUES 
('1', 'reyes del sur', '12', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('2', 'jardines del sur', '11', 'guerrero', 'chilpancingo', 'san antonio', '39101'),
('3', 'reyes del sur', '10', 'guerrero', 'chilpancingo', 'bugambilias', '39101'),
('4', 'reyes del sur', '16', 'guerrero', 'chilpancingo', 'san pedro', '39101'),
('5', 'reyes del sur', '18', 'guerrero', 'chilpancingo', 'san ignacio', '39101'),
('6', 'reyes del sur', '12', 'guerrero', 'chilpancingo', 'san francisco', '39101'),
('7', 'reyes del sur', '14', 'guerrero', 'chilpancingo', 'pri', '39101'),
('8', 'reyes del sur', '10', 'guerrero', 'chilpancingo', 'prd', '39101'),
('9', 'reyes del sur', '18', 'guerrero', 'chilpancingo', 'san jose', '39101'),
('10', 'reyes del sur', '32', 'guerrero', 'chilpancingo', 'san lucas', '39101'),
('11', 'reyes del sur', '52', 'guerrero', 'chilpancingo', 'san juan', '39101'),
('12', 'reyes del sur', '72', 'guerrero', 'chilpancingo', 'san jacinto', '39101'),
('13', 'reyes del sur', '182', 'guerrero', 'chilpancingo', 'san galindo', '39101'),
('14', 'reyes del sur', '128', 'guerrero', 'chilpancingo', 'san jose', '39101'),
('15', 'reyes del sur', '17', 'guerrero', 'chilpancingo', 'coapa', '39101'),
('16', 'reyes del sur', '19', 'guerrero', 'chilpancingo', 'poligono', '39101'),
('17', 'reyes del sur', '154', 'guerrero', 'chilpancingo', 'prd', '39101'),
('18', 'reyes del sur', '142', 'guerrero', 'chilpancingo', 'san jose', '39101'),
('19', 'reyes del sur', '126', 'guerrero', 'chilpancingo', 'antonio', '39101'),
('20', 'reyes del sur', '182', 'guerrero', 'chilpancingo', 'amate', '39101'),
('21', 'reyes del sur', '192', 'guerrero', 'chilpancingo', 'jacarandas', '39101'),
('22', 'reyes del sur', '129', 'guerrero', 'chilpancingo', 'juan ruiz', '39101'),
('23', 'reyes del sur', '12', 'guerrero', 'chilpancingo', 'miguel hidalgo', '39101'),
('24', 'reyes del sur', '128', 'guerrero', 'chilpancingo', 'noche buena', '39101'),
('25', 'reyes del sur', '126', 'guerrero', 'chilpancingo', 'san pedrito', '39101'),
('26', 'reyes del sur', '17', 'guerrero', 'chilpancingo', 'santo cielo', '39101'),
('27', 'reyes del sur', '652', 'guerrero', 'chilpancingo', 'san bernardo', '39101'),
('28', 'reyes del sur', '54', 'guerrero', 'chilpancingo', 'bugambilias', '39101'),
('29', 'reyes del sur', '456', 'guerrero', 'chilpancingo', 'tlacaelle', '39101'),
('31', 'reyes del sur', '74', 'guerrero', 'chilpancingo', 'polvorin', '39101'),
('32', 'reyes del sur', '32', 'guerrero', 'chilpancingo', 'crucero', '39101'),
('33', 'reyes del sur', '745', 'guerrero', 'chilpancingo', 'marina', '39101'),
('34', 'reyes del sur', '154', 'guerrero', 'chilpancingo', 'san luis', '39101'),
('35', 'reyes del sur', '45', 'guerrero', 'chilpancingo', 'palomas', '39101'),
('36', 'reyes del sur', '64', 'guerrero', 'chilpancingo', 'colombia', '39101'),
('37', 'reyes del sur', '09', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('38', 'reyes del sur', '09', 'guerrero', 'chilpancingo', 'amelitos', '39101'),
('39', 'reyes del sur', '64', 'guerrero', 'chilpancingo', 'santa teresa', '39101'),
('40', 'reyes del sur', '98', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('41', 'reyes del sur', '575', 'guerrero', 'chilpancingo', 'san julio', '39101'),
('42', 'reyes del sur', '45', 'guerrero', 'chilpancingo', 'horiente', '39101'),
('43', 'reyes del sur', '457', 'guerrero', 'chilpancingo', 'lomas', '39101'),
('44', 'reyes del sur', '343', 'guerrero', 'chilpancingo', 'xocmulco', '39101'),
('45', 'reyes del sur', '34', 'guerrero', 'chilpancingo', 'rancho las lomas', '39101'),
('46', 'reyes del sur', '23', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('47', 'reyes del sur', '78', 'guerrero', 'chilpancingo', 'angeles', '39101'),
('48', 'reyes del sur', '98', 'guerrero', 'chilpancingo', 'zaragoza', '39101'),
('49', 'reyes del sur', '547', 'guerrero', 'chilpancingo', 'abrilias', '39101'),
('50', 'reyes del sur', '86', 'guerrero', 'chilpancingo', 'brazil', '39101'),
('51', 'reyes del sur', '43', 'guerrero', 'chilpancingo', 'las torres', '39101'),
('52', 'reyes del sur', '98', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('53', 'reyes del sur', '19', 'guerrero', 'chilpancingo', 'santa monita', '39101'),
('54', 'reyes del sur', '43', 'guerrero', 'chilpancingo', 'santa cecilia', '39101'),
('55', 'reyes del sur', '34', 'guerrero', 'chilpancingo', 'san mateo', '39101'),
('56', 'reyes del sur', '85', 'guerrero', 'chilpancingo', 'santa garcia', '39101');

#6estatus

INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('1', '1');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('2', '2');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('3', '3');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('4', '4');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('5', '5');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('6', '6');

#7escuelas

INSERT INTO `residence`.`escuelas` (`id`, `ESC_nombre`, `ESC_clave`, `DIR_id`, `DI_id`) VALUES 
('1', 'daniel delgadillo', '1209', '1', '1'),
('2', 'Tecnica 167', '1209', '1', '2'),
('3', 'daniel delgadillo', '1209', '3', '3'),
('4', 'tecnica 51', '1209', '4', '4'),
('5', 'daniel delgadillo', '1209', '5', '5'),
('6', 'tecnica 81', '1209', '6', '6'),
('7', 'benito juares ', '1209', '7', '7'),
('8', 'Aaron M. Flores', '1209', '8', '8'),
('9', 'Adolfo Lopez Mateos', '1209', '9', '9'),
('10', 'Centro Escolar Chilpancingo', '1209', '10', '10'),
('11', 'Amado nervo', '1209', '11', '11'),
('12', 'Lazaro cardenaz', '1209', '12', '12'),
('13', 'tecnica 56', '1209', '13', '13'),
('14', 'julio escobar', '1209', '14', '14'),
('15', 'manuel altamirano', '1209', '15', '15');

#8 anteproyectos
INSERT INTO `residence`.`anteproyectos` (`id`, `ANT_nombre`, `ANT_descripcion`, `EST_id`) VALUES
 ('1', 'educacion en el hogar y la escuela es el metodo mas infalible', 'octener con estadisticas y entrevistas a los alumnos como es que sus padres les enseñan la educacion', '1'),
 ('2', 'el manejo de de as lenguas son la mejor opcion en el fututi', 'el futuro requiere que sepas hablar mas de una lengua', '1'),
('3', 'enseñanza en el trabajo en equipo y en grupo', 'colaborar a los adolecentes a un mejor comportamiento al trabajo en equipo para realizar sus trabajos', '1'),
('4', ' dirigir a un estudiante aun mayor comportamiento ala hora de participar ', 'tener mayor comportamiento en clases ala hora de participar', '1'),
('5', 'enseñanza de los valores que debe entender un ser humano', 'participacion de los padres para inculcar valores alos adolecentes', '1'),
('6', 'involucrar al alumnado para apoyar a los padres de familia con los labores de la casa ', 'involucrar alos padres de familia para una mayor comunicacion ala hora de los labores de la casa', '1'),
('7', 'enseñanza para que el alumnado tenga mayor comunicacion con sus padres generando apoyo y bienestar', 'tener charlas con el alumnado y los padres de familia', '1'),
('8', 'enseñanza al servicio laboral para un aprendizaje a futuro', 'tener practicas como un profesional con informacion especifica', '1'),
('9', 'recreacion del alumno implementando todos sus conocimientos adquiridos durante su instancia en la escuela', 'apoyar en la enseñanza del alumno y evaluarlo y recrear el conocimiente de cada semestre', '1'),
('10', 'estrategia didactica y administrativa para una mejor enseñanza basica en el alumno', 'usar estrategias para una mejor enseñanza', '1'),
('11', 'motivacion extra para enseñarle alo alumnos regularisarse con sus trabajos', 'regularizacion con sus trabajos', '1'),
('12', 'comprension y y entendimiento de todos y cada uno de los alumnos', 'tener seguridad en que el alumnado entiende y habla del tema', '1'),
('13', 'propuesta de lectura al alumnado de todas las formas de leccion', 'aprender las leccionese entendidas', '1'),
('14', 'disposicion de informacion aportuda para agregar', 'descripcion', '1'),
('15', 'correcion de lectura todos pueden aprender', ' los alumnos pueden aprender de diferentes maneras de la mejor forma', '1'),
('16', 'comprension de lectura ', 'el alumno interpreta la lectura de una forma correcta ', '1'),
('17', 'escritura de forma correcta', 'el alumno escribe de una forma correcta', '1'),
('18', 'aprendizaje en la redaccion del alumno', 'redactar de una forma correcta', '1'),
('19', 'aprendizaje de exposicion de manera intuitiva', 'aprender a un mayor manejo de palabra', '1'),
('20', 'concientizar a un mejor colaboracion y comunicacion con los docentes de las escuelas', 'comunicacion con los docentes', '1'),
('21', 'aprendizaje de busqueda de proyectos', 'hacer mejores investigaciones', '1'),
('22', 'interpretacion y colaboracion para aprender de forma autonoma', 'aprendizaje autonomo', '1'),
('23', 'recreacion de aprendizaje adquirido en total de materias', 'aprendizaje de todas las materias en un sierto tiempo', '1'),
('24', 'aprendizaje de contener materias y relacionarlas para un servicio laboral', 'relacion dematerias para un servicio laboral', '1'),
('25', 'localizar y detectar un mal aprendizaje por parte de un alumno', 'detectar el mal aprendizaje', '1'),
('26', 'aprender con el alumno y generar un mayor aprendizaje', 'el aprendizaje debe ser mutuo', '1');
#9 esquemas

INSERT INTO `residence`.`esquemas` (`id`, `ESQ_nombre`, `ESQ_descripcion`) VALUES ('1', 'la escuela es una opcion no un problema', 'un 80% de los alumnos creen que la escuela es el problema cuando el problema es no poner atencion en clases');
INSERT INTO `residence`.`esquemas` (`id`, `ESQ_nombre`, `ESQ_descripcion`) VALUES ('2', 'formas de fomentar los buenos habitos del estudio', 'los principales problemas de que los alumnos reprueben es a causa de que no tienen un habito en el estudio');
INSERT INTO `residence`.`esquemas` (`id`, `ESQ_nombre`, `ESQ_descripcion`) VALUES ('3', 'crear condicines que los animem a trabajar y a participar ', 'ya que un 90% de los alumnos no participan y se intersan por que sucede o pasa en la escuela');


#documentos
INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `ANT_id`, `EST_id`) 
VALUES ('1', 'Pimer Reporte', 'Contiene el plateamiento del problema asi como tambien la solucion del mismo', '2017-01-01', '12:00:00', '1', '1');

INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `ANT_id`, `EST_id`) 
VALUES ('2', 'Segundo Reporte', 'Contiene La problematica', '2017-02-02', '12:00:00', '2', '1');

INSERT INTO `residence`.`documentos` (`id`, `DOC_nombre`, `DOC_descripcion`, `DOC_fecha_entrega`, `DOC_hora_entrega`, `ANT_id`, `EST_id`) 
VALUES ('3', 'Tercer Reporte', 'Contiene el Reporte final', '2017-03-03', '12:00:00', '3', '1');


#documento asignacion
INSERT INTO `residence`.`documentosasignacion` (`id`, `DOCS_nombre`, `DOCS_fecha`) VALUES ('1', 'Primer Reporte', '2017-01-01');
INSERT INTO `residence`.`documentosasignacion` (`id`, `DOCS_nombre`, `DOCS_fecha`) VALUES ('2', 'Sendo reporte', '2017-02-02');
INSERT INTO `residence`.`documentosasignacion` (`id`, `DOCS_nombre`, `DOCS_fecha`) VALUES ('3', 'Tercer Reporte', '2017-02-02');


#14Asesores
INSERT INTO `residence`.`asesores` (`id`, `ASE_nombre`, `ASE_apellido_p`, `ASE_apellido_m`, `ASE_tel`, `ASE_cel`, `DIR_id`, `USU_id`) 
VALUES 
('1', 'nanci miriam', 'salmeron', 'mosso', '4804323', '7471234455', '1', '57'),
('2', 'oscar', 'flores', 'hernandes', '4802333', '747132332', '2', '58'),
('3', 'eduardo', 'barranco', 'flores', '4804323', '7471234455', '3', '59'),
('4', 'diego', 'gimenez', 'gonzaez', '4804323', '7471234455', '4', '60'),
('5', 'kenia', 'salgado', 'ramirez', '4804323', '7471234455', '5', '61'),
('6', 'mirna', 'salmeron', 'juarez', '4804323', '7471234455', '6', '62'),
('7', 'abel', 'castañon', 'hernandez', '4804323', '7471234455', '7', '63'),
('8', 'aldo', 'catalan', 'morales', '4804323', '7471234455', '8', '64');



#presidente
INSERT INTO `residence`.`users` (`id`, `name`, `email`, `password`, `foto`, `type`) VALUES ('65', 'andres', 'andres@gmail.com', '$2y$10$p8gsajsg6dL.4H3isUDkEexqNC4xRY9PfSpymmhFaa9RIGjW.ASsy', 'foto.png', 'presidente');

#user presidente
INSERT INTO `residence`.`presidentes` (`id`, `PRE_nombre`, `PRE_apellido_p`, `PRE_apellido_m`, `PRE_tel`, `PRE_cel`, `DIR_id`, `USU_id`) VALUES ('1', 'Andres', 'Ignacio', 'Roble', '345323', '7471234489', '1', '65');

#secretario
INSERT INTO `residence`.`users` (`id`, `name`, `email`, `password`, `foto`, `type`) VALUES ('66', 'marisol', 'marisol@gmai.com', '$2y$10$p8gsajsg6dL.4H3isUDkEexqNC4xRY9PfSpymmhFaa9RIGjW.ASsy', 'foto.png', 'secretario');

INSERT INTO `residence`.`secretarios` (`id`, `SEC_nombre`, `SEC_apellido_p`, `SEC_apellido_m`, `SEC_tel`, `SEC_cel`, `DIR_id`, `USU_id`) VALUES ('1', 'marisol', 'jimenez', 'marim', '4802323', '7541677676', '1', '66');


INSERT INTO `residence`.`alumnos` (`id`, `ALU_nombre`, `ALU_apellido_p`, `ALU_apellido_m`, `ALU_sexo`, `ALU_tel`, `ALU_cel`, `ALU_matricula`, `ALU_semestre`, `ALU_periodo`, `EST_id`, `USU_id`, `TUT_id`, `DIR_id`, `ESC_id`, `ANT_id`, `ESQ_id`) VALUES ('1', 'abel', 'gonzalez', 'morales', 'hombre', '4802300', '754712223', '12342345', '7', 'Enero', '1', '1', '1', '1', '1', '1', '1');

INSERT INTO `residence`.`alumnos_asesores` (`id`, `ALU_id`, `ASE_id`, `ALAS_tipo`) VALUES ('1', '1', '1', 'asesor');

INSERT INTO `residence`.`alumnos` (`id`, `ALU_nombre`) VALUES ('2', '');
UPDATE `residence`.`alumnos` SET `ALU_nombre`='Armando' WHERE `id`='1';

UPDATE `residence`.`alumnos` SET `ALU_nombre`='karyn', `ALU_apellido_p`='sthepani', `ALU_apellido_m`='garcia', `ALU_sexo`='hombre', `ALU_tel`='4367799', `ALU_cel`='74712398', `ALU_matricula`='987365267', `ALU_semestre`='7', `ALU_periodo`='Enero', `EST_id`='1', `USU_id`='2', `TUT_id`='1', `DIR_id`='2', `ESC_id`='1', `ANT_id`='2', `ESQ_id`='2' WHERE `id`='2';



INSERT INTO `residence`.`seguimientos` (`id`, `SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `SEG_fecha_entrega`, `ESQ_id`, `EST_id`) VALUES ('1', 'Preimer seguimientp', 'Contiene la documentacion correspondiente al reglamento', '2017-06-01', NULL, '1', '1');
INSERT INTO `residence`.`seguimientos` (`SEG_nombre`, `SEG_descripcion`, `SEG_fecha`, `ESQ_id`, `EST_id`) VALUES ('Segundo Seguimiento', 'Contiene la problematica de Esquema', '2017-07-01', '2', '2');

INSERT INTO `residence`.`seguitosasignacion` (`SEGS_nombre`, `SEGS_fecha`) VALUES ('primer seguimiento', '2017-06-01');
INSERT INTO `residence`.`seguitosasignacion` (`SEGS_nombre`, `SEGS_fecha`) VALUES ('Segundo seguimiento', '2017-07-01');


UPDATE `residence`.`documentos` SET `DOC_fecha`='2017-01-01', `DOC_fecha_entrega`=NULL, `DOC_hora_entrega`=NULL WHERE `id`='1';
UPDATE `residence`.`documentos` SET `DOC_fecha`='2017-02-02', `DOC_fecha_entrega`=NULL, `DOC_hora_entrega`=NULL WHERE `id`='2';
UPDATE `residence`.`documentos` SET `DOC_fecha`='2017-03-03', `DOC_fecha_entrega`=NULL, `DOC_hora_entrega`=NULL WHERE `id`='3';
