-- CRUDUsuario == CRUDOperado
create function CRUDUsuario(
	$accion char(1),
	$i_codusu int,
	$i_codpersona int,
	$i_codrol int,
	$v_usuario varchar(20),
	$v_password varchar(50),
	$v_ubigeo varchar(6),
	$i_usureg int,
	$i_usumod int,
	$i_codarchivo int
) returns int
begin
	-- agregar excepciones
	DECLARE $i_codusu_VAR int;
	START TRANSACTION;
		SET $i_codusu_VAR = $i_codusu;	
		CASE 
			WHEN $accion = 'C' THEN
				INSERT INTO cntbc_usuario(i_codpersona, i_codrol, v_usuario, v_password, v_ubigeo, created_at, i_usureg, updated_at, i_usumod, i_codarchivo, i_estreg) 
				VALUES ($i_codpersona, $i_codrol, $v_usuario, $v_password, $v_ubigeo, 	now(), $i_usureg, 	now(), $i_usumod, $i_codarchivo, 1);
				SET $i_codusu_VAR = (SELECT LAST_INSERT_ID());
			
			WHEN $accion = 'U' THEN	
				UPDATE cntbc_usuario SET
					i_codrol = $i_codrol, 
					v_usuario = $v_usuario, 
					v_password = $v_password, 
					v_ubigeo = $v_ubigeo, 
					updated_at = now(), 
					i_usumod = $i_usumod, 
					i_codarchivo = $i_codarchivo 	
				WHERE i_codusu = $i_codusu AND i_codpersona = $i_codpersona AND i_estreg=1;
			
			WHEN $accion = 'D' THEN	
				UPDATE cntbc_usuario SET i_estreg = 0 ,updated_at = now(), i_usumod = $i_usumod
				WHERE i_codusu = $i_codusu AND i_codpersona = $i_codpersona AND i_estreg=1;
			
			ELSE
				SET $i_codusu_VAR =0;
		END CASE;
	COMMIT;
	return $i_codusu_VAR;
end

create function CRUDPersona(
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
	$i_codpersona int,
	$i_codrol int,
	$v_usuario varchar(20),
	$v_password varchar(50),
	$v_ubigeo varchar(6),
	$i_usureg int,
	$i_usumod int,
	$i_codarchivo int

) returns int
begin 
	DECLARE $i_codpersona_VAR int;	
	DECLARE $i_codusu_VAR int;
	
    START TRANSACTION;
		SET $i_codpersona_VAR = $i_codpersona;
		-- verificar dni unicos desde laravel
		CASE 
			WHEN $accion ='C' then
				INSERT INTO cntbc_persona(v_numdni, v_apepat, v_apemat, v_nombre, i_codcargo, v_numtel, v_email, created_at, i_usureg, updated_at, i_usumod, i_estreg, v_coddis, v_codpro, v_coddep, i_codarea, i_tipoper ) 
				VALUES ($v_numdni, UPPER($v_apepat), UPPER($v_apemat), UPPER($v_nombre), $i_codcargo, $v_numtel, $v_email, now(), $i_usureg, now(), $i_usumod, 1, $v_coddis, $v_codpro, $v_coddep, $i_codarea, $i_tipoper );
			 	SET $i_codpersona_VAR = (SELECT LAST_INSERT_ID());
	 	 	WHEN $accion ='U' then
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
		 	 		v_coddis = $v_coddis,
		 	 		v_codpro = $v_codpro,
		 	 		v_coddep = $v_coddep,
		 	 		i_codarea = $i_codarea, 
		 	 		i_tipoper = $i_tipoper 
	 	 		WHERE i_codpersona = $i_codpersona AND i_estreg = 1;
	 	 	WHEN $accion ='D' then
	 	 		UPDATE cntbc_persona SET
		 	 		i_estreg = 0,
		 	 		updated_at = now(),
		 	 		i_usumod = $i_usumod
	 	 		WHERE i_codpersona = $i_codpersona AND i_estreg = 1;
	 	 	ELSE
	 	 		SET $i_codpersona_VAR = 0;
	 	END CASE;
 		SET $i_codusu_VAR = (select insertUsuario($accion, $i_codusu, $i_codpersona_VAR, $i_codrol, $v_usuario, $v_password, $v_ubigeo, $i_usureg, $i_usumod, $i_codarchivo));
 	COMMIT;
	return $i_codusu_VAR;

end;