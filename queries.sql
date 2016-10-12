alter table `cntbd_alternativa` add column i_parent int default 0;

alter table  `cntbd_subpregunta` add column parent_subpreg int default 0;


INSERT INTO `cntbd_subpregunta` SELECT 84, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83
INSERT INTO `cntbd_subpregunta` SELECT 85, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 86, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 87, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 88, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 89, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert` FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;


INSERT INTO `cntbd_subpregunta` SELECT 90, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert`,84 FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 91, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert`,84 FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;
INSERT INTO `cntbd_subpregunta` SELECT 92, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert`,84 FROM `cntbd_subpregunta` WHERE `i_codsubpreg`=83;

insert into cntbd_subalternativa  select '295', 'Otro', 'Otro', '89', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '296', 'Otro', 'Otro', '89', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '297', 'Otro', 'Otro', '89', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';



insert into cntbd_subalternativa  select '289', ' Resolución para constituir Grupo de Trabajo', ' Resolución para constituir Grupo de Trabajo', '84', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';

insert into cntbd_subalternativa  select '290', 'ROF', 'ROF', '85', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '291', 'MOF', 'MOF', '86', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '292', 'POI/POA', 'POI/POA', '87', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '293', 'PDC', 'PDC', '88', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';
insert into cntbd_subalternativa  select '294', 'Otro', 'Otro', '89', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';



insert into cntbd_subpregunta select '82', '6.3 Resolución o dispositivo de constitución del GT-GRD', '', '1', '40', NULL, '1', '1', '1', '2016-09-09 11:26:37', '386', '2016-09-09 11:26:37', '386', '1', NULL, NULL;
insert into cntbd_subalternativa  select '283', 'Subir archivo', 'Subir archivo', '82', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';

insert into cntbd_subpregunta select '83', '6.5.2 Resolución del Secretario Técnico de la GT-GRD', '', '1', '40', NULL, '1', '1', '1', '2016-09-09 11:26:37', '386', '2016-09-09 11:26:37', '386', '1', NULL, NULL;
insert into cntbd_subalternativa  select '284', 'Subir archivo', 'Subir archivo', '83', NULL, NULL, '2016-09-09 16:38:11', '386', '2016-09-09 16:38:11', '386', '1';



ALTER TABLE cntbd_alternativa ADD COLUMN v_answer char(1) default '0';
ALTER TABLE cntbd_subpregunta ADD COLUMN v_answer char(1) default '0' after i_verifica;
ALTER TABLE cntbd_pregunta ADD COLUMN i_codpreg_padre int default '0';

update cntbd_alternativa set v_answer='1' where i_codalt in (171,113,118);
update cntbd_subpregunta set v_answer='1' where i_codalt in (53,55,69,71,72,73,74,75,76,77,78,79,80,81);



