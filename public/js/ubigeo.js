// JavaScript Document
function get_prv(){ //alert();
	
	if (document.frm.dep.value=='NN'){
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
}
if (document.frm.dep.value=='01'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('BAGUA','02');
	document.frm.prv.options[2] = new Option('BONGARA','03');
	document.frm.prv.options[3] = new Option('CHACHAPOYAS','01');
	document.frm.prv.options[4] = new Option('CONDORCANQUI','04');
	document.frm.prv.options[5] = new Option('LUYA','05');
	document.frm.prv.options[6] = new Option('RODRIGUEZ DE MENDO','06');
	document.frm.prv.options[7] = new Option('UTCUBAMBA','07');
}
if (document.frm.dep.value=='02'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('AIJA','02');
	document.frm.prv.options[2] = new Option('ANTONIO RAYMONDI','03');
	document.frm.prv.options[3] = new Option('ASUNCION','04');
	document.frm.prv.options[4] = new Option('BOLOGNESI','05');
	document.frm.prv.options[5] = new Option('CARHUAZ','06');
	document.frm.prv.options[6] = new Option('CARLOS F. FITZCARRALD','07');
	document.frm.prv.options[7] = new Option('CASMA','08');
	document.frm.prv.options[8] = new Option('CORONGO','09');
	document.frm.prv.options[9] = new Option('HUARAZ','01');
	document.frm.prv.options[10] = new Option('HUARI','10');
	document.frm.prv.options[11] = new Option('HUARMEY','11');
	document.frm.prv.options[12] = new Option('HUAYLAS','12');
	document.frm.prv.options[13] = new Option('MARISCAL LUZURRIAGA','13');
	document.frm.prv.options[14] = new Option('OCROS','14');
	document.frm.prv.options[15] = new Option('PALLASCA','15');
	document.frm.prv.options[16] = new Option('POMABAMBA','16');
	document.frm.prv.options[17] = new Option('RECUAY','17');
	document.frm.prv.options[18] = new Option('SANTA','18');
	document.frm.prv.options[19] = new Option('SIHUAS','19');
	document.frm.prv.options[20] = new Option('YUNGAY','20');
}
if (document.frm.dep.value=='03'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ABANCAY','01');
	document.frm.prv.options[2] = new Option('ANDAHUAYLAS','02');
	document.frm.prv.options[3] = new Option('ANTABAMBA','03');
	document.frm.prv.options[4] = new Option('AYMARAES','04');
	document.frm.prv.options[5] = new Option('CHINCHEROS','06');
	document.frm.prv.options[6] = new Option('COTABAMBAS','05');
	document.frm.prv.options[7] = new Option('GRAU','07');
}
if (document.frm.dep.value=='04'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('AREQUIPA','01');
	document.frm.prv.options[2] = new Option('CAMANA','02');
	document.frm.prv.options[3] = new Option('CARAVELI','03');
	document.frm.prv.options[4] = new Option('CASTILLA','04');
	document.frm.prv.options[5] = new Option('CAYLLOMA','05');
	document.frm.prv.options[6] = new Option('CONDESUYOS','06');
	document.frm.prv.options[7] = new Option('ISLAY','07');
	document.frm.prv.options[8] = new Option('LA UNION','08');
}
if (document.frm.dep.value=='05'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CANGALLO','02');
	document.frm.prv.options[2] = new Option('HUAMANGA','01');
	document.frm.prv.options[3] = new Option('HUANCA SANCOS','03');
	document.frm.prv.options[4] = new Option('HUANTA','04');
	document.frm.prv.options[5] = new Option('LA MAR','05');
	document.frm.prv.options[6] = new Option('LUCANAS','06');
	document.frm.prv.options[7] = new Option('PARINACOCHAS','07');
	document.frm.prv.options[8] = new Option('PAUCAR DEL SARA SARA','08');
	document.frm.prv.options[9] = new Option('SUCRE','09');
	document.frm.prv.options[10] = new Option('VICTOR FAJARDO','10');
	document.frm.prv.options[11] = new Option('VILCA HUAMAN','11');
}
if (document.frm.dep.value=='06'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CAJABAMBA','02');
	document.frm.prv.options[2] = new Option('CAJAMARCA','01');
	document.frm.prv.options[3] = new Option('CELENDIN','03');
	document.frm.prv.options[4] = new Option('CHOTA','04');
	document.frm.prv.options[5] = new Option('CONTUMAZA','05');
	document.frm.prv.options[6] = new Option('CUTERVO','06');
	document.frm.prv.options[7] = new Option('HUALGAYOC','07');
	document.frm.prv.options[8] = new Option('JAEN','08');
	document.frm.prv.options[9] = new Option('SAN IGNACIO','09');
	document.frm.prv.options[10] = new Option('SAN MARCOS','10');
	document.frm.prv.options[11] = new Option('SAN MIGUEL','11');
	document.frm.prv.options[12] = new Option('SAN PABLO','12');
	document.frm.prv.options[13] = new Option('SANTA CRUZ','13');
}
if (document.frm.dep.value=='07'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CALLAO','01');
}
if (document.frm.dep.value=='08'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ACOMAYA','02');
	document.frm.prv.options[2] = new Option('ANTA','03');
	document.frm.prv.options[3] = new Option('CALCA','04');
	document.frm.prv.options[4] = new Option('CANAS','05');
	document.frm.prv.options[5] = new Option('CANCHIS','06');
	document.frm.prv.options[6] = new Option('CHUMBIVILCAS','07');
	document.frm.prv.options[7] = new Option('CUSCO','01');
	document.frm.prv.options[8] = new Option('ESPINAR','08');
	document.frm.prv.options[9] = new Option('LA CONVENCION','09');
	document.frm.prv.options[10] = new Option('PARURO','10');
	document.frm.prv.options[11] = new Option('PAUCARTAMBO','11');
	document.frm.prv.options[12] = new Option('QUISPICANCHI','12');
	document.frm.prv.options[13] = new Option('URUBAMBA','13');
}
if (document.frm.dep.value=='09'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ACOBAMBA','02');
	document.frm.prv.options[2] = new Option('ANGARAES','03');
	document.frm.prv.options[3] = new Option('CASTROVIRREYNA','04');
	document.frm.prv.options[4] = new Option('CHURCAMPA','05');
	document.frm.prv.options[5] = new Option('HUANCAVELICA','01');
	document.frm.prv.options[6] = new Option('HUAYTARA','06');
	document.frm.prv.options[7] = new Option('TAYACAJA','07');
}
if (document.frm.dep.value=='10'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('AMBO','02');
	document.frm.prv.options[2] = new Option('DOS DE MAYO','03');
	document.frm.prv.options[3] = new Option('HUACAYBAMBA','04');
	document.frm.prv.options[4] = new Option('HUAMALIES','05');
	document.frm.prv.options[5] = new Option('HUANUCO','01');
	document.frm.prv.options[6] = new Option('LAURICOCHA','10');
	document.frm.prv.options[7] = new Option('LEONCIO PRADO','06');
	document.frm.prv.options[8] = new Option('MARANON','07');
	document.frm.prv.options[9] = new Option('PACHITEA','08');
	document.frm.prv.options[10] = new Option('PUERTO INCA','09');
	document.frm.prv.options[11] = new Option('YAROWILCA','11');
}
if (document.frm.dep.value=='11'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CHINCHA','02');
	document.frm.prv.options[2] = new Option('ICA','01');
	document.frm.prv.options[3] = new Option('NAZCA','03');
	document.frm.prv.options[4] = new Option('PALPA','04');
	document.frm.prv.options[5] = new Option('PISCO','05');
}
if (document.frm.dep.value=='12'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CHANCHAMAYO','03');
	document.frm.prv.options[2] = new Option('CHUPACA','09');
	document.frm.prv.options[3] = new Option('CONCEPCION','02');
	document.frm.prv.options[4] = new Option('HUANCAYO','01');
	document.frm.prv.options[5] = new Option('JAUJA','04');
	document.frm.prv.options[6] = new Option('JUNIN','05');
	document.frm.prv.options[7] = new Option('SATIPO','06');
	document.frm.prv.options[8] = new Option('TARMA','07');
	document.frm.prv.options[9] = new Option('YAULI','08');
}
if (document.frm.dep.value=='13'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ASCOPE','02');
	document.frm.prv.options[2] = new Option('BOLIVAR','03');
	document.frm.prv.options[3] = new Option('CHEPEN','04');
	document.frm.prv.options[4] = new Option('GRAN CHIMU','11');
	document.frm.prv.options[5] = new Option('JULCAN','05');
	document.frm.prv.options[6] = new Option('OTUZCO','06');
	document.frm.prv.options[7] = new Option('PACASMAYO','07');
	document.frm.prv.options[8] = new Option('PATAZ','08');
	document.frm.prv.options[9] = new Option('SANCHEZ CARRION','09');
	document.frm.prv.options[10] = new Option('SANTIAGO DE CHUCO','10');
	document.frm.prv.options[11] = new Option('TRUJILLO','01');
	document.frm.prv.options[12] = new Option('VIRU','12');
}
if (document.frm.dep.value=='14'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CHICLAYO','01');
	document.frm.prv.options[2] = new Option('FERRENAFE','02');
	document.frm.prv.options[3] = new Option('LAMBAYEQUE','03');
}
if (document.frm.dep.value=='15'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('BARRANCA','02');
	document.frm.prv.options[2] = new Option('CAJATAMBO','03');
	document.frm.prv.options[3] = new Option('CANETE','05');
	document.frm.prv.options[4] = new Option('CANTA','04');
	document.frm.prv.options[5] = new Option('HUARAL','06');
	document.frm.prv.options[6] = new Option('HUAROCHIRI','07');
	document.frm.prv.options[7] = new Option('HUAURA','08');
	document.frm.prv.options[8] = new Option('LIMA','01');
	document.frm.prv.options[9] = new Option('OYON','09');
	document.frm.prv.options[10] = new Option('YAUYOS','10');
}
if (document.frm.dep.value=='16'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ALTO AMAZONAS','02');
	document.frm.prv.options[2] = new Option('DATEM DEL MARANON','07');
	document.frm.prv.options[3] = new Option('LORETO','03');
	document.frm.prv.options[4] = new Option('MARISCAL RAMON CASTILLA','04');
	document.frm.prv.options[5] = new Option('MAYNAS','01');
	document.frm.prv.options[6] = new Option('REQUENA','05');
	document.frm.prv.options[7] = new Option('UCAYALI','06');
}
if (document.frm.dep.value=='17'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('MANU','02');
	document.frm.prv.options[2] = new Option('TAHUAMANU','03');
	document.frm.prv.options[3] = new Option('TAMBOPATA','01');
}
if (document.frm.dep.value=='18'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('GRAL. SANCHEZ CERRO','02');
	document.frm.prv.options[2] = new Option('ILO','03');
	document.frm.prv.options[3] = new Option('MARISCAL NIETO','01');
}
if (document.frm.dep.value=='19'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('DANIEL ALCIDES CARRION','02');
	document.frm.prv.options[2] = new Option('OXAPAMPA','03');
	document.frm.prv.options[3] = new Option('PASCO','01');
}
if (document.frm.dep.value=='20'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('AYABACA','02');
	document.frm.prv.options[2] = new Option('HUANCABAMBA','03');
	document.frm.prv.options[3] = new Option('MORROPON','04');
	document.frm.prv.options[4] = new Option('PAITA','05');
	document.frm.prv.options[5] = new Option('PIURA','01');
	document.frm.prv.options[6] = new Option('SECHURA','08');
	document.frm.prv.options[7] = new Option('SULLANA','06');
	document.frm.prv.options[8] = new Option('TALARA','07');
}
if (document.frm.dep.value=='21'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('AZANGARO','02');
	document.frm.prv.options[2] = new Option('CARABAYA','03');
	document.frm.prv.options[3] = new Option('CHUCUITO','04');
	document.frm.prv.options[4] = new Option('EL COLLAO','05');
	document.frm.prv.options[5] = new Option('HUANCANE','06');
	document.frm.prv.options[6] = new Option('LAMPA','07');
	document.frm.prv.options[7] = new Option('MELGAR','08');
	document.frm.prv.options[8] = new Option('MOHO','09');
	document.frm.prv.options[9] = new Option('PUNO','01');
	document.frm.prv.options[10] = new Option('SAN ANTONIO DE PUTINA','10');
	document.frm.prv.options[11] = new Option('SAN ROMAN','11');
	document.frm.prv.options[12] = new Option('SANDIA','12');
	document.frm.prv.options[13] = new Option('YUNGUYO','13');
}
if (document.frm.dep.value=='22'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('BELLAVISTA','02');
	document.frm.prv.options[2] = new Option('EL DORADO','03');
	document.frm.prv.options[3] = new Option('HUALLAGA','04');
	document.frm.prv.options[4] = new Option('LAMAS','05');
	document.frm.prv.options[5] = new Option('MARISCAL CACERES','06');
	document.frm.prv.options[6] = new Option('MOYOBAMBA','01');
	document.frm.prv.options[7] = new Option('PICOTA','07');
	document.frm.prv.options[8] = new Option('RIOJA','08');
	document.frm.prv.options[9] = new Option('SAN MARTIN','09');
	document.frm.prv.options[10] = new Option('TOCACHE','10');
}
if (document.frm.dep.value=='23'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CANDARAVE','02');
	document.frm.prv.options[2] = new Option('JORGE BASADRE','03');
	document.frm.prv.options[3] = new Option('TACNA','01');
	document.frm.prv.options[4] = new Option('TARATA','04');
}
if (document.frm.dep.value=='24'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('CONTRALMIRANTE VILLAR','02');
	document.frm.prv.options[2] = new Option('TUMBES','01');
	document.frm.prv.options[3] = new Option('ZARUMILLA','03');
}
if (document.frm.dep.value=='25'){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.length = 0;
	document.frm.prv.options[0] = new Option('Seleccione una','NN');
	document.frm.prv.options[1] = new Option('ATALAYA','02');
	document.frm.prv.options[2] = new Option('CORONEL PORTILLO','01');
	document.frm.prv.options[3] = new Option('PADRE ABAD','03');
	document.frm.prv.options[4] = new Option('PURUS','04');
}

	
}
function get_dis(){
	
	if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ARAMANGO','02');
	document.frm.dis.options[2] = new Option('COPALLIN','03');
	document.frm.dis.options[3] = new Option('EL PARCO','04');
	document.frm.dis.options[4] = new Option('IMAZA','05');
	document.frm.dis.options[5] = new Option('LA PECA','01');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHISQUILLA','02');
	document.frm.dis.options[2] = new Option('CHURUJA','03');
	document.frm.dis.options[3] = new Option('COROSHA','04');
	document.frm.dis.options[4] = new Option('CUISPES','05');
	document.frm.dis.options[5] = new Option('FLORIDA','06');
	document.frm.dis.options[6] = new Option('JAZAN','07');
	document.frm.dis.options[7] = new Option('JUMBILLA','01');
	document.frm.dis.options[8] = new Option('RECTA','08');
	document.frm.dis.options[9] = new Option('SAN CARLOS','09');
	document.frm.dis.options[10] = new Option('SHIPASBAMBA','10');
	document.frm.dis.options[11] = new Option('VALERA','11');
	document.frm.dis.options[12] = new Option('YAMBRASBAMBA','12');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ASUNCION','02');
	document.frm.dis.options[2] = new Option('BALSAS','03');
	document.frm.dis.options[3] = new Option('CHACHAPOYAS','01');
	document.frm.dis.options[4] = new Option('CHETO','04');
	document.frm.dis.options[5] = new Option('CHILIQUIN','05');
	document.frm.dis.options[6] = new Option('CHUQUIBAMBA','06');
	document.frm.dis.options[7] = new Option('GRANADA','07');
	document.frm.dis.options[8] = new Option('HUANCAS','08');
	document.frm.dis.options[9] = new Option('LA JALCA','09');
	document.frm.dis.options[10] = new Option('LEIMEBAMBA','10');
	document.frm.dis.options[11] = new Option('LEVANTO','11');
	document.frm.dis.options[12] = new Option('MAGDALENA','12');
	document.frm.dis.options[13] = new Option('MARISCAL CASTILLA','13');
	document.frm.dis.options[14] = new Option('MOLINOPAMPA','14');
	document.frm.dis.options[15] = new Option('MONTEVIDEO','15');
	document.frm.dis.options[16] = new Option('OLLEROS','16');
	document.frm.dis.options[17] = new Option('QUINJALCA','17');
	document.frm.dis.options[18] = new Option('SAN FRANCISCO DE DAGUAS','18');
	document.frm.dis.options[19] = new Option('SAN ISIDRO DE MAINO','19');
	document.frm.dis.options[20] = new Option('SOLOCO','20');
	document.frm.dis.options[21] = new Option('SONCHE','21');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('EL CENEPA','02');
	document.frm.dis.options[2] = new Option('NIEVA','01');
	document.frm.dis.options[3] = new Option('RIO SANTIAGO','03');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAMPORREDONDO','02');
	document.frm.dis.options[2] = new Option('COCABAMBA','03');
	document.frm.dis.options[3] = new Option('COLCAMAR','04');
	document.frm.dis.options[4] = new Option('CONILA','05');
	document.frm.dis.options[5] = new Option('INGUILPATA','06');
	document.frm.dis.options[6] = new Option('LAMUD','01');
	document.frm.dis.options[7] = new Option('LONGUITA','07');
	document.frm.dis.options[8] = new Option('LONYA CHICO','08');
	document.frm.dis.options[9] = new Option('LUYA','09');
	document.frm.dis.options[10] = new Option('LUYA VIEJO','10');
	document.frm.dis.options[11] = new Option('MARIA','11');
	document.frm.dis.options[12] = new Option('OCALLI','12');
	document.frm.dis.options[13] = new Option('OCUMAL','13');
	document.frm.dis.options[14] = new Option('PISUQUIA','14');
	document.frm.dis.options[15] = new Option('PROVIDENCIA','15');
	document.frm.dis.options[16] = new Option('SAN CRISTOBAL','16');
	document.frm.dis.options[17] = new Option('SAN FRANCISCO DEL YESO','17');
	document.frm.dis.options[18] = new Option('SAN JERONIMO','18');
	document.frm.dis.options[19] = new Option('SAN JUAN DE LOPECANCHA','19');
	document.frm.dis.options[20] = new Option('SANTA CATALINA','20');
	document.frm.dis.options[21] = new Option('SANTO TOMAS','21');
	document.frm.dis.options[22] = new Option('TINGO','22');
	document.frm.dis.options[23] = new Option('TRITA','23');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHIRIMOTO','02');
	document.frm.dis.options[2] = new Option('COCHAMAL','03');
	document.frm.dis.options[3] = new Option('HUAMBO','04');
	document.frm.dis.options[4] = new Option('LIMABAMBA','05');
	document.frm.dis.options[5] = new Option('LONGAR','06');
	document.frm.dis.options[6] = new Option('MARISCAL BENAVIDES','07');
	document.frm.dis.options[7] = new Option('MILPUC','08');
	document.frm.dis.options[8] = new Option('OMIA','09');
	document.frm.dis.options[9] = new Option('SAN NICOLAS','01');
	document.frm.dis.options[10] = new Option('SANTA ROSA','10');
	document.frm.dis.options[11] = new Option('TOTORA','11');
	document.frm.dis.options[12] = new Option('VISTA ALEGRE','12');
}
if ((document.frm.dep.value=='01')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BAGUA GRANDE','01');
	document.frm.dis.options[2] = new Option('CAJARURO','02');
	document.frm.dis.options[3] = new Option('CUMBA','03');
	document.frm.dis.options[4] = new Option('EL MILAGRO','04');
	document.frm.dis.options[5] = new Option('JAMALCA','05');
	document.frm.dis.options[6] = new Option('LONYA GRANDE','06');
	document.frm.dis.options[7] = new Option('YAMON','07');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AIJA','01');
	document.frm.dis.options[2] = new Option('CORIS','02');
	document.frm.dis.options[3] = new Option('HUACLLAN','03');
	document.frm.dis.options[4] = new Option('LA MERCED','04');
	document.frm.dis.options[5] = new Option('SUCCHA','05');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACZO','02');
	document.frm.dis.options[2] = new Option('CHACCHO','03');
	document.frm.dis.options[3] = new Option('CHINGAS','04');
	document.frm.dis.options[4] = new Option('LLAMELLIN','01');
	document.frm.dis.options[5] = new Option('MIRGAS','05');
	document.frm.dis.options[6] = new Option('SAN JUAN DE RONTOY','06');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOCHACA','02');
	document.frm.dis.options[2] = new Option('CHACAS','01');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ABELARDO PARDO LEZAMETA','02');
	document.frm.dis.options[2] = new Option('ANTONIO RAYMONDI','03');
	document.frm.dis.options[3] = new Option('AQUIA','04');
	document.frm.dis.options[4] = new Option('CAJACAY','05');
	document.frm.dis.options[5] = new Option('CANIS','06');
	document.frm.dis.options[6] = new Option('CHIQUIAN','01');
	document.frm.dis.options[7] = new Option('COLQUIOC','07');
	document.frm.dis.options[8] = new Option('HUALLANCA','08');
	document.frm.dis.options[9] = new Option('HUASTA','09');
	document.frm.dis.options[10] = new Option('HUAYLLACAYAN','10');
	document.frm.dis.options[11] = new Option('LA PRIMAVERA','11');
	document.frm.dis.options[12] = new Option('MANGAS','12');
	document.frm.dis.options[13] = new Option('PACLLON','13');
	document.frm.dis.options[14] = new Option('SAN MIGUEL DE CORPANQUI','14');
	document.frm.dis.options[15] = new Option('TICLLOS','15');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOPAMPA','02');
	document.frm.dis.options[2] = new Option('AMASHCA','03');
	document.frm.dis.options[3] = new Option('ANTA','04');
	document.frm.dis.options[4] = new Option('ATAQUERO','05');
	document.frm.dis.options[5] = new Option('CARHUAZ','01');
	document.frm.dis.options[6] = new Option('MARCARA','06');
	document.frm.dis.options[7] = new Option('PARIAHUANCA','07');
	document.frm.dis.options[8] = new Option('SAN MIGUEL DE ACO','08');
	document.frm.dis.options[9] = new Option('SHILLA','09');
	document.frm.dis.options[10] = new Option('TINCO','10');
	document.frm.dis.options[11] = new Option('YUNGAR','11');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('SAN LUIS','01');
	document.frm.dis.options[2] = new Option('SAN NICOLAS','02');
	document.frm.dis.options[3] = new Option('YAUYA','03');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BUENA VISTA ALTA','02');
	document.frm.dis.options[2] = new Option('CASMA','01');
	document.frm.dis.options[3] = new Option('COMANDANTE NOEL','03');
	document.frm.dis.options[4] = new Option('YAUTAN','04');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACO','02');
	document.frm.dis.options[2] = new Option('BAMBAS','03');
	document.frm.dis.options[3] = new Option('CORONGO','01');
	document.frm.dis.options[4] = new Option('CUSCA','04');
	document.frm.dis.options[5] = new Option('LA PAMPA','05');
	document.frm.dis.options[6] = new Option('YANAC','06');
	document.frm.dis.options[7] = new Option('YUPAN','07');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COCHABAMBA','02');
	document.frm.dis.options[2] = new Option('COLCABAMBA','03');
	document.frm.dis.options[3] = new Option('HUANCHAY','04');
	document.frm.dis.options[4] = new Option('HUARAZ','01');
	document.frm.dis.options[5] = new Option('INDEPENDENCIA','05');
	document.frm.dis.options[6] = new Option('JANGAS','06');
	document.frm.dis.options[7] = new Option('LA LIBERTAD','07');
	document.frm.dis.options[8] = new Option('OLLEROS','08');
	document.frm.dis.options[9] = new Option('PAMPAS','09');
	document.frm.dis.options[10] = new Option('PARIACOTO','10');
	document.frm.dis.options[11] = new Option('PIRA','11');
	document.frm.dis.options[12] = new Option('TARICA','12');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANRA','02');
	document.frm.dis.options[2] = new Option('CAJAY','03');
	document.frm.dis.options[3] = new Option('CHAVIN DE HUANTAR','04');
	document.frm.dis.options[4] = new Option('HUACACHI','05');
	document.frm.dis.options[5] = new Option('HUACCHIS','06');
	document.frm.dis.options[6] = new Option('HUACHIS','07');
	document.frm.dis.options[7] = new Option('HUANTAR','08');
	document.frm.dis.options[8] = new Option('HUARI','01');
	document.frm.dis.options[9] = new Option('MASIN','09');
	document.frm.dis.options[10] = new Option('PAUCAS','10');
	document.frm.dis.options[11] = new Option('PONTO','11');
	document.frm.dis.options[12] = new Option('RAHUAPAMPA','12');
	document.frm.dis.options[13] = new Option('RAPAYAN','13');
	document.frm.dis.options[14] = new Option('SAN MARCOS','14');
	document.frm.dis.options[15] = new Option('SAN PEDRO DE CHANA','15');
	document.frm.dis.options[16] = new Option('UCO','16');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COCHAPETI','02');
	document.frm.dis.options[2] = new Option('CULEBRAS','03');
	document.frm.dis.options[3] = new Option('HUARMEY','01');
	document.frm.dis.options[4] = new Option('HUAYAN','04');
	document.frm.dis.options[5] = new Option('MALVAS','05');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='12')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CARAZ','01');
	document.frm.dis.options[2] = new Option('HUALLANCA','02');
	document.frm.dis.options[3] = new Option('HUATA','03');
	document.frm.dis.options[4] = new Option('HUAYLAS','04');
	document.frm.dis.options[5] = new Option('MATO','05');
	document.frm.dis.options[6] = new Option('PAMPAROMAS','06');
	document.frm.dis.options[7] = new Option('PUEBLO LIBRE','07');
	document.frm.dis.options[8] = new Option('SANTA CRUZ','08');
	document.frm.dis.options[9] = new Option('SANTO TORIBIO','09');
	document.frm.dis.options[10] = new Option('YURACMARCA','10');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='13')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CASCA','02');
	document.frm.dis.options[2] = new Option('ELEAZAR GUZMAN BARRON','03');
	document.frm.dis.options[3] = new Option('FIDEL OLIVAS ESCUDERO','04');
	document.frm.dis.options[4] = new Option('LLAMA','05');
	document.frm.dis.options[5] = new Option('LLUMPA','06');
	document.frm.dis.options[6] = new Option('LUCMA','07');
	document.frm.dis.options[7] = new Option('MUSGA','08');
	document.frm.dis.options[8] = new Option('PISCOBAMBA','01');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='14')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACAS','02');
	document.frm.dis.options[2] = new Option('CAJAMARQUILLA','03');
	document.frm.dis.options[3] = new Option('CARHUAPAMPA','04');
	document.frm.dis.options[4] = new Option('COCHAS','05');
	document.frm.dis.options[5] = new Option('CONGAS','06');
	document.frm.dis.options[6] = new Option('LLIPA','07');
	document.frm.dis.options[7] = new Option('OCROS','01');
	document.frm.dis.options[8] = new Option('SAN CRISTOBAL DE RAJAN','08');
	document.frm.dis.options[9] = new Option('SAN PEDRO','09');
	document.frm.dis.options[10] = new Option('SANTIAGO DE CHILCAS','10');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='15')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BOLOGNESI','02');
	document.frm.dis.options[2] = new Option('CABANA','01');
	document.frm.dis.options[3] = new Option('CONCHUCOS','03');
	document.frm.dis.options[4] = new Option('HUACASCHUQUE','04');
	document.frm.dis.options[5] = new Option('HUANDOVAL','05');
	document.frm.dis.options[6] = new Option('LACABAMBA','06');
	document.frm.dis.options[7] = new Option('LLAPO','07');
	document.frm.dis.options[8] = new Option('PALLASCA','08');
	document.frm.dis.options[9] = new Option('PAMPAS','09');
	document.frm.dis.options[10] = new Option('SANTA ROSA','10');
	document.frm.dis.options[11] = new Option('TAUCA','11');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='16')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('HUAYLLAN','02');
	document.frm.dis.options[2] = new Option('PAROBAMBA','03');
	document.frm.dis.options[3] = new Option('POMABAMBA','01');
	document.frm.dis.options[4] = new Option('QUINUABAMBA','04');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='17')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CATAC','02');
	document.frm.dis.options[2] = new Option('COTAPARACO','03');
	document.frm.dis.options[3] = new Option('HUAYLLAPAMPA','04');
	document.frm.dis.options[4] = new Option('LLACLLIN','05');
	document.frm.dis.options[5] = new Option('MARCA','06');
	document.frm.dis.options[6] = new Option('PAMPAS CHICO','07');
	document.frm.dis.options[7] = new Option('PARARIN','08');
	document.frm.dis.options[8] = new Option('RECUAY','01');
	document.frm.dis.options[9] = new Option('TAPACOCHA','09');
	document.frm.dis.options[10] = new Option('TICAPAMPA','10');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='18')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CACERES DEL PERU','02');
	document.frm.dis.options[2] = new Option('CHIMBOTE','01');
	document.frm.dis.options[3] = new Option('COISHCO','03');
	document.frm.dis.options[4] = new Option('MACATE','04');
	document.frm.dis.options[5] = new Option('MORO','05');
	document.frm.dis.options[6] = new Option('NEPENA','06');
	document.frm.dis.options[7] = new Option('NUEVO CHIMBOTE','09');
	document.frm.dis.options[8] = new Option('SAMANCO','07');
	document.frm.dis.options[9] = new Option('SANTA','08');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='19')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOBAMBA','02');
	document.frm.dis.options[2] = new Option('ALFONSO UGARTE','03');
	document.frm.dis.options[3] = new Option('CASHAPAMPA','04');
	document.frm.dis.options[4] = new Option('CHINGALPO','05');
	document.frm.dis.options[5] = new Option('HUAYLLABAMBA','06');
	document.frm.dis.options[6] = new Option('QUICHES','07');
	document.frm.dis.options[7] = new Option('RAGASH','08');
	document.frm.dis.options[8] = new Option('SAN JUAN','09');
	document.frm.dis.options[9] = new Option('SICSIBAMBA','10');
	document.frm.dis.options[10] = new Option('SIHUAS','01');
}
if ((document.frm.dep.value=='02')&&(document.frm.prv.value=='20')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CASCAPARA','02');
	document.frm.dis.options[2] = new Option('MANCOS','03');
	document.frm.dis.options[3] = new Option('MATACOTO','04');
	document.frm.dis.options[4] = new Option('QUILLO','05');
	document.frm.dis.options[5] = new Option('RANRAHIRCA','06');
	document.frm.dis.options[6] = new Option('SHUPLUY','07');
	document.frm.dis.options[7] = new Option('YANAMA','08');
	document.frm.dis.options[8] = new Option('YUNGAY','01');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ABANCAY','01');
	document.frm.dis.options[2] = new Option('CHACOCHE','02');
	document.frm.dis.options[3] = new Option('CIRCA','03');
	document.frm.dis.options[4] = new Option('CURAHUASI','04');
	document.frm.dis.options[5] = new Option('HUANIPACA','05');
	document.frm.dis.options[6] = new Option('LAMBRAMA','06');
	document.frm.dis.options[7] = new Option('PICHIRHUA','07');
	document.frm.dis.options[8] = new Option('SAN PEDRO DE CACHORA','08');
	document.frm.dis.options[9] = new Option('TAMBURCO','09');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDAHUAYLAS','01');
	document.frm.dis.options[2] = new Option('ANDARAPA','02');
	document.frm.dis.options[3] = new Option('CHIARA','03');
	document.frm.dis.options[4] = new Option('HUANCARAMA','04');
	document.frm.dis.options[5] = new Option('HUANCARAY','05');
	document.frm.dis.options[6] = new Option('HUAYANA','06');
	document.frm.dis.options[7] = new Option('KAQUIABAMBA','19');
	document.frm.dis.options[8] = new Option('KISHUARA','07');
	document.frm.dis.options[9] = new Option('PACOBAMBA','08');
	document.frm.dis.options[10] = new Option('PACUCHA','09');
	document.frm.dis.options[11] = new Option('PAMPACHIRI','10');
	document.frm.dis.options[12] = new Option('POMACOCHA','11');
	document.frm.dis.options[13] = new Option('SAN ANTONIO DE CACHI','12');
	document.frm.dis.options[14] = new Option('SAN JERONIMO','13');
	document.frm.dis.options[15] = new Option('SAN MIGUEL DE CHACCRAMPA','14');
	document.frm.dis.options[16] = new Option('SANTA MARIA DE CHICMO','15');
	document.frm.dis.options[17] = new Option('TALAVERA','16');
	document.frm.dis.options[18] = new Option('TUMAY HUARACA','17');
	document.frm.dis.options[19] = new Option('TURPO','18');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANTABAMBA','01');
	document.frm.dis.options[2] = new Option('EL ORO','02');
	document.frm.dis.options[3] = new Option('HUAQUIRCA','03');
	document.frm.dis.options[4] = new Option('JUAN ESPINOZA MEDRANO','04');
	document.frm.dis.options[5] = new Option('OROPESA','05');
	document.frm.dis.options[6] = new Option('PACHACONAS','06');
	document.frm.dis.options[7] = new Option('SABAINO','07');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAPAYA','02');
	document.frm.dis.options[2] = new Option('CARAYBAMBA','03');
	document.frm.dis.options[3] = new Option('CHALHUANCA','01');
	document.frm.dis.options[4] = new Option('CHAPIMARCA','04');
	document.frm.dis.options[5] = new Option('COLCABAMBA','05');
	document.frm.dis.options[6] = new Option('COTARUSE','06');
	document.frm.dis.options[7] = new Option('HUAYLLO','07');
	document.frm.dis.options[8] = new Option('JUSTO APU SAHUARAURA','08');
	document.frm.dis.options[9] = new Option('LUCRE','09');
	document.frm.dis.options[10] = new Option('POCOHUANCA','10');
	document.frm.dis.options[11] = new Option('SAN JUAN DE CHACÑA','11');
	document.frm.dis.options[12] = new Option('SANAYCA','12');
	document.frm.dis.options[13] = new Option('SORAYA','13');
	document.frm.dis.options[14] = new Option('TAPAIRIHUA','14');
	document.frm.dis.options[15] = new Option('TINTAY','15');
	document.frm.dis.options[16] = new Option('TORAYA','16');
	document.frm.dis.options[17] = new Option('YANACA','17');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCO-HUALLO','02');
	document.frm.dis.options[2] = new Option('CHINCHEROS','01');
	document.frm.dis.options[3] = new Option('COCHARCAS','03');
	document.frm.dis.options[4] = new Option('HUACCANA','04');
	document.frm.dis.options[5] = new Option('OCOBAMBA','05');
	document.frm.dis.options[6] = new Option('ONGOY','06');
	document.frm.dis.options[7] = new Option('RANRACANCHA','08');
	document.frm.dis.options[8] = new Option('URANMARCA','07');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHALLHUAHUACHO','06');
	document.frm.dis.options[2] = new Option('COTABAMBAS','02');
	document.frm.dis.options[3] = new Option('COYLLURQUI','03');
	document.frm.dis.options[4] = new Option('HAQUIRA','04');
	document.frm.dis.options[5] = new Option('MARA','05');
	document.frm.dis.options[6] = new Option('TAMBOBAMBA','01');
}
if ((document.frm.dep.value=='03')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHUQUIBAMBILLA','01');
	document.frm.dis.options[2] = new Option('CURASCO','14');
	document.frm.dis.options[3] = new Option('CURPAHUASI','02');
	document.frm.dis.options[4] = new Option('GAMARRA','03');
	document.frm.dis.options[5] = new Option('HUAYLLATI','04');
	document.frm.dis.options[6] = new Option('MAMARA','05');
	document.frm.dis.options[7] = new Option('MICAELA BASTIDAS','06');
	document.frm.dis.options[8] = new Option('PATAYPAMPA','07');
	document.frm.dis.options[9] = new Option('PROGRESO','08');
	document.frm.dis.options[10] = new Option('SAN ANTONIO','09');
	document.frm.dis.options[11] = new Option('SANTA ROSA','10');
	document.frm.dis.options[12] = new Option('TURPAY','11');
	document.frm.dis.options[13] = new Option('VILCABAMBA','12');
	document.frm.dis.options[14] = new Option('VIRUNDO','13');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO SELVA ALEGRE','02');
	document.frm.dis.options[2] = new Option('AREQUIPA','01');
	document.frm.dis.options[3] = new Option('CAYMA','03');
	document.frm.dis.options[4] = new Option('CERRO COLORADO','04');
	document.frm.dis.options[5] = new Option('CHARACATO','05');
	document.frm.dis.options[6] = new Option('CHIGUATA','06');
	document.frm.dis.options[7] = new Option('JACOBO HUNTER','07');
	document.frm.dis.options[8] = new Option('J.L.BUSTAMANTE Y RIVERO','29');
	document.frm.dis.options[9] = new Option('LA JOYA','08');
	document.frm.dis.options[10] = new Option('MARIANO MELGAR','09');
	document.frm.dis.options[11] = new Option('MIRAFLORES','10');
	document.frm.dis.options[12] = new Option('MOLLEBAYA','11');
	document.frm.dis.options[13] = new Option('PAUCARPATA','12');
	document.frm.dis.options[14] = new Option('POCSI','13');
	document.frm.dis.options[15] = new Option('POLOBAYA','14');
	document.frm.dis.options[16] = new Option('QUEQUENA','15');
	document.frm.dis.options[17] = new Option('SABANDIA','16');
	document.frm.dis.options[18] = new Option('SACHACA','17');
	document.frm.dis.options[19] = new Option('SAN JUAN DE SIGUAS','18');
	document.frm.dis.options[20] = new Option('SAN JUAN DE TARUCANI','19');
	document.frm.dis.options[21] = new Option('SANTA ISABEL DE SIGUAS','20');
	document.frm.dis.options[22] = new Option('SANTA RITA DE SIGUAS','21');
	document.frm.dis.options[23] = new Option('SOCABAYA','22');
	document.frm.dis.options[24] = new Option('TIABAYA','23');
	document.frm.dis.options[25] = new Option('UCHUMAYO','24');
	document.frm.dis.options[26] = new Option('VITOR (8)','25');
	document.frm.dis.options[27] = new Option('YANAHUARA','26');
	document.frm.dis.options[28] = new Option('YARABAMBA','27');
	document.frm.dis.options[29] = new Option('YURA','28');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAMANA','01');
	document.frm.dis.options[2] = new Option('JOSE MARIA QUIMPER','02');
	document.frm.dis.options[3] = new Option('MARIANO NICOLAS VALCARCEL','03');
	document.frm.dis.options[4] = new Option('MARISCAL CACERES','04');
	document.frm.dis.options[5] = new Option('NICOLAS DE PIEROLA','05');
	document.frm.dis.options[6] = new Option('OCONA','06');
	document.frm.dis.options[7] = new Option('QUILCA','07');
	document.frm.dis.options[8] = new Option('SAMUEL PASTOR','08');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACARI','02');
	document.frm.dis.options[2] = new Option('ATICO','03');
	document.frm.dis.options[3] = new Option('ATIQUIPA','04');
	document.frm.dis.options[4] = new Option('BELLA UNION','05');
	document.frm.dis.options[5] = new Option('CAHUACHO','06');
	document.frm.dis.options[6] = new Option('CARAVELI','01');
	document.frm.dis.options[7] = new Option('CHALA','07');
	document.frm.dis.options[8] = new Option('CHAPARRA','08');
	document.frm.dis.options[9] = new Option('HUANUHUANU','09');
	document.frm.dis.options[10] = new Option('JAQUI','10');
	document.frm.dis.options[11] = new Option('LOMAS','11');
	document.frm.dis.options[12] = new Option('QUICACHA','12');
	document.frm.dis.options[13] = new Option('YAUCA','13');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDAGUA','02');
	document.frm.dis.options[2] = new Option('APLAO','01');
	document.frm.dis.options[3] = new Option('AYO','03');
	document.frm.dis.options[4] = new Option('CHACHAS','04');
	document.frm.dis.options[5] = new Option('CHILCAYMARCA','05');
	document.frm.dis.options[6] = new Option('CHOCO','06');
	document.frm.dis.options[7] = new Option('HUANCARQUI','07');
	document.frm.dis.options[8] = new Option('MACHAGUAY','08');
	document.frm.dis.options[9] = new Option('ORCOPAMPA','09');
	document.frm.dis.options[10] = new Option('PAMPACOLCA','10');
	document.frm.dis.options[11] = new Option('TIPAN','11');
	document.frm.dis.options[12] = new Option('UNON','12');
	document.frm.dis.options[13] = new Option('URACA','13');
	document.frm.dis.options[14] = new Option('VIRACO','14');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACHOMA','02');
	document.frm.dis.options[2] = new Option('CABANACONDE','03');
	document.frm.dis.options[3] = new Option('CALLALLI','04');
	document.frm.dis.options[4] = new Option('CAYLLOMA','05');
	document.frm.dis.options[5] = new Option('CHIVAY','01');
	document.frm.dis.options[6] = new Option('COPORAQUE','06');
	document.frm.dis.options[7] = new Option('HUAMBO','07');
	document.frm.dis.options[8] = new Option('HUANCA','08');
	document.frm.dis.options[9] = new Option('ICHUPAMPA','09');
	document.frm.dis.options[10] = new Option('LARI','10');
	document.frm.dis.options[11] = new Option('LLUTA','11');
	document.frm.dis.options[12] = new Option('MACA','12');
	document.frm.dis.options[13] = new Option('MADRIGAL','13');
	document.frm.dis.options[14] = new Option('MAJES','20');
	document.frm.dis.options[15] = new Option('SAN ANTONIO DE CHUCA (9)','14');
	document.frm.dis.options[16] = new Option('SIBAYO','15');
	document.frm.dis.options[17] = new Option('TAPAY','16');
	document.frm.dis.options[18] = new Option('TISCO','17');
	document.frm.dis.options[19] = new Option('TUTI','18');
	document.frm.dis.options[20] = new Option('YANQUE','19');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDARAY','02');
	document.frm.dis.options[2] = new Option('CAYARANI','03');
	document.frm.dis.options[3] = new Option('CHICHAS','04');
	document.frm.dis.options[4] = new Option('CHUQUIBAMBA','01');
	document.frm.dis.options[5] = new Option('IRAY','05');
	document.frm.dis.options[6] = new Option('RIO GRANDE','06');
	document.frm.dis.options[7] = new Option('SALAMANCA','07');
	document.frm.dis.options[8] = new Option('YANAQUIHUA','08');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COCACHACRA','02');
	document.frm.dis.options[2] = new Option('DEAN VALDIVIA','03');
	document.frm.dis.options[3] = new Option('ISLAY','04');
	document.frm.dis.options[4] = new Option('MEJIA','05');
	document.frm.dis.options[5] = new Option('MOLLENDO','01');
	document.frm.dis.options[6] = new Option('PUNTA DE BOMBON','06');
}
if ((document.frm.dep.value=='04')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALCA','02');
	document.frm.dis.options[2] = new Option('CHARCANA','03');
	document.frm.dis.options[3] = new Option('COTAHUASI','01');
	document.frm.dis.options[4] = new Option('HUAYNACOTAS','04');
	document.frm.dis.options[5] = new Option('PAMPAMARCA','05');
	document.frm.dis.options[6] = new Option('PUYCA','06');
	document.frm.dis.options[7] = new Option('QUECHUALLA','07');
	document.frm.dis.options[8] = new Option('SAYLA','08');
	document.frm.dis.options[9] = new Option('TAURIA','09');
	document.frm.dis.options[10] = new Option('TOMEPAMPA','10');
	document.frm.dis.options[11] = new Option('TORO','11');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CANGALLO','01');
	document.frm.dis.options[2] = new Option('CHUSCHI','02');
	document.frm.dis.options[3] = new Option('LOS MOROCHUCOS','03');
	document.frm.dis.options[4] = new Option('MARIA PARADO DE BELLIDO','04');
	document.frm.dis.options[5] = new Option('PARAS','05');
	document.frm.dis.options[6] = new Option('TOTOS','06');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOCRO','02');
	document.frm.dis.options[2] = new Option('ACOS VINCHOS','03');
	document.frm.dis.options[3] = new Option('AYACUCHO','01');
	document.frm.dis.options[4] = new Option('CARMEN ALTO','04');
	document.frm.dis.options[5] = new Option('CHIARA','05');
	document.frm.dis.options[6] = new Option('JESUS NAZARENO','15');
	document.frm.dis.options[7] = new Option('OCROS','06');
	document.frm.dis.options[8] = new Option('PACAYCASA','07');
	document.frm.dis.options[9] = new Option('QUINUA','08');
	document.frm.dis.options[10] = new Option('SAN JOSE DE TICLLAS','09');
	document.frm.dis.options[11] = new Option('SAN JUAN BAUTISTA','10');
	document.frm.dis.options[12] = new Option('SANTIAGO DE PISCHA','11');
	document.frm.dis.options[13] = new Option('SOCOS','12');
	document.frm.dis.options[14] = new Option('TAMBILLO','13');
	document.frm.dis.options[15] = new Option('VINCHOS','14');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CARAPO','02');
	document.frm.dis.options[2] = new Option('SACSAMARCA','03');
	document.frm.dis.options[3] = new Option('SANCOS','01');
	document.frm.dis.options[4] = new Option('SANTIAGO DE LUCANAMARCA','04');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AYAHUANCO','02');
	document.frm.dis.options[2] = new Option('HUAMANGUILLA','03');
	document.frm.dis.options[3] = new Option('HUANTA','01');
	document.frm.dis.options[4] = new Option('IGUAIN','04');
	document.frm.dis.options[5] = new Option('LLOCHEGUA','08');
	document.frm.dis.options[6] = new Option('LURICOCHA','05');
	document.frm.dis.options[7] = new Option('SANTILLANA','06');
	document.frm.dis.options[8] = new Option('SIVIA','07');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCO','02');
	document.frm.dis.options[2] = new Option('AYNA','03');
	document.frm.dis.options[3] = new Option('CHILCAS','04');
	document.frm.dis.options[4] = new Option('CHUNGUI','05');
	document.frm.dis.options[5] = new Option('LUIS CARRANZA','06');
	document.frm.dis.options[6] = new Option('SAN MIGUEL','01');
	document.frm.dis.options[7] = new Option('SANTA ROSA','07');
	document.frm.dis.options[8] = new Option('TAMBO','08');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AUCARA','02');
	document.frm.dis.options[2] = new Option('CABANA','03');
	document.frm.dis.options[3] = new Option('CARMEN SALCEDO','04');
	document.frm.dis.options[4] = new Option('CHAVINA','05');
	document.frm.dis.options[5] = new Option('CHIPAO','06');
	document.frm.dis.options[6] = new Option('HUAC-HUAS','07');
	document.frm.dis.options[7] = new Option('LARAMATE','08');
	document.frm.dis.options[8] = new Option('LEONCIO PRADO','09');
	document.frm.dis.options[9] = new Option('LLAUTA','10');
	document.frm.dis.options[10] = new Option('LUCANAS','11');
	document.frm.dis.options[11] = new Option('OCANA','12');
	document.frm.dis.options[12] = new Option('OTOCA','13');
	document.frm.dis.options[13] = new Option('PUQUIO','01');
	document.frm.dis.options[14] = new Option('SAISA','14');
	document.frm.dis.options[15] = new Option('SAN CRISTOBAL','15');
	document.frm.dis.options[16] = new Option('SAN JUAN','16');
	document.frm.dis.options[17] = new Option('SAN PEDRO','17');
	document.frm.dis.options[18] = new Option('SAN PEDRO DE PALCO','18');
	document.frm.dis.options[19] = new Option('SANCOS','19');
	document.frm.dis.options[20] = new Option('SANTA ANA DE HUAYCAHUACHO','20');
	document.frm.dis.options[21] = new Option('SANTA LUCIA','21');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHUMPI','02');
	document.frm.dis.options[2] = new Option('CORACORA','01');
	document.frm.dis.options[3] = new Option('CORONEL CASTANEDA','03');
	document.frm.dis.options[4] = new Option('PACAPAUSA','04');
	document.frm.dis.options[5] = new Option('PULLO','05');
	document.frm.dis.options[6] = new Option('PUYUSCA','06');
	document.frm.dis.options[7] = new Option('SAN FRANCISCO DE RAVACAYC','07');
	document.frm.dis.options[8] = new Option('UPAHUACHO','08');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COLTA','02');
	document.frm.dis.options[2] = new Option('CORCULLA','03');
	document.frm.dis.options[3] = new Option('LAMPA','04');
	document.frm.dis.options[4] = new Option('MARCABAMBA','05');
	document.frm.dis.options[5] = new Option('OYOLO','06');
	document.frm.dis.options[6] = new Option('PARARCA','07');
	document.frm.dis.options[7] = new Option('PAUSA','01');
	document.frm.dis.options[8] = new Option('SAN JAVIER DE ALPABAMBA','08');
	document.frm.dis.options[9] = new Option('SAN JOSE DE USHUA','09');
	document.frm.dis.options[10] = new Option('SARA SARA','10');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BELEN','02');
	document.frm.dis.options[2] = new Option('CHALCOS','03');
	document.frm.dis.options[3] = new Option('CHILCAYOC','04');
	document.frm.dis.options[4] = new Option('HUACANA','05');
	document.frm.dis.options[5] = new Option('MORCOLLA','06');
	document.frm.dis.options[6] = new Option('PAICO','07');
	document.frm.dis.options[7] = new Option('QUEROBAMBA','01');
	document.frm.dis.options[8] = new Option('SAN PEDRO DE LARCAY','08');
	document.frm.dis.options[9] = new Option('SAN SALVADOR DE QUIJE','09');
	document.frm.dis.options[10] = new Option('SANTIAGO DE PAUCARAY','10');
	document.frm.dis.options[11] = new Option('SORAS','11');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALCAMENCA','02');
	document.frm.dis.options[2] = new Option('APONGO','03');
	document.frm.dis.options[3] = new Option('ASQUIPATA','04');
	document.frm.dis.options[4] = new Option('CANARIA','05');
	document.frm.dis.options[5] = new Option('CAYARA','06');
	document.frm.dis.options[6] = new Option('COLCA','07');
	document.frm.dis.options[7] = new Option('HUAMANQUIQUIA','08');
	document.frm.dis.options[8] = new Option('HUANCAPI','01');
	document.frm.dis.options[9] = new Option('HUANCARAYLLA','09');
	document.frm.dis.options[10] = new Option('HUAYA','10');
	document.frm.dis.options[11] = new Option('SARHUA','11');
	document.frm.dis.options[12] = new Option('VILCANCHOS','12');
}
if ((document.frm.dep.value=='05')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACCOMARCA','02');
	document.frm.dis.options[2] = new Option('CARHUANCA','03');
	document.frm.dis.options[3] = new Option('CONCEPCION','04');
	document.frm.dis.options[4] = new Option('HUAMBALPA','05');
	document.frm.dis.options[5] = new Option('INDEPENDENCIA','06');
	document.frm.dis.options[6] = new Option('SAURAMA','07');
	document.frm.dis.options[7] = new Option('VILCAS HUAMAN','01');
	document.frm.dis.options[8] = new Option('VISCHONGO','08');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CACHACHI','02');
	document.frm.dis.options[2] = new Option('CAJABAMBA','01');
	document.frm.dis.options[3] = new Option('CONDEBAMBA','03');
	document.frm.dis.options[4] = new Option('SITACOCHA','04');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ASUNCION','02');
	document.frm.dis.options[2] = new Option('CAJAMARCA','01');
	document.frm.dis.options[3] = new Option('CHETILLA','03');
	document.frm.dis.options[4] = new Option('COSPAN','04');
	document.frm.dis.options[5] = new Option('ENCANADA','05');
	document.frm.dis.options[6] = new Option('JESUS','06');
	document.frm.dis.options[7] = new Option('LLACANORA','07');
	document.frm.dis.options[8] = new Option('LOS BANOS DEL INCA','08');
	document.frm.dis.options[9] = new Option('MAGDALENA','09');
	document.frm.dis.options[10] = new Option('MATARA','10');
	document.frm.dis.options[11] = new Option('NAMORA','11');
	document.frm.dis.options[12] = new Option('SAN JUAN','12');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CELENDIN','01');
	document.frm.dis.options[2] = new Option('CHUMUCH','02');
	document.frm.dis.options[3] = new Option('CORTEGANA','03');
	document.frm.dis.options[4] = new Option('HUASMIN','04');
	document.frm.dis.options[5] = new Option('JORGE CHAVEZ','05');
	document.frm.dis.options[6] = new Option('JOSE GALVEZ','06');
	document.frm.dis.options[7] = new Option('LA LIBERTAD DE PALLAN','12');
	document.frm.dis.options[8] = new Option('MIGUEL IGLESIAS','07');
	document.frm.dis.options[9] = new Option('OXAMARCA','08');
	document.frm.dis.options[10] = new Option('SOROCHUCO','09');
	document.frm.dis.options[11] = new Option('SUCRE','10');
	document.frm.dis.options[12] = new Option('UTCO','11');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANGUIA','02');
	document.frm.dis.options[2] = new Option('CHADIN','03');
	document.frm.dis.options[3] = new Option('CHALAMARCA','19');
	document.frm.dis.options[4] = new Option('CHIGUIRIP','04');
	document.frm.dis.options[5] = new Option('CHIMBAN','05');
	document.frm.dis.options[6] = new Option('CHOROPAMPA','06');
	document.frm.dis.options[7] = new Option('CHOTA','01');
	document.frm.dis.options[8] = new Option('COCHABAMBA','07');
	document.frm.dis.options[9] = new Option('CONCHAN','08');
	document.frm.dis.options[10] = new Option('HUAMBOS','09');
	document.frm.dis.options[11] = new Option('LAJAS','10');
	document.frm.dis.options[12] = new Option('LLAMA','11');
	document.frm.dis.options[13] = new Option('MIRACOSTA','12');
	document.frm.dis.options[14] = new Option('PACCHA','13');
	document.frm.dis.options[15] = new Option('PION','14');
	document.frm.dis.options[16] = new Option('QUEROCOTO','15');
	document.frm.dis.options[17] = new Option('SAN JUAN DE LICUPIS','16');
	document.frm.dis.options[18] = new Option('TACABAMBA','17');
	document.frm.dis.options[19] = new Option('TOCMOCHE','18');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHILETE','02');
	document.frm.dis.options[2] = new Option('CONTUMAZA','01');
	document.frm.dis.options[3] = new Option('CUPISNIQUE','03');
	document.frm.dis.options[4] = new Option('GUZMANGO','04');
	document.frm.dis.options[5] = new Option('SAN BENITO','05');
	document.frm.dis.options[6] = new Option('SANTA CRUZ DE TOLED','06');
	document.frm.dis.options[7] = new Option('TANTARICA','07');
	document.frm.dis.options[8] = new Option('YONAN','08');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CALLAYUC','02');
	document.frm.dis.options[2] = new Option('CHOROS','03');
	document.frm.dis.options[3] = new Option('CUJILLO','04');
	document.frm.dis.options[4] = new Option('CUTERVO','01');
	document.frm.dis.options[5] = new Option('LA RAMADA','05');
	document.frm.dis.options[6] = new Option('PIMPINGOS','06');
	document.frm.dis.options[7] = new Option('QUEROCOTILLO','07');
	document.frm.dis.options[8] = new Option('SAN ANDRES DE CUTERVO','08');
	document.frm.dis.options[9] = new Option('SAN JUAN DE CUTERVO','09');
	document.frm.dis.options[10] = new Option('SAN LUIS DE LUCMA','10');
	document.frm.dis.options[11] = new Option('SANTA CRUZ','11');
	document.frm.dis.options[12] = new Option('SANTO DOMINGO DE LA CAPIL','12');
	document.frm.dis.options[13] = new Option('SANTO TOMAS','13');
	document.frm.dis.options[14] = new Option('SOCOTA','14');
	document.frm.dis.options[15] = new Option('TORIBIO CASANOVA','15');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BAMBAMARCA','01');
	document.frm.dis.options[2] = new Option('CHUGUR','02');
	document.frm.dis.options[3] = new Option('HUALGAYOC','03');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BELLAVISTA','02');
	document.frm.dis.options[2] = new Option('CHONTALI','03');
	document.frm.dis.options[3] = new Option('COLASAY','04');
	document.frm.dis.options[4] = new Option('HUABAL','05');
	document.frm.dis.options[5] = new Option('JAEN','01');
	document.frm.dis.options[6] = new Option('LAS PIRIAS','06');
	document.frm.dis.options[7] = new Option('POMAHUACA','07');
	document.frm.dis.options[8] = new Option('PUCARA','08');
	document.frm.dis.options[9] = new Option('SALLIQUE','09');
	document.frm.dis.options[10] = new Option('SAN FELIPE','10');
	document.frm.dis.options[11] = new Option('SAN JOSE DEL ALTO','11');
	document.frm.dis.options[12] = new Option('SANTA ROSA','12');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHIRINOS','02');
	document.frm.dis.options[2] = new Option('HUARANGO','03');
	document.frm.dis.options[3] = new Option('LA COIPA','04');
	document.frm.dis.options[4] = new Option('NAMBALLE','05');
	document.frm.dis.options[5] = new Option('SAN IGNACIO','01');
	document.frm.dis.options[6] = new Option('SAN JOSE DE LOURDES','06');
	document.frm.dis.options[7] = new Option('TABACONAS','07');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHANCAY','02');
	document.frm.dis.options[2] = new Option('EDUARDO VILLANUEVA','03');
	document.frm.dis.options[3] = new Option('GREGORIO PITA','04');
	document.frm.dis.options[4] = new Option('ICHOCAN','05');
	document.frm.dis.options[5] = new Option('JOSE MANUEL QUIROZ','06');
	document.frm.dis.options[6] = new Option('JOSE SABOGAL','07');
	document.frm.dis.options[7] = new Option('PEDRO GALVEZ','01');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BOLIVAR','02');
	document.frm.dis.options[2] = new Option('CALQUIS','03');
	document.frm.dis.options[3] = new Option('CATILLUC','04');
	document.frm.dis.options[4] = new Option('EL PRADO','05');
	document.frm.dis.options[5] = new Option('LA FLORIDA','06');
	document.frm.dis.options[6] = new Option('LLAPA','07');
	document.frm.dis.options[7] = new Option('NANCHOC','08');
	document.frm.dis.options[8] = new Option('NIEPOS','09');
	document.frm.dis.options[9] = new Option('SAN GREGORIO','10');
	document.frm.dis.options[10] = new Option('SAN MIGUEL','01');
	document.frm.dis.options[11] = new Option('SAN SILVESTRE DE COCHAN','11');
	document.frm.dis.options[12] = new Option('TONGOD','12');
	document.frm.dis.options[13] = new Option('UNION AGUA BLANCA','13');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='12')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('SAN BERNARDINO','02');
	document.frm.dis.options[2] = new Option('SAN LUIS','03');
	document.frm.dis.options[3] = new Option('SAN PABLO','01');
	document.frm.dis.options[4] = new Option('TUMBADEN','04');
}
if ((document.frm.dep.value=='06')&&(document.frm.prv.value=='13')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDABAMBA','02');
	document.frm.dis.options[2] = new Option('CATACHE','03');
	document.frm.dis.options[3] = new Option('CHANCAYBANOS','04');
	document.frm.dis.options[4] = new Option('LA ESPERANZA','05');
	document.frm.dis.options[5] = new Option('NINABAMBA','06');
	document.frm.dis.options[6] = new Option('PULAN','07');
	document.frm.dis.options[7] = new Option('SANTA CRUZ','01');
	document.frm.dis.options[8] = new Option('SAUCEPAMPA','08');
	document.frm.dis.options[9] = new Option('SEXI','09');
	document.frm.dis.options[10] = new Option('UTICYACU','10');
	document.frm.dis.options[11] = new Option('YAUYUCAN','11');
}
if ((document.frm.dep.value=='07')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BELLAVISTA','02');
	document.frm.dis.options[2] = new Option('CALLAO','01');
	document.frm.dis.options[3] = new Option('CARMEN DE LA LEGUA','03');
	document.frm.dis.options[4] = new Option('LA PERLA','04');
	document.frm.dis.options[5] = new Option('LA PUNTA','05');
	document.frm.dis.options[6] = new Option('VENTANILLA','06');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOMAYO','01');
	document.frm.dis.options[2] = new Option('ACOPIA','02');
	document.frm.dis.options[3] = new Option('ACOS','03');
	document.frm.dis.options[4] = new Option('MOSOC LLACTA','04');
	document.frm.dis.options[5] = new Option('POMACANCHI','05');
	document.frm.dis.options[6] = new Option('RONDOCAN','06');
	document.frm.dis.options[7] = new Option('SANGARARA','07');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCAHUASI','02');
	document.frm.dis.options[2] = new Option('ANTA','01');
	document.frm.dis.options[3] = new Option('CACHIMAYO','03');
	document.frm.dis.options[4] = new Option('CHINCHAYPUJIO','04');
	document.frm.dis.options[5] = new Option('HUAROCONDO','05');
	document.frm.dis.options[6] = new Option('LIMATAMBO','06');
	document.frm.dis.options[7] = new Option('MOLLEPATA','07');
	document.frm.dis.options[8] = new Option('PUCYURA','08');
	document.frm.dis.options[9] = new Option('ZURITE','09');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CALCA','01');
	document.frm.dis.options[2] = new Option('COYA','02');
	document.frm.dis.options[3] = new Option('LAMAY','03');
	document.frm.dis.options[4] = new Option('LARES','04');
	document.frm.dis.options[5] = new Option('PISAC','05');
	document.frm.dis.options[6] = new Option('SAN SALVADOR','06');
	document.frm.dis.options[7] = new Option('TARAY','07');
	document.frm.dis.options[8] = new Option('YANATILE','08');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHECCA','02');
	document.frm.dis.options[2] = new Option('KUNTURKANKI','03');
	document.frm.dis.options[3] = new Option('LANGUI','04');
	document.frm.dis.options[4] = new Option('LAYO','05');
	document.frm.dis.options[5] = new Option('PAMPAMARCA','06');
	document.frm.dis.options[6] = new Option('QUEHUE','07');
	document.frm.dis.options[7] = new Option('TUPAC AMARU','08');
	document.frm.dis.options[8] = new Option('YANAOCA','01');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHECACUPE','02');
	document.frm.dis.options[2] = new Option('COMBAPATA','03');
	document.frm.dis.options[3] = new Option('MARANGANI','04');
	document.frm.dis.options[4] = new Option('PITUMARCA','05');
	document.frm.dis.options[5] = new Option('SAN PABLO','06');
	document.frm.dis.options[6] = new Option('SAN PEDRO','07');
	document.frm.dis.options[7] = new Option('SICUANI','01');
	document.frm.dis.options[8] = new Option('TINTA','08');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAPACMARCA','02');
	document.frm.dis.options[2] = new Option('CHAMACA','03');
	document.frm.dis.options[3] = new Option('COLQUEMARCA','04');
	document.frm.dis.options[4] = new Option('LIVITACA','05');
	document.frm.dis.options[5] = new Option('LLUSCO','06');
	document.frm.dis.options[6] = new Option('QUINOTA','07');
	document.frm.dis.options[7] = new Option('SANTO TOMAS','01');
	document.frm.dis.options[8] = new Option('VELILLE','08');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CCORCA','02');
	document.frm.dis.options[2] = new Option('CUSCO','01');
	document.frm.dis.options[3] = new Option('POROY','03');
	document.frm.dis.options[4] = new Option('SAN JERONIMO','04');
	document.frm.dis.options[5] = new Option('SAN SEBASTIAN','05');
	document.frm.dis.options[6] = new Option('SANTIAGO','06');
	document.frm.dis.options[7] = new Option('SAYLLA','07');
	document.frm.dis.options[8] = new Option('WANCHAQ','08');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO PICHIGNA','08');
	document.frm.dis.options[2] = new Option('CONDOROMA','02');
	document.frm.dis.options[3] = new Option('COPORAQUE','03');
	document.frm.dis.options[4] = new Option('ESPINAR','01');
	document.frm.dis.options[5] = new Option('OCORURO','04');
	document.frm.dis.options[6] = new Option('PALLPATA','05');
	document.frm.dis.options[7] = new Option('PICHIGUA','06');
	document.frm.dis.options[8] = new Option('SUYCKUTAMBO','07');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ECHARATE','02');
	document.frm.dis.options[2] = new Option('HUAYOPATA','03');
	document.frm.dis.options[3] = new Option('MARANURA','04');
	document.frm.dis.options[4] = new Option('OCOBAMBA (10)','05');
	document.frm.dis.options[5] = new Option('PICHARI','10');
	document.frm.dis.options[6] = new Option('QUELLOUNO','06');
	document.frm.dis.options[7] = new Option('QUIMBIRI','07');
	document.frm.dis.options[8] = new Option('SANTA ANA','01');
	document.frm.dis.options[9] = new Option('SANTA TERESA','08');
	document.frm.dis.options[10] = new Option('VILCABAMBA','09');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACCHA','02');
	document.frm.dis.options[2] = new Option('CCAPI','03');
	document.frm.dis.options[3] = new Option('COLCHA','04');
	document.frm.dis.options[4] = new Option('HUANOQUITE','05');
	document.frm.dis.options[5] = new Option('OMACHA','06');
	document.frm.dis.options[6] = new Option('PACCARITAMBO','07');
	document.frm.dis.options[7] = new Option('PARURO','01');
	document.frm.dis.options[8] = new Option('PILLPINTO','08');
	document.frm.dis.options[9] = new Option('YAURISQUE','09');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAICAY','02');
	document.frm.dis.options[2] = new Option('CHALLABAMBA','03');
	document.frm.dis.options[3] = new Option('COLQUEPATA','04');
	document.frm.dis.options[4] = new Option('HUANCARANI','05');
	document.frm.dis.options[5] = new Option('KOSNIPATA','06');
	document.frm.dis.options[6] = new Option('PAUCARTAMBO','01');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='12')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDAHUAYLILLAS','02');
	document.frm.dis.options[2] = new Option('CAMANTI','03');
	document.frm.dis.options[3] = new Option('CCARHUAYO','04');
	document.frm.dis.options[4] = new Option('CCATCA','05');
	document.frm.dis.options[5] = new Option('CUSIPATA','06');
	document.frm.dis.options[6] = new Option('HUARO','07');
	document.frm.dis.options[7] = new Option('LUCRE','08');
	document.frm.dis.options[8] = new Option('MARCAPATA','09');
	document.frm.dis.options[9] = new Option('OCONGATE','10');
	document.frm.dis.options[10] = new Option('OROPESA','11');
	document.frm.dis.options[11] = new Option('QUIQUIJANA','12');
	document.frm.dis.options[12] = new Option('URCOS','01');
}
if ((document.frm.dep.value=='08')&&(document.frm.prv.value=='13')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHINCHERO','02');
	document.frm.dis.options[2] = new Option('HUAYLLABAMBA','03');
	document.frm.dis.options[3] = new Option('MACHUPICCHU','04');
	document.frm.dis.options[4] = new Option('MARAS','05');
	document.frm.dis.options[5] = new Option('OLLANTAYTAMBO','06');
	document.frm.dis.options[6] = new Option('URUBAMBA','01');
	document.frm.dis.options[7] = new Option('YUCAY','07');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOBAMBA','01');
	document.frm.dis.options[2] = new Option('ANDABAMBA','02');
	document.frm.dis.options[3] = new Option('ANTA','03');
	document.frm.dis.options[4] = new Option('CAJA','04');
	document.frm.dis.options[5] = new Option('MARCAS','05');
	document.frm.dis.options[6] = new Option('PAUCARA','06');
	document.frm.dis.options[7] = new Option('POMACOCHA','07');
	document.frm.dis.options[8] = new Option('ROSARIO','08');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCHONGA','02');
	document.frm.dis.options[2] = new Option('CALLANMARCA','03');
	document.frm.dis.options[3] = new Option('CCOCHACCASA','04');
	document.frm.dis.options[4] = new Option('CHINCHO','05');
	document.frm.dis.options[5] = new Option('CONGALLA','06');
	document.frm.dis.options[6] = new Option('HUANCA-HUANCA','07');
	document.frm.dis.options[7] = new Option('HUAYLLAY GRANDE','08');
	document.frm.dis.options[8] = new Option('JULCAMARCA','09');
	document.frm.dis.options[9] = new Option('LIRCAY','01');
	document.frm.dis.options[10] = new Option('SAN ANTONIO DE ANTAPARCO','10');
	document.frm.dis.options[11] = new Option('SANTO TOMAS DE PATA','11');
	document.frm.dis.options[12] = new Option('SECCLLA','12');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ARMA','02');
	document.frm.dis.options[2] = new Option('AURAHUA','03');
	document.frm.dis.options[3] = new Option('CAPILLAS','04');
	document.frm.dis.options[4] = new Option('CASTROVIRREYNA','01');
	document.frm.dis.options[5] = new Option('CHUPAMARCA','05');
	document.frm.dis.options[6] = new Option('COCAS','06');
	document.frm.dis.options[7] = new Option('HUACHOS','07');
	document.frm.dis.options[8] = new Option('HUAMATAMBO','08');
	document.frm.dis.options[9] = new Option('MOLLEPAMPA','09');
	document.frm.dis.options[10] = new Option('SAN JUAN','10');
	document.frm.dis.options[11] = new Option('SANTA ANA','11');
	document.frm.dis.options[12] = new Option('TANTARA','12');
	document.frm.dis.options[13] = new Option('TICRAPO','13');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCO','02');
	document.frm.dis.options[2] = new Option('CHINCHIHUASI','03');
	document.frm.dis.options[3] = new Option('CHURCAMPA','01');
	document.frm.dis.options[4] = new Option('EL CARMEN','04');
	document.frm.dis.options[5] = new Option('LA MERCED','05');
	document.frm.dis.options[6] = new Option('LOCROJA','06');
	document.frm.dis.options[7] = new Option('PACHAMARCA','10');
	document.frm.dis.options[8] = new Option('PAUCARBAMBA','07');
	document.frm.dis.options[9] = new Option('SAN MIGUEL DE MAYOCC','08');
	document.frm.dis.options[10] = new Option('SAN PEDRO DE CORIS','09');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOBAMBILLA','02');
	document.frm.dis.options[2] = new Option('ACORIA','03');
	document.frm.dis.options[3] = new Option('ASCENSION','18');
	document.frm.dis.options[4] = new Option('CONAYCA','04');
	document.frm.dis.options[5] = new Option('CUENCA','05');
	document.frm.dis.options[6] = new Option('HUACHOCOLPA','06');
	document.frm.dis.options[7] = new Option('HUANCAVELICA','01');
	document.frm.dis.options[8] = new Option('HUANDO','19');
	document.frm.dis.options[9] = new Option('HUAYLLAHUARA','07');
	document.frm.dis.options[10] = new Option('IZCUCHACA','08');
	document.frm.dis.options[11] = new Option('LARIA','09');
	document.frm.dis.options[12] = new Option('MANTA','10');
	document.frm.dis.options[13] = new Option('MARISCAL CACERES','11');
	document.frm.dis.options[14] = new Option('MOYA','12');
	document.frm.dis.options[15] = new Option('NUEVO OCCORO','13');
	document.frm.dis.options[16] = new Option('PALCA','14');
	document.frm.dis.options[17] = new Option('PILCHACA','15');
	document.frm.dis.options[18] = new Option('VILCA','16');
	document.frm.dis.options[19] = new Option('YAULI','17');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AYAVI','02');
	document.frm.dis.options[2] = new Option('CORDOVA','03');
	document.frm.dis.options[3] = new Option('HUAYACUNDO ARMA','04');
	document.frm.dis.options[4] = new Option('HUAYTARA','01');
	document.frm.dis.options[5] = new Option('LARAMARCA','05');
	document.frm.dis.options[6] = new Option('OCOYO','06');
	document.frm.dis.options[7] = new Option('PILPICHACA','07');
	document.frm.dis.options[8] = new Option('QUERCO','08');
	document.frm.dis.options[9] = new Option('QUITO-ARMA','09');
	document.frm.dis.options[10] = new Option('SAN ANTONIO DE CUSICANCHA','10');
	document.frm.dis.options[11] = new Option('SAN FRANCISCO DE SANGAYAI','11');
	document.frm.dis.options[12] = new Option('SAN ISIDRO','12');
	document.frm.dis.options[13] = new Option('SANTIAGO DE CHOCORVOS','13');
	document.frm.dis.options[14] = new Option('SANTIAGO DE QUIRAHUARA','14');
	document.frm.dis.options[15] = new Option('SANTO DOMINGO DE CAPILLAS','15');
	document.frm.dis.options[16] = new Option('TAMBO','16');
}
if ((document.frm.dep.value=='09')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOSTAMBO','02');
	document.frm.dis.options[2] = new Option('ACRAQUIA','03');
	document.frm.dis.options[3] = new Option('AHUAYCHA','04');
	document.frm.dis.options[4] = new Option('COLCABAMBA','05');
	document.frm.dis.options[5] = new Option('DANIEL HERNANDEZ','06');
	document.frm.dis.options[6] = new Option('HUACHOCOLPA','07');
	document.frm.dis.options[7] = new Option('HUANDO','08');
	document.frm.dis.options[8] = new Option('HUARIBAMBA','09');
	document.frm.dis.options[9] = new Option('NAHUIMPUQUIO','10');
	document.frm.dis.options[10] = new Option('PACHAMARCA','12');
	document.frm.dis.options[11] = new Option('PAMPAS','01');
	document.frm.dis.options[12] = new Option('PAZOS','11');
	document.frm.dis.options[13] = new Option('QUISHUAR','13');
	document.frm.dis.options[14] = new Option('SALCABAMBA','14');
	document.frm.dis.options[15] = new Option('SALCAHUASI','15');
	document.frm.dis.options[16] = new Option('SAN MARCOS DE ROCCHAC','16');
	document.frm.dis.options[17] = new Option('SURCUBAMBA','17');
	document.frm.dis.options[18] = new Option('TINTAY PUNCU','18');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AMBO','01');
	document.frm.dis.options[2] = new Option('CAYNA','02');
	document.frm.dis.options[3] = new Option('COLPAS','03');
	document.frm.dis.options[4] = new Option('CONCHAMARCA','04');
	document.frm.dis.options[5] = new Option('HUACAR','05');
	document.frm.dis.options[6] = new Option('SAN FRANCISCO','06');
	document.frm.dis.options[7] = new Option('SAN RAFAEL','07');
	document.frm.dis.options[8] = new Option('TOMAY KICHWA','08');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('APARICIO POMARES','02');
	document.frm.dis.options[2] = new Option('BANOS','03');
	document.frm.dis.options[3] = new Option('CAHUAC','04');
	document.frm.dis.options[4] = new Option('CHACABAMBA','05');
	document.frm.dis.options[5] = new Option('CHAVINILLO','06');
	document.frm.dis.options[6] = new Option('CHUQUIS','07');
	document.frm.dis.options[7] = new Option('JACAS CHICO','08');
	document.frm.dis.options[8] = new Option('JESUS','09');
	document.frm.dis.options[9] = new Option('JIVIA','10');
	document.frm.dis.options[10] = new Option('LA UNION','01');
	document.frm.dis.options[11] = new Option('MARIAS','11');
	document.frm.dis.options[12] = new Option('OBAS','12');
	document.frm.dis.options[13] = new Option('PACHAS','13');
	document.frm.dis.options[14] = new Option('PAMPAMARCA','14');
	document.frm.dis.options[15] = new Option('QUEROPALCA','15');
	document.frm.dis.options[16] = new Option('QUIVILLA','16');
	document.frm.dis.options[17] = new Option('RIPAN','17');
	document.frm.dis.options[18] = new Option('RONDOS','18');
	document.frm.dis.options[19] = new Option('SAN FRANCISCO DE ASIS','19');
	document.frm.dis.options[20] = new Option('SAN MIGUEL DE CAURI','20');
	document.frm.dis.options[21] = new Option('SHUNQUI','21');
	document.frm.dis.options[22] = new Option('SILLAPATA','22');
	document.frm.dis.options[23] = new Option('YANAS','23');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CANCHABAMBA','02');
	document.frm.dis.options[2] = new Option('COCHABAMBA','03');
	document.frm.dis.options[3] = new Option('HUACAYBAMBA','01');
	document.frm.dis.options[4] = new Option('PINRA','04');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ARANCAY','02');
	document.frm.dis.options[2] = new Option('CHAVIN DE PARIARCA','03');
	document.frm.dis.options[3] = new Option('JACAS GRANDE','04');
	document.frm.dis.options[4] = new Option('JIRCAN','05');
	document.frm.dis.options[5] = new Option('LLATA','01');
	document.frm.dis.options[6] = new Option('MIRAFLORES','06');
	document.frm.dis.options[7] = new Option('MONZON','07');
	document.frm.dis.options[8] = new Option('PUNCHAO','08');
	document.frm.dis.options[9] = new Option('PUNOS','09');
	document.frm.dis.options[10] = new Option('SINGA','10');
	document.frm.dis.options[11] = new Option('TANTAMAYO','11');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AMARILIS','02');
	document.frm.dis.options[2] = new Option('CHINCHAO','03');
	document.frm.dis.options[3] = new Option('CHURUBAMBA','04');
	document.frm.dis.options[4] = new Option('HUANUCO','01');
	document.frm.dis.options[5] = new Option('MARGOS','05');
	document.frm.dis.options[6] = new Option('PILLCO MARCA','11');
	document.frm.dis.options[7] = new Option('QUISQUI','06');
	document.frm.dis.options[8] = new Option('SAN FRANCISCO DE CAYRAN','07');
	document.frm.dis.options[9] = new Option('SAN PEDRO DE CHAULAN','08');
	document.frm.dis.options[10] = new Option('SANTA MARIA DEL VALLE','09');
	document.frm.dis.options[11] = new Option('YARUMAYO','10');
	document.frm.dis.options[12] = new Option('YACUS','12');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BAÑOS','02');
	document.frm.dis.options[2] = new Option('JESUS','01');
	document.frm.dis.options[3] = new Option('JIVIA','03');
	document.frm.dis.options[4] = new Option('QUEROPALCA','04');
	document.frm.dis.options[5] = new Option('RONDOS','05');
	document.frm.dis.options[6] = new Option('SAN FRANCISCO DE ASIS','06');
	document.frm.dis.options[7] = new Option('SAN MIGUEL DE CAURI','07');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('DANIEL ALOMIAS ROBLES','02');
	document.frm.dis.options[2] = new Option('HERMILIO VALDIZAN','03');
	document.frm.dis.options[3] = new Option('JOSE CRESPO Y CASTILLO','04');
	document.frm.dis.options[4] = new Option('LUYANDO','05');
	document.frm.dis.options[5] = new Option('MARIANO DAMASO BERAUN','06');
	document.frm.dis.options[6] = new Option('RUPA-RUPA','01');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHOLON','02');
	document.frm.dis.options[2] = new Option('HUACRACHUCO','01');
	document.frm.dis.options[3] = new Option('SAN BUENAVENTURA','03');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHAGLLA','02');
	document.frm.dis.options[2] = new Option('MOLINO','03');
	document.frm.dis.options[3] = new Option('PANAO','01');
	document.frm.dis.options[4] = new Option('UMARI (7)','04');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CODO DEL POZUZO','02');
	document.frm.dis.options[2] = new Option('HONORIA','03');
	document.frm.dis.options[3] = new Option('PUERTO INCA','01');
	document.frm.dis.options[4] = new Option('TOURNAVISTA','04');
	document.frm.dis.options[5] = new Option('YUYAPICHIS','05');
}
if ((document.frm.dep.value=='10')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('APARICIO POMARES','04');
	document.frm.dis.options[2] = new Option('CAHUAC','02');
	document.frm.dis.options[3] = new Option('CHACABAMBA','03');
	document.frm.dis.options[4] = new Option('CHAVINILLO','01');
	document.frm.dis.options[5] = new Option('CHORAS','08');
	document.frm.dis.options[6] = new Option('JACAS CHICO','05');
	document.frm.dis.options[7] = new Option('OBAS','06');
	document.frm.dis.options[8] = new Option('PAMPAMARCA','07');
}
if ((document.frm.dep.value=='11')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO LARAN','02');
	document.frm.dis.options[2] = new Option('CHAVIN','03');
	document.frm.dis.options[3] = new Option('CHINCHA ALTA','01');
	document.frm.dis.options[4] = new Option('CHINCHA BAJA','04');
	document.frm.dis.options[5] = new Option('EL CARMEN','05');
	document.frm.dis.options[6] = new Option('GROCIO PRADO','06');
	document.frm.dis.options[7] = new Option('PUEBLO NUEVO','07');
	document.frm.dis.options[8] = new Option('SAN JUAN DE YANAC','08');
	document.frm.dis.options[9] = new Option('SAN PEDRO DE HUACARPANA','09');
	document.frm.dis.options[10] = new Option('SUNAMPE','10');
	document.frm.dis.options[11] = new Option('TAMBO DE MORA','11');
}
if ((document.frm.dep.value=='11')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ICA','01');
	document.frm.dis.options[2] = new Option('LA TINGUINA','02');
	document.frm.dis.options[3] = new Option('LOS AQUIJES','03');
	document.frm.dis.options[4] = new Option('OCUCAJE','04');
	document.frm.dis.options[5] = new Option('PACHACUTEC','05');
	document.frm.dis.options[6] = new Option('PARCONA','06');
	document.frm.dis.options[7] = new Option('PUEBLO NUEVO','07');
	document.frm.dis.options[8] = new Option('SALAS','08');
	document.frm.dis.options[9] = new Option('SAN JOSE DE LOS MOLINOS','09');
	document.frm.dis.options[10] = new Option('SAN JUAN BAUTISTA','10');
	document.frm.dis.options[11] = new Option('SANTIAGO','11');
	document.frm.dis.options[12] = new Option('SUBTANJALLA','12');
	document.frm.dis.options[13] = new Option('TATE','13');
	document.frm.dis.options[14] = new Option('YAUCA DEL ROSARIO (17)','14');
}
if ((document.frm.dep.value=='11')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHANGUILLO','02');
	document.frm.dis.options[2] = new Option('EL INGENIO','03');
	document.frm.dis.options[3] = new Option('MARCONA','04');
	document.frm.dis.options[4] = new Option('NAZCA','01');
	document.frm.dis.options[5] = new Option('VISTA ALEGRE','05');
}
if ((document.frm.dep.value=='11')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('LLIPATA','02');
	document.frm.dis.options[2] = new Option('PALPA','01');
	document.frm.dis.options[3] = new Option('RIO GRANDE','03');
	document.frm.dis.options[4] = new Option('SANTA CRUZ','04');
	document.frm.dis.options[5] = new Option('TIBILLO','05');
}
if ((document.frm.dep.value=='11')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('HUANCANO','02');
	document.frm.dis.options[2] = new Option('HUMAY','03');
	document.frm.dis.options[3] = new Option('INDEPENDENCIA','04');
	document.frm.dis.options[4] = new Option('PARACAS','05');
	document.frm.dis.options[5] = new Option('PISCO','01');
	document.frm.dis.options[6] = new Option('SAN ANDRES','06');
	document.frm.dis.options[7] = new Option('SAN CLEMENTE','07');
	document.frm.dis.options[8] = new Option('TUPAC AMARU INCA','08');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHANCHAMAYO','01');
	document.frm.dis.options[2] = new Option('PERENE','02');
	document.frm.dis.options[3] = new Option('PICHANAQUI','03');
	document.frm.dis.options[4] = new Option('SAN LUIS DE SHUARO','04');
	document.frm.dis.options[5] = new Option('SAN RAMON','05');
	document.frm.dis.options[6] = new Option('VITOC','06');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AHUAC','02');
	document.frm.dis.options[2] = new Option('CHONGOS BAJO','03');
	document.frm.dis.options[3] = new Option('CHUPACA','01');
	document.frm.dis.options[4] = new Option('HUACHAC','04');
	document.frm.dis.options[5] = new Option('HUAMANCACA CHICO','05');
	document.frm.dis.options[6] = new Option('SAN JUAN DE ISCOS','06');
	document.frm.dis.options[7] = new Option('SAN JUAN DE JARPA','07');
	document.frm.dis.options[8] = new Option('TRES DE DICIEMBRE','08');
	document.frm.dis.options[9] = new Option('YANACANCHA','09');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACO','02');
	document.frm.dis.options[2] = new Option('ANDAMARCA','03');
	document.frm.dis.options[3] = new Option('CHAMBARA','04');
	document.frm.dis.options[4] = new Option('COCHAS','05');
	document.frm.dis.options[5] = new Option('COMAS','06');
	document.frm.dis.options[6] = new Option('CONCEPCION','01');
	document.frm.dis.options[7] = new Option('HEROINAS TOLEDO','07');
	document.frm.dis.options[8] = new Option('MANZANARES','08');
	document.frm.dis.options[9] = new Option('MARISCAL CASTILLA','09');
	document.frm.dis.options[10] = new Option('MATAHUASI','10');
	document.frm.dis.options[11] = new Option('MITO','11');
	document.frm.dis.options[12] = new Option('NUEVE DE JULIO','12');
	document.frm.dis.options[13] = new Option('ORCOTUNA','13');
	document.frm.dis.options[14] = new Option('SAN JOSE DE QUERO','14');
	document.frm.dis.options[15] = new Option('SANTA ROSA DE OCOPA','15');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AHUAC','03');
	document.frm.dis.options[2] = new Option('CARHUACALLANGA','04');
	document.frm.dis.options[3] = new Option('CHACAPAMPA','05');
	document.frm.dis.options[4] = new Option('CHICCHE','06');
	document.frm.dis.options[5] = new Option('CHILCA','07');
	document.frm.dis.options[6] = new Option('CHONGOS ALTO','08');
	document.frm.dis.options[7] = new Option('CHONGOS BAJO','09');
	document.frm.dis.options[8] = new Option('CHUPACA','10');
	document.frm.dis.options[9] = new Option('CHUPURO','11');
	document.frm.dis.options[10] = new Option('COLCA','12');
	document.frm.dis.options[11] = new Option('CULLHUAS','13');
	document.frm.dis.options[12] = new Option('EL TAMBO','14');
	document.frm.dis.options[13] = new Option('HUACHAC','15');
	document.frm.dis.options[14] = new Option('HUACRAPUQUIO','16');
	document.frm.dis.options[15] = new Option('HUALHUAS','17');
	document.frm.dis.options[16] = new Option('HUAMANCACA CHICO','18');
	document.frm.dis.options[17] = new Option('HUANCAN','19');
	document.frm.dis.options[18] = new Option('HUANCAYO','01');
	document.frm.dis.options[19] = new Option('HUASICANCHA','20');
	document.frm.dis.options[20] = new Option('HUAYUCACHI','21');
	document.frm.dis.options[21] = new Option('INGENIO','22');
	document.frm.dis.options[22] = new Option('JARPA','23');
	document.frm.dis.options[23] = new Option('PARIAHUANCA','24');
	document.frm.dis.options[24] = new Option('PILCOMAYO','25');
	document.frm.dis.options[25] = new Option('PUCARA','26');
	document.frm.dis.options[26] = new Option('QUICHUAY','27');
	document.frm.dis.options[27] = new Option('QUILCAS','28');
	document.frm.dis.options[28] = new Option('SAN AGUSTIN','29');
	document.frm.dis.options[29] = new Option('SAN JERONIMO DE TUNAN','30');
	document.frm.dis.options[30] = new Option('SAN JUAN DE YSCOS','31');
	document.frm.dis.options[31] = new Option('SAÑO','32');
	document.frm.dis.options[32] = new Option('SAPALLANGA','33');
	document.frm.dis.options[33] = new Option('SICAYA','34');
	document.frm.dis.options[34] = new Option('STO. DOMINGO DE ACOBAMBA','35');
	document.frm.dis.options[35] = new Option('VIQUES','36');
	document.frm.dis.options[36] = new Option('YANACANCHA','37');
	document.frm.dis.options[37] = new Option('3 DE DICIEMBRE','02');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOLLA','02');
	document.frm.dis.options[2] = new Option('APATA','03');
	document.frm.dis.options[3] = new Option('ATAURA','04');
	document.frm.dis.options[4] = new Option('CANCHAYLLO','05');
	document.frm.dis.options[5] = new Option('CURICACA','06');
	document.frm.dis.options[6] = new Option('EL MANTARO','07');
	document.frm.dis.options[7] = new Option('HUAMALI','08');
	document.frm.dis.options[8] = new Option('HUARIPAMPA','09');
	document.frm.dis.options[9] = new Option('HUERTAS','10');
	document.frm.dis.options[10] = new Option('JANJAILLO','11');
	document.frm.dis.options[11] = new Option('JAUJA','01');
	document.frm.dis.options[12] = new Option('JULCAN','12');
	document.frm.dis.options[13] = new Option('LEONOR ORDONEZ','13');
	document.frm.dis.options[14] = new Option('LLOCLLAPAMPA','14');
	document.frm.dis.options[15] = new Option('MARCO','15');
	document.frm.dis.options[16] = new Option('MASMA','16');
	document.frm.dis.options[17] = new Option('MASMA CHICCHE','17');
	document.frm.dis.options[18] = new Option('MOLINOS','18');
	document.frm.dis.options[19] = new Option('MONOBAMBA','19');
	document.frm.dis.options[20] = new Option('MUQUI','20');
	document.frm.dis.options[21] = new Option('MUQUIYAUYO','21');
	document.frm.dis.options[22] = new Option('PACA','22');
	document.frm.dis.options[23] = new Option('PACCHA','23');
	document.frm.dis.options[24] = new Option('PANCAN','24');
	document.frm.dis.options[25] = new Option('PARCO','25');
	document.frm.dis.options[26] = new Option('POMACANCHA','26');
	document.frm.dis.options[27] = new Option('RICRAN','27');
	document.frm.dis.options[28] = new Option('SAN LORENZO','28');
	document.frm.dis.options[29] = new Option('SAN PEDRO DE CHUNAN','29');
	document.frm.dis.options[30] = new Option('SAUSA','30');
	document.frm.dis.options[31] = new Option('SINCOS','31');
	document.frm.dis.options[32] = new Option('TUNAN MARCA','32');
	document.frm.dis.options[33] = new Option('YAULI','33');
	document.frm.dis.options[34] = new Option('YAUYOS','34');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CARHUAMAYO','02');
	document.frm.dis.options[2] = new Option('JUNIN','01');
	document.frm.dis.options[3] = new Option('ONDORES','03');
	document.frm.dis.options[4] = new Option('ULCUMAYO','04');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COVIRIALI','02');
	document.frm.dis.options[2] = new Option('LLAYLLA','03');
	document.frm.dis.options[3] = new Option('MAZAMARI','04');
	document.frm.dis.options[4] = new Option('PAMPA HERMOSA','05');
	document.frm.dis.options[5] = new Option('PANGOA','06');
	document.frm.dis.options[6] = new Option('RIO NEGRO','07');
	document.frm.dis.options[7] = new Option('RIO TAMBO','08');
	document.frm.dis.options[8] = new Option('SATIPO','01');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACOBAMBA','02');
	document.frm.dis.options[2] = new Option('HUARICOLCA','03');
	document.frm.dis.options[3] = new Option('HUASAHUASI','04');
	document.frm.dis.options[4] = new Option('LA UNION','05');
	document.frm.dis.options[5] = new Option('PALCA','06');
	document.frm.dis.options[6] = new Option('PALCAMAYO','07');
	document.frm.dis.options[7] = new Option('SAN PEDRO DE CAJAS','08');
	document.frm.dis.options[8] = new Option('TAPO','09');
	document.frm.dis.options[9] = new Option('TARMA','01');
}
if ((document.frm.dep.value=='12')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHACAPALPA','02');
	document.frm.dis.options[2] = new Option('HUAY-HUAY','03');
	document.frm.dis.options[3] = new Option('LA OROYA','01');
	document.frm.dis.options[4] = new Option('MARCAPOMACOCHA','04');
	document.frm.dis.options[5] = new Option('MOROCOCHA','05');
	document.frm.dis.options[6] = new Option('PACCHA','06');
	document.frm.dis.options[7] = new Option('SANTA ROSA DE SACCO','08');
	document.frm.dis.options[8] = new Option('STA BARBARA D.CARHUACAYAN','07');
	document.frm.dis.options[9] = new Option('SUITUCANCHA','09');
	document.frm.dis.options[10] = new Option('YAULI','10');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ASCOPE','01');
	document.frm.dis.options[2] = new Option('CASA GRANDE','08');
	document.frm.dis.options[3] = new Option('CHICAMA','02');
	document.frm.dis.options[4] = new Option('CHOCOPE','03');
	document.frm.dis.options[5] = new Option('MAGDALENA DE CAO','04');
	document.frm.dis.options[6] = new Option('PAIJAN','05');
	document.frm.dis.options[7] = new Option('RAZURI','06');
	document.frm.dis.options[8] = new Option('SANTIAGO DE CAO','07');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BAMBAMARCA','02');
	document.frm.dis.options[2] = new Option('BOLIVAR','01');
	document.frm.dis.options[3] = new Option('CONDORMARCA','03');
	document.frm.dis.options[4] = new Option('LONGOTEA','04');
	document.frm.dis.options[5] = new Option('UCHUMARCA','05');
	document.frm.dis.options[6] = new Option('UCUNCHA','06');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHEPEN','01');
	document.frm.dis.options[2] = new Option('PACANGA','02');
	document.frm.dis.options[3] = new Option('PUEBLO NUEVO','03');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CASCA','01');
	document.frm.dis.options[2] = new Option('LUCMA','02');
	document.frm.dis.options[3] = new Option('MARMOT','03');
	document.frm.dis.options[4] = new Option('SAYAPULLO','04');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CALAMARCA','02');
	document.frm.dis.options[2] = new Option('CARABAMBA','03');
	document.frm.dis.options[3] = new Option('HUASO','04');
	document.frm.dis.options[4] = new Option('JULCAN','01');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AGALLPAMPA','02');
	document.frm.dis.options[2] = new Option('CASCAS','03');
	document.frm.dis.options[3] = new Option('CHARAT','04');
	document.frm.dis.options[4] = new Option('HUARANCHAL','05');
	document.frm.dis.options[5] = new Option('LA CUESTA','06');
	document.frm.dis.options[6] = new Option('LUCMA','07');
	document.frm.dis.options[7] = new Option('MACHE','08');
	document.frm.dis.options[8] = new Option('MARMOT (20)','09');
	document.frm.dis.options[9] = new Option('OTUZCO','01');
	document.frm.dis.options[10] = new Option('PARANDAY','10');
	document.frm.dis.options[11] = new Option('SALPO','11');
	document.frm.dis.options[12] = new Option('SAYAPULLO','12');
	document.frm.dis.options[13] = new Option('SINSICAP','13');
	document.frm.dis.options[14] = new Option('USQUIL','14');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('GUADALUPE','02');
	document.frm.dis.options[2] = new Option('JEQUETEPEQUE','03');
	document.frm.dis.options[3] = new Option('PACASMAYO','04');
	document.frm.dis.options[4] = new Option('SAN JOSE','05');
	document.frm.dis.options[5] = new Option('SAN PEDRO DE LLOC','01');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BULDIBUYO','02');
	document.frm.dis.options[2] = new Option('CHILLIA','03');
	document.frm.dis.options[3] = new Option('HUANCASPATA','04');
	document.frm.dis.options[4] = new Option('HUAYLILLAS','05');
	document.frm.dis.options[5] = new Option('HUAYO','06');
	document.frm.dis.options[6] = new Option('ONGON','07');
	document.frm.dis.options[7] = new Option('PARCOY','08');
	document.frm.dis.options[8] = new Option('PATAZ','09');
	document.frm.dis.options[9] = new Option('PIAS','10');
	document.frm.dis.options[10] = new Option('SANTIAGO DE CHALLAS','11');
	document.frm.dis.options[11] = new Option('TAURIJA','12');
	document.frm.dis.options[12] = new Option('TAYABAMBA','01');
	document.frm.dis.options[13] = new Option('URPAY','13');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHUGAY','02');
	document.frm.dis.options[2] = new Option('COCHORCO','03');
	document.frm.dis.options[3] = new Option('CURGOS','04');
	document.frm.dis.options[4] = new Option('HUAMACHUCO','01');
	document.frm.dis.options[5] = new Option('MARCABAL','05');
	document.frm.dis.options[6] = new Option('SANAGORAN','06');
	document.frm.dis.options[7] = new Option('SARIN','07');
	document.frm.dis.options[8] = new Option('SARTIMBAMBA','08');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANGASMARCA','02');
	document.frm.dis.options[2] = new Option('CACHICADAN','03');
	document.frm.dis.options[3] = new Option('MOLLEBAMBA','04');
	document.frm.dis.options[4] = new Option('MOLLEPATA','05');
	document.frm.dis.options[5] = new Option('QUIRUVILCA','06');
	document.frm.dis.options[6] = new Option('SANTA CRUZ DE CHUCA','07');
	document.frm.dis.options[7] = new Option('SANTIAGO DE CHUCO','01');
	document.frm.dis.options[8] = new Option('SITABAMBA','08');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('EL PORVENIR','02');
	document.frm.dis.options[2] = new Option('FLORENCIA DE MORA','03');
	document.frm.dis.options[3] = new Option('HUANCHACO','04');
	document.frm.dis.options[4] = new Option('LA ESPERANZA','05');
	document.frm.dis.options[5] = new Option('LAREDO','06');
	document.frm.dis.options[6] = new Option('MOCHE','07');
	document.frm.dis.options[7] = new Option('POROTO','08');
	document.frm.dis.options[8] = new Option('SALAVERRY','09');
	document.frm.dis.options[9] = new Option('SIMBAL','10');
	document.frm.dis.options[10] = new Option('TRUJILLO','01');
	document.frm.dis.options[11] = new Option('VICTOR LARCO HERRERA','11');
	document.frm.dis.options[12] = new Option('VIRU','12');
}
if ((document.frm.dep.value=='13')&&(document.frm.prv.value=='12')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHAO','02');
	document.frm.dis.options[2] = new Option('GUADALUPITO','03');
	document.frm.dis.options[3] = new Option('VIRU','01');
}
if ((document.frm.dep.value=='14')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAYALTI','16');
	document.frm.dis.options[2] = new Option('CHICLAYO','01');
	document.frm.dis.options[3] = new Option('CHONGOYAPE','02');
	document.frm.dis.options[4] = new Option('ETEN','03');
	document.frm.dis.options[5] = new Option('ETEN PUERTO','04');
	document.frm.dis.options[6] = new Option('JOSE LEONARDO ORTIZ','05');
	document.frm.dis.options[7] = new Option('LA VICTORIA','06');
	document.frm.dis.options[8] = new Option('LAGUNAS (18)','07');
	document.frm.dis.options[9] = new Option('MONSEFU','08');
	document.frm.dis.options[10] = new Option('NUEVA ARICA','09');
	document.frm.dis.options[11] = new Option('OYOTUN','10');
	document.frm.dis.options[12] = new Option('PATAPO','17');
	document.frm.dis.options[13] = new Option('PICSI','11');
	document.frm.dis.options[14] = new Option('PIMENTEL','12');
	document.frm.dis.options[15] = new Option('POMALCA','18');
	document.frm.dis.options[16] = new Option('PUCALA','19');
	document.frm.dis.options[17] = new Option('REQUE','13');
	document.frm.dis.options[18] = new Option('SANA','15');
	document.frm.dis.options[19] = new Option('SANTA ROSA','14');
	document.frm.dis.options[20] = new Option('TUMAN','20');
}
if ((document.frm.dep.value=='14')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CANARIS','02');
	document.frm.dis.options[2] = new Option('FERRENAFE','01');
	document.frm.dis.options[3] = new Option('INCAHUASI','03');
	document.frm.dis.options[4] = new Option('MANUEL ANT. MESONES MURO','04');
	document.frm.dis.options[5] = new Option('PITIPO','05');
	document.frm.dis.options[6] = new Option('PUEBLO NUEVO','06');
}
if ((document.frm.dep.value=='14')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHOCHOPE','02');
	document.frm.dis.options[2] = new Option('ILLIMO','03');
	document.frm.dis.options[3] = new Option('JAYANCA','04');
	document.frm.dis.options[4] = new Option('LAMBAYEQUE','01');
	document.frm.dis.options[5] = new Option('MOCHUMI','05');
	document.frm.dis.options[6] = new Option('MORROPE','06');
	document.frm.dis.options[7] = new Option('MOTUPE','07');
	document.frm.dis.options[8] = new Option('OLMOS','08');
	document.frm.dis.options[9] = new Option('PACORA','09');
	document.frm.dis.options[10] = new Option('SALAS','10');
	document.frm.dis.options[11] = new Option('SAN JOSE','11');
	document.frm.dis.options[12] = new Option('TUCUME','12');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BARRANCA','01');
	document.frm.dis.options[2] = new Option('PARAMONGA','02');
	document.frm.dis.options[3] = new Option('PATIVILCA','03');
	document.frm.dis.options[4] = new Option('SUPE','04');
	document.frm.dis.options[5] = new Option('SUPE PUERTO','05');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAJATAMBO','01');
	document.frm.dis.options[2] = new Option('COPA','02');
	document.frm.dis.options[3] = new Option('GORGOR','03');
	document.frm.dis.options[4] = new Option('HUANCAPON','04');
	document.frm.dis.options[5] = new Option('MANAS','05');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ASIA','02');
	document.frm.dis.options[2] = new Option('CALANGO','03');
	document.frm.dis.options[3] = new Option('CERRO AZUL','04');
	document.frm.dis.options[4] = new Option('CHILCA','05');
	document.frm.dis.options[5] = new Option('COAYLLO','06');
	document.frm.dis.options[6] = new Option('IMPERIAL','07');
	document.frm.dis.options[7] = new Option('LUNAHUANA','08');
	document.frm.dis.options[8] = new Option('MALA','09');
	document.frm.dis.options[9] = new Option('NUEVO IMPERIAL','10');
	document.frm.dis.options[10] = new Option('PACARAN','11');
	document.frm.dis.options[11] = new Option('QUILMANA','12');
	document.frm.dis.options[12] = new Option('SAN ANTONIO','13');
	document.frm.dis.options[13] = new Option('SAN LUIS','14');
	document.frm.dis.options[14] = new Option('SAN VICENTE DE CANETE','01');
	document.frm.dis.options[15] = new Option('SANTA CRUZ DE FLORES','15');
	document.frm.dis.options[16] = new Option('ZUNIGA','16');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ARAHUAY','02');
	document.frm.dis.options[2] = new Option('CANTA','01');
	document.frm.dis.options[3] = new Option('HUAMANTANGA','03');
	document.frm.dis.options[4] = new Option('HUAROS','04');
	document.frm.dis.options[5] = new Option('LACHAQUI','05');
	document.frm.dis.options[6] = new Option('SAN BUENAVENTURA','06');
	document.frm.dis.options[7] = new Option('SANTA ROSA DE QUIVES','07');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ATAVILLOS ALTO','02');
	document.frm.dis.options[2] = new Option('ATAVILLOS BAJO','03');
	document.frm.dis.options[3] = new Option('AUCALLAMA','04');
	document.frm.dis.options[4] = new Option('CHANCAY','05');
	document.frm.dis.options[5] = new Option('HUARAL','01');
	document.frm.dis.options[6] = new Option('IHUARI','06');
	document.frm.dis.options[7] = new Option('LAMPIAN','07');
	document.frm.dis.options[8] = new Option('PACARAOS','08');
	document.frm.dis.options[9] = new Option('SAN MIGUEL DE ACOS','09');
	document.frm.dis.options[10] = new Option('SANTA CRUZ DE ANDAMARCA','10');
	document.frm.dis.options[11] = new Option('SUMBILCA','11');
	document.frm.dis.options[12] = new Option('VEINTISIETE DE NOVIEMBRE','12');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANTIOQUIA','02');
	document.frm.dis.options[2] = new Option('CALLAHUANCA','03');
	document.frm.dis.options[3] = new Option('CARAMPOMA','04');
	document.frm.dis.options[4] = new Option('CHICLA','05');
	document.frm.dis.options[5] = new Option('CUENCA','06');
	document.frm.dis.options[6] = new Option('HUACHUPAMPA','07');
	document.frm.dis.options[7] = new Option('HUANZA','08');
	document.frm.dis.options[8] = new Option('HUAROCHIRI','09');
	document.frm.dis.options[9] = new Option('LAHUAYTAMBO','10');
	document.frm.dis.options[10] = new Option('LANGA','11');
	document.frm.dis.options[11] = new Option('LARAOS','12');
	document.frm.dis.options[12] = new Option('MARIATANA','13');
	document.frm.dis.options[13] = new Option('MATUCANA','01');
	document.frm.dis.options[14] = new Option('RICARDO PALMA','14');
	document.frm.dis.options[15] = new Option('SAN ANDRES DE TUPICOCHA','15');
	document.frm.dis.options[16] = new Option('SAN ANTONIO','16');
	document.frm.dis.options[17] = new Option('SAN BARTOLOME','17');
	document.frm.dis.options[18] = new Option('SAN DAMIAN','18');
	document.frm.dis.options[19] = new Option('SAN JUAN DE IRIS','19');
	document.frm.dis.options[20] = new Option('SAN JUAN DE TANTARANCHE','20');
	document.frm.dis.options[21] = new Option('SAN LORENZO DE QUINTI','21');
	document.frm.dis.options[22] = new Option('SAN MATEO','22');
	document.frm.dis.options[23] = new Option('SAN MATEO DE OTAO','23');
	document.frm.dis.options[24] = new Option('SAN PEDRO DE CASTA','24');
	document.frm.dis.options[25] = new Option('SAN PEDRO DE HUANCAYRE','25');
	document.frm.dis.options[26] = new Option('SANGALLAYA','26');
	document.frm.dis.options[27] = new Option('SANTA CRUZ DE COCACHACRA','27');
	document.frm.dis.options[28] = new Option('SANTA EULALIA','28');
	document.frm.dis.options[29] = new Option('SANTIAGO DE ANCHUCAYA','29');
	document.frm.dis.options[30] = new Option('SANTIAGO DE TUNA','30');
	document.frm.dis.options[31] = new Option('SANTO DGO.DE LOS OLLEROS','31');
	document.frm.dis.options[32] = new Option('SURCO','32');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AMBAR','02');
	document.frm.dis.options[2] = new Option('CALETA DE CARQUIN','03');
	document.frm.dis.options[3] = new Option('CHECRAS','04');
	document.frm.dis.options[4] = new Option('HUACHO','01');
	document.frm.dis.options[5] = new Option('HUALMAY','05');
	document.frm.dis.options[6] = new Option('HUAURA','06');
	document.frm.dis.options[7] = new Option('LEONCIO PRADO','07');
	document.frm.dis.options[8] = new Option('PACCHO','08');
	document.frm.dis.options[9] = new Option('SANTA LEONOR','09');
	document.frm.dis.options[10] = new Option('SANTA MARIA','10');
	document.frm.dis.options[11] = new Option('SAYAN','11');
	document.frm.dis.options[12] = new Option('VEGUETA','12');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANCON','02');
	document.frm.dis.options[2] = new Option('ATE','03');
	document.frm.dis.options[3] = new Option('BARRANCO','04');
	document.frm.dis.options[4] = new Option('BREÑA','05');
	document.frm.dis.options[5] = new Option('CARABAYLLO','06');
	document.frm.dis.options[6] = new Option('CHACLACAYO','07');
	document.frm.dis.options[7] = new Option('CHORRILLOS','08');
	document.frm.dis.options[8] = new Option('CIENEGUILLA','09');
	document.frm.dis.options[9] = new Option('COMAS','10');
	document.frm.dis.options[10] = new Option('EL AGUSTINO','11');
	document.frm.dis.options[11] = new Option('INDEPENDENCIA','12');
	document.frm.dis.options[12] = new Option('JESUS MARIA','13');
	document.frm.dis.options[13] = new Option('LA MOLINA','14');
	document.frm.dis.options[14] = new Option('LA VICTORIA','15');
	document.frm.dis.options[15] = new Option('LIMA','01');
	document.frm.dis.options[16] = new Option('LINCE','16');
	document.frm.dis.options[17] = new Option('LOS OLIVOS','17');
	document.frm.dis.options[18] = new Option('LURIGANCHO','18');
	document.frm.dis.options[19] = new Option('LURIN','19');
	document.frm.dis.options[20] = new Option('MAGDALENA DEL MAR','20');
	document.frm.dis.options[21] = new Option('MIRAFLORES','22');
	document.frm.dis.options[22] = new Option('PACHACAMAC','23');
	document.frm.dis.options[23] = new Option('PUCUSANA','24');
	document.frm.dis.options[24] = new Option('PUEBLO LIBRE','21');
	document.frm.dis.options[25] = new Option('PUENTE PIEDRA','25');
	document.frm.dis.options[26] = new Option('PUNTA HERMOSA','26');
	document.frm.dis.options[27] = new Option('PUNTA NEGRA','27');
	document.frm.dis.options[28] = new Option('RIMAC','28');
	document.frm.dis.options[29] = new Option('SAN BARTOLO','29');
	document.frm.dis.options[30] = new Option('SAN BORJA','30');
	document.frm.dis.options[31] = new Option('SAN ISIDRO','31');
	document.frm.dis.options[32] = new Option('SAN JUAN DE LURIGANCHO','32');
	document.frm.dis.options[33] = new Option('SAN JUAN DE MIRAFLORES','33');
	document.frm.dis.options[34] = new Option('SAN LUIS','34');
	document.frm.dis.options[35] = new Option('SAN MARTIN DE PORRES','35');
	document.frm.dis.options[36] = new Option('SAN MIGUEL','36');
	document.frm.dis.options[37] = new Option('SANTA ANITA','37');
	document.frm.dis.options[38] = new Option('SANTA MARIA DEL MAR','38');
	document.frm.dis.options[39] = new Option('SANTA ROSA','39');
	document.frm.dis.options[40] = new Option('SANTIAGO DE SURCO','40');
	document.frm.dis.options[41] = new Option('SURQUILLO','41');
	document.frm.dis.options[42] = new Option('VILLA EL SALVADOR','42');
	document.frm.dis.options[43] = new Option('VILLA MARIA DEL TRIUNFO','43');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDAJES','02');
	document.frm.dis.options[2] = new Option('CAUJUL','03');
	document.frm.dis.options[3] = new Option('COCHAMARCA','04');
	document.frm.dis.options[4] = new Option('NAVAN','05');
	document.frm.dis.options[5] = new Option('OYON','01');
	document.frm.dis.options[6] = new Option('PACHANGARA','06');
}
if ((document.frm.dep.value=='15')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALIS','02');
	document.frm.dis.options[2] = new Option('AYAUCA','03');
	document.frm.dis.options[3] = new Option('AYAVIRI','04');
	document.frm.dis.options[4] = new Option('AZANGARO','05');
	document.frm.dis.options[5] = new Option('CACRA','06');
	document.frm.dis.options[6] = new Option('CARANIA','07');
	document.frm.dis.options[7] = new Option('CATAHUASI','08');
	document.frm.dis.options[8] = new Option('CHOCOS','09');
	document.frm.dis.options[9] = new Option('COCHAS','10');
	document.frm.dis.options[10] = new Option('COLONIA','11');
	document.frm.dis.options[11] = new Option('HONGOS','12');
	document.frm.dis.options[12] = new Option('HUAMPARA','13');
	document.frm.dis.options[13] = new Option('HUANCAYA','14');
	document.frm.dis.options[14] = new Option('HUANEC','17');
	document.frm.dis.options[15] = new Option('HUANGASCAR','15');
	document.frm.dis.options[16] = new Option('HUANTAN','16');
	document.frm.dis.options[17] = new Option('LARAOS','18');
	document.frm.dis.options[18] = new Option('LINCHA','19');
	document.frm.dis.options[19] = new Option('MADEAN','20');
	document.frm.dis.options[20] = new Option('MIRAFLORES','21');
	document.frm.dis.options[21] = new Option('OMAS','22');
	document.frm.dis.options[22] = new Option('PUTINZA','23');
	document.frm.dis.options[23] = new Option('QUINCHES','24');
	document.frm.dis.options[24] = new Option('QUINOCAY','25');
	document.frm.dis.options[25] = new Option('SAN JOAQUIN','26');
	document.frm.dis.options[26] = new Option('SAN PEDRO DE PILAS','27');
	document.frm.dis.options[27] = new Option('TANTA','28');
	document.frm.dis.options[28] = new Option('TAURIPAMPA','29');
	document.frm.dis.options[29] = new Option('TOMAS','30');
	document.frm.dis.options[30] = new Option('TUPE','31');
	document.frm.dis.options[31] = new Option('VINAC','32');
	document.frm.dis.options[32] = new Option('VITIS','33');
	document.frm.dis.options[33] = new Option('YAUYOS','01');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BALSAPUERTO','02');
	document.frm.dis.options[2] = new Option('BARRANCA','03');
	document.frm.dis.options[3] = new Option('CAHUAPANAS','04');
	document.frm.dis.options[4] = new Option('JEBEROS','05');
	document.frm.dis.options[5] = new Option('LAGUNAS','06');
	document.frm.dis.options[6] = new Option('MANSERICHE','07');
	document.frm.dis.options[7] = new Option('MORONA','08');
	document.frm.dis.options[8] = new Option('PASTAZA','09');
	document.frm.dis.options[9] = new Option('SANTA CRUZ','10');
	document.frm.dis.options[10] = new Option('TNTE. CESAR LOPEZ ROJAS','11');
	document.frm.dis.options[11] = new Option('YURIMAGUAS','01');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANDOAS','06');
	document.frm.dis.options[2] = new Option('BARRANCA','01');
	document.frm.dis.options[3] = new Option('CAHUAPANAS','02');
	document.frm.dis.options[4] = new Option('MANSERICHE','03');
	document.frm.dis.options[5] = new Option('MORONA','04');
	document.frm.dis.options[6] = new Option('PASTAZA','05');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('NAUTA','01');
	document.frm.dis.options[2] = new Option('PARINARI (1)','02');
	document.frm.dis.options[3] = new Option('TIGRE','03');
	document.frm.dis.options[4] = new Option('TROMPETEROS','04');
	document.frm.dis.options[5] = new Option('URARINAS (2)','05');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('PEBAS','02');
	document.frm.dis.options[2] = new Option('RAMON CASTILLA','01');
	document.frm.dis.options[3] = new Option('SAN PABLO','04');
	document.frm.dis.options[4] = new Option('YAVARI','03');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO NANAY','02');
	document.frm.dis.options[2] = new Option('BELEN','12');
	document.frm.dis.options[3] = new Option('FERNANDO LORES','03');
	document.frm.dis.options[4] = new Option('INDIANA','04');
	document.frm.dis.options[5] = new Option('IQUITOS','01');
	document.frm.dis.options[6] = new Option('LAS AMAZONAS','05');
	document.frm.dis.options[7] = new Option('MAZAN','06');
	document.frm.dis.options[8] = new Option('NAPO','07');
	document.frm.dis.options[9] = new Option('PUNCHANA','08');
	document.frm.dis.options[10] = new Option('PUTUMAYO (3)','09');
	document.frm.dis.options[11] = new Option('SAN JUAN BAUTISTA','13');
	document.frm.dis.options[12] = new Option('TENIENTE MANUEL CLAV','14');
	document.frm.dis.options[13] = new Option('TORRES CAUSANA','10');
	document.frm.dis.options[14] = new Option('YAQUERANA (5)','11');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO TAPICHE','02');
	document.frm.dis.options[2] = new Option('CAPELO','03');
	document.frm.dis.options[3] = new Option('EMILIO SAN MARTIN','04');
	document.frm.dis.options[4] = new Option('JENARO HERRERA','10');
	document.frm.dis.options[5] = new Option('MAQUIA','05');
	document.frm.dis.options[6] = new Option('PUINAHUA','06');
	document.frm.dis.options[7] = new Option('REQUENA','01');
	document.frm.dis.options[8] = new Option('SAQUENA','07');
	document.frm.dis.options[9] = new Option('SOPLIN (4)','08');
	document.frm.dis.options[10] = new Option('TAPICHE','09');
	document.frm.dis.options[11] = new Option('YAQUERANA','11');
}
if ((document.frm.dep.value=='16')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CONTAMANA','01');
	document.frm.dis.options[2] = new Option('INAHUAYA','02');
	document.frm.dis.options[3] = new Option('PADRE MARQUEZ','03');
	document.frm.dis.options[4] = new Option('PAMPA HERMOSA','04');
	document.frm.dis.options[5] = new Option('SARAYACU','05');
	document.frm.dis.options[6] = new Option('VARGAS GUERRA','06');
}
if ((document.frm.dep.value=='17')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('FITZCARRALD (12)','02');
	document.frm.dis.options[2] = new Option('HUEPETUHE','04');
	document.frm.dis.options[3] = new Option('MADRE DE DIOS (13)','03');
	document.frm.dis.options[4] = new Option('MANU (11)','01');
}
if ((document.frm.dep.value=='17')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('IBERIA','02');
	document.frm.dis.options[2] = new Option('INAPARI','01');
	document.frm.dis.options[3] = new Option('TAHUAMANU','03');
}
if ((document.frm.dep.value=='17')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('INAMBARI (14)','02');
	document.frm.dis.options[2] = new Option('LABERINTO','04');
	document.frm.dis.options[3] = new Option('LAS PIEDRAS (15)','03');
	document.frm.dis.options[4] = new Option('TAMBOPATA','01');
}
if ((document.frm.dep.value=='18')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHOJATA','02');
	document.frm.dis.options[2] = new Option('COALAQUE','03');
	document.frm.dis.options[3] = new Option('ICHUNA','04');
	document.frm.dis.options[4] = new Option('LA CAPILLA','05');
	document.frm.dis.options[5] = new Option('LLOQUE','06');
	document.frm.dis.options[6] = new Option('MATALAQUE','07');
	document.frm.dis.options[7] = new Option('OMATE','01');
	document.frm.dis.options[8] = new Option('PUQUINA','08');
	document.frm.dis.options[9] = new Option('QUINISTAQUILLAS','09');
	document.frm.dis.options[10] = new Option('UBINAS','10');
	document.frm.dis.options[11] = new Option('YUNGA','11');
}
if ((document.frm.dep.value=='18')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('EL ALGARROBAL','02');
	document.frm.dis.options[2] = new Option('ILO','01');
	document.frm.dis.options[3] = new Option('PACOCHA','03');
}
if ((document.frm.dep.value=='18')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CARUMAS','02');
	document.frm.dis.options[2] = new Option('CUCHUMBAYA','03');
	document.frm.dis.options[3] = new Option('MOQUEGUA','01');
	document.frm.dis.options[4] = new Option('SAMEGUA','04');
	document.frm.dis.options[5] = new Option('SAN CRISTOBAL','05');
	document.frm.dis.options[6] = new Option('TORATA','06');
}
if ((document.frm.dep.value=='19')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHACAYAN','02');
	document.frm.dis.options[2] = new Option('GOYLLARISQUIZGA','03');
	document.frm.dis.options[3] = new Option('PAUCAR','04');
	document.frm.dis.options[4] = new Option('SAN PEDRO DE PILLAO','05');
	document.frm.dis.options[5] = new Option('SANTA ANA DE TUSI','06');
	document.frm.dis.options[6] = new Option('TAPUC','07');
	document.frm.dis.options[7] = new Option('VILCABAMBA','08');
	document.frm.dis.options[8] = new Option('YANAHUANCA','01');
}
if ((document.frm.dep.value=='19')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHONTABAMBA','02');
	document.frm.dis.options[2] = new Option('HUANCABAMBA','03');
	document.frm.dis.options[3] = new Option('OXAPAMPA','01');
	document.frm.dis.options[4] = new Option('PALCAZU','04');
	document.frm.dis.options[5] = new Option('POZUZO','05');
	document.frm.dis.options[6] = new Option('PUERTO BERMUDEZ','06');
	document.frm.dis.options[7] = new Option('VILLA RICA','07');
}
if ((document.frm.dep.value=='19')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHAUPIMARCA','01');
	document.frm.dis.options[2] = new Option('HUACHON','02');
	document.frm.dis.options[3] = new Option('HUARIACA','03');
	document.frm.dis.options[4] = new Option('HUAYLLAY','04');
	document.frm.dis.options[5] = new Option('NINACACA','05');
	document.frm.dis.options[6] = new Option('PALLANCHACRA','06');
	document.frm.dis.options[7] = new Option('PAUCARTAMBO','07');
	document.frm.dis.options[8] = new Option('S.FCO.D.ASIS D.YARUSYACAN','08');
	document.frm.dis.options[9] = new Option('SIMON BOLIVAR','09');
	document.frm.dis.options[10] = new Option('TICLACAYAN','10');
	document.frm.dis.options[11] = new Option('TINYAHUARCO','11');
	document.frm.dis.options[12] = new Option('VICCO','12');
	document.frm.dis.options[13] = new Option('YANACANCHA','13');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AYABACA','01');
	document.frm.dis.options[2] = new Option('FRIAS','02');
	document.frm.dis.options[3] = new Option('JILILI','03');
	document.frm.dis.options[4] = new Option('LAGUNAS','04');
	document.frm.dis.options[5] = new Option('MONTERO','05');
	document.frm.dis.options[6] = new Option('PACAIPAMPA','06');
	document.frm.dis.options[7] = new Option('PAIMAS','07');
	document.frm.dis.options[8] = new Option('SAPILLICA','08');
	document.frm.dis.options[9] = new Option('SICCHEZ','09');
	document.frm.dis.options[10] = new Option('SUYO','10');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CANCHAQUE','02');
	document.frm.dis.options[2] = new Option('EL CARMEN DE LA FRONTERA','03');
	document.frm.dis.options[3] = new Option('HUANCABAMBA','01');
	document.frm.dis.options[4] = new Option('HUARMACA','04');
	document.frm.dis.options[5] = new Option('LALAQUIZ','05');
	document.frm.dis.options[6] = new Option('SAN MIGUEL DE EL FAIQUE','06');
	document.frm.dis.options[7] = new Option('SONDOR','07');
	document.frm.dis.options[8] = new Option('SONDORILLO','08');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BUENOS AIRES','02');
	document.frm.dis.options[2] = new Option('CHALACO','03');
	document.frm.dis.options[3] = new Option('CHULUCANAS','01');
	document.frm.dis.options[4] = new Option('LA MATANZA','04');
	document.frm.dis.options[5] = new Option('MORROPON','05');
	document.frm.dis.options[6] = new Option('SALITRAL','06');
	document.frm.dis.options[7] = new Option('SAN JUAN DE BIGOTE','07');
	document.frm.dis.options[8] = new Option('SANTA CATALINA DE MOSSA','08');
	document.frm.dis.options[9] = new Option('SANTO DOMINGO','09');
	document.frm.dis.options[10] = new Option('YAMANGO','10');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AMOTAPE','02');
	document.frm.dis.options[2] = new Option('ARENAL','03');
	document.frm.dis.options[3] = new Option('COLAN','04');
	document.frm.dis.options[4] = new Option('LA HUACA','05');
	document.frm.dis.options[5] = new Option('PAITA','01');
	document.frm.dis.options[6] = new Option('TAMARINDO','06');
	document.frm.dis.options[7] = new Option('VICHAYAL','07');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CASTILLA','04');
	document.frm.dis.options[2] = new Option('CATACAOS','05');
	document.frm.dis.options[3] = new Option('CURA MORI','07');
	document.frm.dis.options[4] = new Option('EL TALLAN','08');
	document.frm.dis.options[5] = new Option('LA ARENA','09');
	document.frm.dis.options[6] = new Option('LA UNION','10');
	document.frm.dis.options[7] = new Option('LAS LOMAS','11');
	document.frm.dis.options[8] = new Option('PIURA','01');
	document.frm.dis.options[9] = new Option('TAMBO GRANDE','14');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BELLAVISTA DE LA UNION','02');
	document.frm.dis.options[2] = new Option('BERNAL','03');
	document.frm.dis.options[3] = new Option('CRISTO NOS VALGA','04');
	document.frm.dis.options[4] = new Option('RINCONADA LLICUAR','06');
	document.frm.dis.options[5] = new Option('SECHURA','01');
	document.frm.dis.options[6] = new Option('VICE','05');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BELLAVISTA','02');
	document.frm.dis.options[2] = new Option('IGNACIO ESCUDERO','03');
	document.frm.dis.options[3] = new Option('LANCONES','04');
	document.frm.dis.options[4] = new Option('MARCAVELICA','05');
	document.frm.dis.options[5] = new Option('MIGUEL CHECA','06');
	document.frm.dis.options[6] = new Option('QUERECOTILLO','07');
	document.frm.dis.options[7] = new Option('SALITRAL','08');
	document.frm.dis.options[8] = new Option('SULLANA','01');
}
if ((document.frm.dep.value=='20')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('EL ALTO','02');
	document.frm.dis.options[2] = new Option('LA BREA','03');
	document.frm.dis.options[3] = new Option('LOBITOS','04');
	document.frm.dis.options[4] = new Option('LOS ORGANOS','05');
	document.frm.dis.options[5] = new Option('MANCORA','06');
	document.frm.dis.options[6] = new Option('PARINAS','01');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACHAYA','02');
	document.frm.dis.options[2] = new Option('ARAPA','03');
	document.frm.dis.options[3] = new Option('ASILLO','04');
	document.frm.dis.options[4] = new Option('AZANGARO','01');
	document.frm.dis.options[5] = new Option('CAMINACA','05');
	document.frm.dis.options[6] = new Option('CHUPA','06');
	document.frm.dis.options[7] = new Option('JOSE DOMINGO CHOQUEHUANCA','07');
	document.frm.dis.options[8] = new Option('MUNANI','08');
	document.frm.dis.options[9] = new Option('POTONI','09');
	document.frm.dis.options[10] = new Option('SAMAN','10');
	document.frm.dis.options[11] = new Option('SAN ANTON','11');
	document.frm.dis.options[12] = new Option('SAN JOSE','12');
	document.frm.dis.options[13] = new Option('SAN JUAN DE SALINAS','13');
	document.frm.dis.options[14] = new Option('SANTIAGO DE PUPUJA','14');
	document.frm.dis.options[15] = new Option('TIRAPATA','15');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AJOYANI','02');
	document.frm.dis.options[2] = new Option('AYAPATA','03');
	document.frm.dis.options[3] = new Option('COASA','04');
	document.frm.dis.options[4] = new Option('CORANI','05');
	document.frm.dis.options[5] = new Option('CRUCERO','06');
	document.frm.dis.options[6] = new Option('ITUATA (16)','07');
	document.frm.dis.options[7] = new Option('MACUSANI','01');
	document.frm.dis.options[8] = new Option('OLLACHEA','08');
	document.frm.dis.options[9] = new Option('SAN GABAN','09');
	document.frm.dis.options[10] = new Option('USICAYOS','10');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('DESAGUADERO','02');
	document.frm.dis.options[2] = new Option('HUACULLANI','03');
	document.frm.dis.options[3] = new Option('JULI','01');
	document.frm.dis.options[4] = new Option('KELLUYO','04');
	document.frm.dis.options[5] = new Option('PISACOMA','05');
	document.frm.dis.options[6] = new Option('POMATA','06');
	document.frm.dis.options[7] = new Option('ZEPITA','07');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAPASO','02');
	document.frm.dis.options[2] = new Option('CONDURIRI','05');
	document.frm.dis.options[3] = new Option('ILAVE','01');
	document.frm.dis.options[4] = new Option('PILCUYO','03');
	document.frm.dis.options[5] = new Option('SANTA ROSA','04');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('COJATA','02');
	document.frm.dis.options[2] = new Option('HUANCANE','01');
	document.frm.dis.options[3] = new Option('HUATASANI','03');
	document.frm.dis.options[4] = new Option('INCHUPALLA','04');
	document.frm.dis.options[5] = new Option('PUSI','05');
	document.frm.dis.options[6] = new Option('ROSASPATA','06');
	document.frm.dis.options[7] = new Option('TARACO','07');
	document.frm.dis.options[8] = new Option('VILQUE CHICO','08');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CABANILLA','02');
	document.frm.dis.options[2] = new Option('CALAPUJA','03');
	document.frm.dis.options[3] = new Option('LAMPA','01');
	document.frm.dis.options[4] = new Option('NICASIO','04');
	document.frm.dis.options[5] = new Option('OCUVIRI','05');
	document.frm.dis.options[6] = new Option('PALCA','06');
	document.frm.dis.options[7] = new Option('PARATIA','07');
	document.frm.dis.options[8] = new Option('PUCARA','08');
	document.frm.dis.options[9] = new Option('SANTA LUCIA','09');
	document.frm.dis.options[10] = new Option('VILAVILA','10');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANTAUTA','02');
	document.frm.dis.options[2] = new Option('AYAVIRI','01');
	document.frm.dis.options[3] = new Option('CUPI','03');
	document.frm.dis.options[4] = new Option('LLALLI','04');
	document.frm.dis.options[5] = new Option('MACARI','05');
	document.frm.dis.options[6] = new Option('NUNOA','06');
	document.frm.dis.options[7] = new Option('ORURILLO','07');
	document.frm.dis.options[8] = new Option('SANTA ROSA','08');
	document.frm.dis.options[9] = new Option('UMACHIRI','09');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CONIMA','02');
	document.frm.dis.options[2] = new Option('HUAYRAPATA','03');
	document.frm.dis.options[3] = new Option('MOHO','01');
	document.frm.dis.options[4] = new Option('TILALI','04');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ACORA','02');
	document.frm.dis.options[2] = new Option('AMANTANI','03');
	document.frm.dis.options[3] = new Option('ATUNCOLLA','04');
	document.frm.dis.options[4] = new Option('CAPACHICA','05');
	document.frm.dis.options[5] = new Option('CHUCUITO','06');
	document.frm.dis.options[6] = new Option('COATA','07');
	document.frm.dis.options[7] = new Option('HUATA','08');
	document.frm.dis.options[8] = new Option('MANAZO','09');
	document.frm.dis.options[9] = new Option('PAUCARCOLLA','10');
	document.frm.dis.options[10] = new Option('PICHACANI','11');
	document.frm.dis.options[11] = new Option('PLATERIA','12');
	document.frm.dis.options[12] = new Option('PUNO','01');
	document.frm.dis.options[13] = new Option('SAN ANTONIO','13');
	document.frm.dis.options[14] = new Option('TIQUILLACA','14');
	document.frm.dis.options[15] = new Option('VILQUE','15');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANANEA','02');
	document.frm.dis.options[2] = new Option('PEDRO VILCA APAZA','03');
	document.frm.dis.options[3] = new Option('PUTINA','01');
	document.frm.dis.options[4] = new Option('QUILCAPUNCU','04');
	document.frm.dis.options[5] = new Option('SINA','05');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='11')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CABANA','02');
	document.frm.dis.options[2] = new Option('CABANILLAS','03');
	document.frm.dis.options[3] = new Option('CARACOTO','04');
	document.frm.dis.options[4] = new Option('JULIACA','01');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='12')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO INAMBARI','09');
	document.frm.dis.options[2] = new Option('CUYOCUYO','02');
	document.frm.dis.options[3] = new Option('LIMBANI','03');
	document.frm.dis.options[4] = new Option('PATAMBUCO','04');
	document.frm.dis.options[5] = new Option('PHARA','05');
	document.frm.dis.options[6] = new Option('QUIACA','06');
	document.frm.dis.options[7] = new Option('SAN JUAN DEL ORO','07');
	document.frm.dis.options[8] = new Option('SAN PEDRO DE PUTINA','10');
	document.frm.dis.options[9] = new Option('SANDIA','01');
	document.frm.dis.options[10] = new Option('YANAHUAYA','08');
}
if ((document.frm.dep.value=='21')&&(document.frm.prv.value=='13')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ANAPIA','02');
	document.frm.dis.options[2] = new Option('COPANI','03');
	document.frm.dis.options[3] = new Option('CUTURAPI','04');
	document.frm.dis.options[4] = new Option('OLLARAYA','05');
	document.frm.dis.options[5] = new Option('TINICACHI','06');
	document.frm.dis.options[6] = new Option('UNICACHI','07');
	document.frm.dis.options[7] = new Option('YUNGUYO','01');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO BIAVO','02');
	document.frm.dis.options[2] = new Option('BAJO BIAVO','03');
	document.frm.dis.options[3] = new Option('BELLAVISTA','01');
	document.frm.dis.options[4] = new Option('HUALLAGA','04');
	document.frm.dis.options[5] = new Option('SAN PABLO','05');
	document.frm.dis.options[6] = new Option('SAN RAFAEL','06');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AGUA BLANCA','02');
	document.frm.dis.options[2] = new Option('SAN JOSE DE SISA','01');
	document.frm.dis.options[3] = new Option('SAN MARTIN','03');
	document.frm.dis.options[4] = new Option('SANTA ROSA','04');
	document.frm.dis.options[5] = new Option('SHATOJA','05');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO SAPOSOA','02');
	document.frm.dis.options[2] = new Option('EL ESLABON','03');
	document.frm.dis.options[3] = new Option('PISCOYACU','04');
	document.frm.dis.options[4] = new Option('SACANCHE','05');
	document.frm.dis.options[5] = new Option('SAPOSOA','01');
	document.frm.dis.options[6] = new Option('TINGO DE SAPOSOA','06');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='05')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALONSO DE ALVARADO','02');
	document.frm.dis.options[2] = new Option('BARRANQUITA','03');
	document.frm.dis.options[3] = new Option('CAYNARACHI (19)','04');
	document.frm.dis.options[4] = new Option('CUNUMBUQUI','05');
	document.frm.dis.options[5] = new Option('LAMAS','01');
	document.frm.dis.options[6] = new Option('PINTO RECODO','06');
	document.frm.dis.options[7] = new Option('RUMISAPA','07');
	document.frm.dis.options[8] = new Option('SAN ROQUE DE CUMBAZA','08');
	document.frm.dis.options[9] = new Option('SHANAO','09');
	document.frm.dis.options[10] = new Option('TABALOSOS','10');
	document.frm.dis.options[11] = new Option('ZAPATERO','11');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='06')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAMPANILLA','02');
	document.frm.dis.options[2] = new Option('HUICUNGO','03');
	document.frm.dis.options[3] = new Option('JUANJUI','01');
	document.frm.dis.options[4] = new Option('PACHIZA','04');
	document.frm.dis.options[5] = new Option('PAJARILLO','05');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CALZADA','02');
	document.frm.dis.options[2] = new Option('HABANA','03');
	document.frm.dis.options[3] = new Option('JEPELACIO','04');
	document.frm.dis.options[4] = new Option('MOYOBAMBA','01');
	document.frm.dis.options[5] = new Option('SORITOR','05');
	document.frm.dis.options[6] = new Option('YANTALO','06');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='07')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('BUENOS AIRES','02');
	document.frm.dis.options[2] = new Option('CASPISAPA','03');
	document.frm.dis.options[3] = new Option('PICOTA','01');
	document.frm.dis.options[4] = new Option('PILLUANA','04');
	document.frm.dis.options[5] = new Option('PUCACACA','05');
	document.frm.dis.options[6] = new Option('SAN CRISTOBAL','06');
	document.frm.dis.options[7] = new Option('SAN HILARION','07');
	document.frm.dis.options[8] = new Option('SHAMBOYACU','08');
	document.frm.dis.options[9] = new Option('TINGO DE PONASA','09');
	document.frm.dis.options[10] = new Option('TRES UNIDOS','10');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='08')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AWAJUN','02');
	document.frm.dis.options[2] = new Option('ELIAS SOPLIN VARGAS','03');
	document.frm.dis.options[3] = new Option('NUEVA CAJAMARCA','04');
	document.frm.dis.options[4] = new Option('PARDO MIGUEL','05');
	document.frm.dis.options[5] = new Option('POSIC','06');
	document.frm.dis.options[6] = new Option('RIOJA','01');
	document.frm.dis.options[7] = new Option('SAN FERNANDO','07');
	document.frm.dis.options[8] = new Option('YORONGOS','08');
	document.frm.dis.options[9] = new Option('YURACYACU','09');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='09')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALBERTO LEVEAU','02');
	document.frm.dis.options[2] = new Option('CACATACHI','03');
	document.frm.dis.options[3] = new Option('CHAZUTA','04');
	document.frm.dis.options[4] = new Option('CHIPURANA','05');
	document.frm.dis.options[5] = new Option('EL PORVENIR','06');
	document.frm.dis.options[6] = new Option('HUIMBAYOC','07');
	document.frm.dis.options[7] = new Option('JUAN GUERRA','08');
	document.frm.dis.options[8] = new Option('LA BANDA DE SHILCAYO','09');
	document.frm.dis.options[9] = new Option('MORALES','10');
	document.frm.dis.options[10] = new Option('PAPAPLAYA','11');
	document.frm.dis.options[11] = new Option('SAN ANTONIO','12');
	document.frm.dis.options[12] = new Option('SAUCE','13');
	document.frm.dis.options[13] = new Option('SHAPAJA','14');
	document.frm.dis.options[14] = new Option('TARAPOTO','01');
}
if ((document.frm.dep.value=='22')&&(document.frm.prv.value=='10')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('NUEVO PROGRESO','02');
	document.frm.dis.options[2] = new Option('POLVORA','03');
	document.frm.dis.options[3] = new Option('SHUNTE','04');
	document.frm.dis.options[4] = new Option('TOCACHE','01');
	document.frm.dis.options[5] = new Option('UCHIZA','05');
}
if ((document.frm.dep.value=='23')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CAIRANI','02');
	document.frm.dis.options[2] = new Option('CAMILACA','03');
	document.frm.dis.options[3] = new Option('CANDARAVE','01');
	document.frm.dis.options[4] = new Option('CURIBAYA','04');
	document.frm.dis.options[5] = new Option('HUANUARA','05');
	document.frm.dis.options[6] = new Option('QUILAHUANI','06');
}
if ((document.frm.dep.value=='23')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ILABAYA','02');
	document.frm.dis.options[2] = new Option('ITE','03');
	document.frm.dis.options[3] = new Option('LOCUMBA','01');
}
if ((document.frm.dep.value=='23')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('ALTO DE LA ALIANZA','02');
	document.frm.dis.options[2] = new Option('CALANA','03');
	document.frm.dis.options[3] = new Option('CIUDAD NUEVA','04');
	document.frm.dis.options[4] = new Option('CORONEL GREGORIO ALBARRACIN LA','10');
	document.frm.dis.options[5] = new Option('INCLAN','05');
	document.frm.dis.options[6] = new Option('PACHIA','06');
	document.frm.dis.options[7] = new Option('PALCA','07');
	document.frm.dis.options[8] = new Option('POCOLLAY','08');
	document.frm.dis.options[9] = new Option('SAMA','09');
	document.frm.dis.options[10] = new Option('TACNA','01');
}
if ((document.frm.dep.value=='23')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CHUCATAMANI','02');
	document.frm.dis.options[2] = new Option('ESTIQUE','03');
	document.frm.dis.options[3] = new Option('ESTIQUE-PAMPA','04');
	document.frm.dis.options[4] = new Option('SITAJARA','05');
	document.frm.dis.options[5] = new Option('SUSAPAYA','06');
	document.frm.dis.options[6] = new Option('TARATA','01');
	document.frm.dis.options[7] = new Option('TARUCACHI','07');
	document.frm.dis.options[8] = new Option('TICACO','08');
}
if ((document.frm.dep.value=='24')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CANOAS DE PUNTA SAL','03');
	document.frm.dis.options[2] = new Option('CASITAS','02');
	document.frm.dis.options[3] = new Option('ZORRITOS','01');
}
if ((document.frm.dep.value=='24')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CORRALES','02');
	document.frm.dis.options[2] = new Option('LA CRUZ','03');
	document.frm.dis.options[3] = new Option('PAMPAS DE HOSPITAL','04');
	document.frm.dis.options[4] = new Option('SAN JACINTO','05');
	document.frm.dis.options[5] = new Option('SAN JUAN DE LA VIRGEN','06');
	document.frm.dis.options[6] = new Option('TUMBES','01');
}
if ((document.frm.dep.value=='24')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('AGUAS VERDES','02');
	document.frm.dis.options[2] = new Option('MATAPALO','03');
	document.frm.dis.options[3] = new Option('PAPAYAL','04');
	document.frm.dis.options[4] = new Option('ZARUMILLA','01');
}
if ((document.frm.dep.value=='25')&&(document.frm.prv.value=='02')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('RAYMONDI','01');
	document.frm.dis.options[2] = new Option('SEPAHUA','02');
	document.frm.dis.options[3] = new Option('TAHUANIA','03');
	document.frm.dis.options[4] = new Option('YURUA','04');
}
if ((document.frm.dep.value=='25')&&(document.frm.prv.value=='01')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CALLARIA','01');
	document.frm.dis.options[2] = new Option('CAMPOVERDE','02');
	document.frm.dis.options[3] = new Option('IPARIA','03');
	document.frm.dis.options[4] = new Option('MASISEA','04');
	document.frm.dis.options[5] = new Option('NUEVA REQUENA','06');
	document.frm.dis.options[6] = new Option('YARINACOCHA','05');
}
if ((document.frm.dep.value=='25')&&(document.frm.prv.value=='03')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('CURIMANA','03');
	document.frm.dis.options[2] = new Option('IRAZOLA','02');
	document.frm.dis.options[3] = new Option('PADRE ABAD','01');
}
if ((document.frm.dep.value=='25')&&(document.frm.prv.value=='04')){
	document.frm.dis.length = 0;
	document.frm.dis.options[0] = new Option('Seleccione una','NN');
	document.frm.dis.options[1] = new Option('PURUS','01');
}

	
}