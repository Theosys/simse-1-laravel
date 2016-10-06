1
	si:
		1.1
			1.1.1
			1.1.2
		1.2
	no
		texto ayuda
		1.1(no)

2
3

--



create table x_pregunta(
id int not null auto_increment primary key,
nombre_pregunta varchar(50),
opcion int,
grupo int,
parent int,
orden int,
alternativa_tipo_campo int -- 1:COMBO,N: TEXTAREA ...

);
-- textarea
-- checkbox (opción mltipl)
-- si, no, o talves, u otro (opcion única radio)
-- matriz con chk , radios y textarea
-- input para upload
-- 



create table x_alternativa(
id int not null auto_increment primary key,
grupo int,
opcion int,
nombre_alternativa varchar(50)
);