ALTER TABLE users ADD COLUMN i_ereg int;
ALTER TABLE cntbc_provincia CHANGE v_coddep v_coddep CHAR(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE cntbc_distrito CHANGE v_coddep v_coddep CHAR(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE cntbc_distrito CHANGE v_codpro v_codpro CHAR(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

delimiter $$

create function CRUDOperador(
	$accion char(1),
	$i_codopera int,
	$v_numruc varchar(11),
	$v_desrazon varchar(50),
	$v_desoperador varchar(50),
	$v_sigla varchar(20),
	$i_codtiporg int,
	$i_codnivel int,
	$v_coddis varchar(2),
	$v_codpro varchar(2),
	$v_coddep varchar(2),
	$v_direccion varchar(50),
	$v_numtel varchar(30),
	$v_numfax varchar(20),
	$v_email varchar(100),
	$v_web varchar(50),
	$i_usureg int,
	$i_usumod int
) returns int
begin
	DECLARE $i_codopera_VAR int;
	SET $i_codopera_VAR = $i_codopera;
	CASE 
		WHEN $accion ='C' then
			INSERT INTO cntbc_operador(v_numruc, v_desrazon, v_desoperador, v_sigla, i_codtiporg, i_codnivel, v_coddis, v_codpro, v_coddep, v_direccion, v_numtel, v_numfax, v_email, v_web, created_at, i_usureg, updated_at, i_usumod, i_estreg) 
			VALUES ($v_numruc, UPPER($v_desrazon), UPPER($v_desoperador), UPPER($v_sigla), $i_codtiporg, $i_codnivel, LPAD($v_coddis,2,'0'), LPAD($v_codpro,2,'0'), LPAD($v_coddep,2,'0'), UPPER($v_direccion), $v_numtel, $v_numfax, $v_email, $v_web, now(), $i_usureg, now(), $i_usumod, 1);
			SET $i_codopera_VAR = (SELECT LAST_INSERT_ID());
		
		WHEN $accion ='U' then
			UPDATE cntbc_operador SET
				v_numruc = $v_numruc, 
				v_desrazon = UPPER($v_desrazon), 
				v_desoperador = UPPER($v_desoperador), 
				v_sigla = UPPER($v_sigla), 
				i_codtiporg = $i_codtiporg, 
				i_codnivel = $i_codnivel, 
				v_coddis = LPAD($v_coddis,2,'0'), 
				v_codpro = LPAD($v_codpro,2,'0'), 
				v_coddep = LPAD($v_coddep,2,'0'), 
				v_direccion = UPPER($v_direccion), 
				v_numtel = $v_numtel, 
				v_numfax = $v_numfax, 
				v_email = $v_email, 
				v_web = $v_web, 
				updated_at = now(), 
				i_usumod = $i_usumod				
			WHERE i_codopera=$i_codopera and i_estreg=1;

		WHEN $accion ='D' then
			UPDATE cntbc_operador SET i_estreg=0
			WHERE i_codopera=$i_codopera ;
		
		ELSE
			SET $i_codopera_VAR =0;		
	END CASE;
	return $i_codopera_VAR;
end$$

create function CRUDUsuario(
	$accion char(1),
	$i_codpersona int,
	$v_numdni varchar(10) ,
	$v_apepat varchar(20) ,
	$v_apemat varchar(20) ,
	$v_nombre varchar(20) ,
	$i_codcargo int ,
	$v_numtel varchar(20) ,
	$v_email varchar(50) ,
	$i_usureg int ,
	$i_usumod int ,	
	$v_coddis varchar(2) ,
	$v_codpro varchar(2) ,
	$v_coddep varchar(2) ,
	$i_codarea int ,
	$i_tipoper int , 
	$i_codusu int,
	$i_codrol int,
	$v_usuario varchar(20),
	$v_password varchar(50),
	$v_ubigeo varchar(6),
	$i_codarchivo int,
	$i_codopera int,
	$i_estreg int

) returns int
begin 
	DECLARE $i_codusu_VAR int;
	SET $i_codusu_VAR = $i_codusu;	
	
    -- START TRANSACTION;
		-- verificar dni unicos desde laravel
		CASE 
			WHEN $accion = 'C' then
				INSERT INTO cntbc_persona(v_numdni, v_apepat, v_apemat, v_nombre, i_codcargo, v_numtel, v_email, created_at, i_usureg, updated_at, i_usumod, i_estreg, v_coddis, v_codpro, v_coddep, i_codarea, i_tipoper ) 
				VALUES ($v_numdni, UPPER($v_apepat), UPPER($v_apemat), UPPER($v_nombre), $i_codcargo, $v_numtel, $v_email, now(), $i_usureg, now(), $i_usumod, $i_estreg, LPAD($v_coddis,2,'0'), LPAD($v_codpro,2,'0'), LPAD($v_coddep,2,'0'), $i_codarea, $i_tipoper );
			 	SET $i_codpersona = (SELECT LAST_INSERT_ID());
	 	
	 	 	WHEN $accion = 'U' then
	 	 		UPDATE cntbc_persona SET
		 	 		v_numdni = $v_numdni,
		 	 		v_apepat = $v_apepat,
		 	 		v_apemat = $v_apemat,
		 	 		v_nombre = $v_nombre,
		 	 		i_codcargo = $i_codcargo,
		 	 		v_numtel = $v_numtel,
		 	 		v_email = $v_email,
		 	 		updated_at = now(),
		 	 		i_usumod = $i_usumod, 	 		
		 	 		v_coddis = LPAD($v_coddis,2,'0'),
		 	 		v_codpro = LPAD($v_codpro,2,'0'),
		 	 		v_coddep = LPAD($v_coddep,2,'0'),
		 	 		i_codarea = $i_codarea, 
		 	 		i_tipoper = $i_tipoper, 
		 	 		i_estreg = $i_estreg
	 	 		WHERE i_codpersona = $i_codpersona;
	 	
	 	 	WHEN $accion = 'D' then
	 	 		UPDATE cntbc_persona SET i_estreg = 0, updated_at = now(), i_usumod = $i_usumod
	 	 		WHERE i_codpersona = $i_codpersona;
	 	
	 	 	ELSE
	 	 		SET $i_codpersona = 0;
	 	END CASE;
 		
		CASE
		WHEN $accion = 'C' THEN
				INSERT INTO users(i_codpersona, i_codrol, name, password, v_ubigeo, created_at, i_usureg, updated_at, i_usumod, i_codarchivo, i_estreg) 
				VALUES ($i_codpersona, $i_codrol, upper($v_usuario), $v_password, $v_ubigeo, 	now(), $i_usureg, 	now(), $i_usumod, $i_codarchivo, $i_estreg);
				SET $i_codusu_VAR = (SELECT LAST_INSERT_ID());
			
			WHEN $accion = 'U' THEN	
				UPDATE users SET
					i_codrol = $i_codrol, 
					name = upper($v_usuario), 
					password = $v_password, 
					v_ubigeo = $v_ubigeo, 
					updated_at = now(), 
					i_usumod = $i_usumod, 
					i_codarchivo = $i_codarchivo, 	
					i_estreg = $i_estreg
				WHERE id = $i_codusu AND i_codpersona = $i_codpersona;
			
			WHEN $accion = 'D' THEN	
				UPDATE users SET i_estreg = 0 ,updated_at = now(), i_usumod = $i_usumod
				WHERE id = $i_codusu AND i_codpersona = $i_codpersona  ;
			
			ELSE
				SET $i_codusu_VAR =0;
		END CASE;


		CASE
		WHEN $accion = 'C' THEN
				INSERT INTO cntbd_operacontac(i_codopera, created_at, i_usureg, updated_at, i_usumod, i_estreg, i_codpersona) 
				VALUES ($i_codopera, 	now(), $i_usureg, 	now(), $i_usumod, $i_estreg, $i_codpersona);
			
			WHEN $accion = 'U' THEN	
				UPDATE cntbd_operacontac SET
					i_codopera = $i_codopera,
					updated_at = now(), 
					i_usumod = $i_usumod,
					i_estreg = $i_estreg
				WHERE i_codpersona = $i_codpersona;
			
			WHEN $accion = 'D' THEN	
				UPDATE cntbd_operacontac SET i_estreg = 0 ,updated_at = now(), i_usumod = $i_usumod
				WHERE i_codpersona = $i_codpersona  ;
			
			ELSE
				SET $i_codopera =0;
		END CASE;


 	-- COMMIT;
	return $i_codusu_VAR;

end$$