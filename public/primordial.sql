$gl = new  Residence\User;
$gl->name="admin";
$gl->email="admin@gmail.com";    
$gl->password=bcrypt("123");
$gl->foto="foto.png";
$gl->type="subdirector";
$gl->save();

INSERT INTO `residence`.`subdirectores` (`id`, `SUB_nombre`, `SUB_apellido_p`, `SUB_apellido_m`, `SUB_tel`, `SUB_cel`, `DIR_id`, `USU_id`) VALUES ('1', 'administrador', '2017', 'enuf', NULL, NULL, NULL, '1');


INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('1', '1');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('2', '2');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('3', '3');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('4', '4');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('5', '5');
INSERT INTO `residence`.`estatus` (`id`, `EST_estatus`) VALUES ('6', '6');
