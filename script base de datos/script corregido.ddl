-- Generado por Oracle SQL Developer Data Modeler 22.2.0.165.1149
--   en:        2022-10-10 22:02:24 CST
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g



-- predefined type, no DDL - MDSYS.SDO_GEOMETRY

-- predefined type, no DDL - XMLTYPE

CREATE TABLE cat_p (
    id       INTEGER NOT NULL,
    nombre   VARCHAR2(80) NOT NULL,
    cat_p_id INTEGER
);

ALTER TABLE cat_p ADD CONSTRAINT cat_p_pk PRIMARY KEY ( id );

CREATE TABLE compra (
    id            INTEGER NOT NULL,
    descripcion   VARCHAR2(80) NOT NULL,
    total         INTEGER NOT NULL,
    proveedor_nit INTEGER NOT NULL,
    estado_id     INTEGER NOT NULL,
    producto_id   INTEGER NOT NULL
);

ALTER TABLE compra ADD CONSTRAINT compra_pk PRIMARY KEY ( id );

CREATE TABLE depa (
    id     INTEGER NOT NULL,
    nombre VARCHAR2(80) NOT NULL
);

ALTER TABLE depa ADD CONSTRAINT depa_pk PRIMARY KEY ( id );

CREATE TABLE dispo (
    id     INTEGER NOT NULL,
    nombre VARCHAR2(30) NOT NULL
);

ALTER TABLE dispo ADD CONSTRAINT dispo_pk PRIMARY KEY ( id );

CREATE TABLE estado (
    id     INTEGER NOT NULL,
    nombre VARCHAR2(30) NOT NULL
);

ALTER TABLE estado ADD CONSTRAINT estado_pk PRIMARY KEY ( id );

CREATE TABLE muni (
    id      INTEGER NOT NULL,
    depa_id INTEGER NOT NULL,
    nombre  VARCHAR2(80) NOT NULL
);

ALTER TABLE muni ADD CONSTRAINT muni_pk PRIMARY KEY ( id );

CREATE TABLE produc_img (
    id          INTEGER NOT NULL,
    link        VARCHAR2(80) NOT NULL,
    producto_id INTEGER NOT NULL
);

ALTER TABLE produc_img ADD CONSTRAINT produc_img_pk PRIMARY KEY ( id );

CREATE TABLE producto (
    id          INTEGER NOT NULL,
    nombre      VARCHAR2(80) NOT NULL,
    descripcion VARCHAR2(80) NOT NULL,
    stock       INTEGER NOT NULL,
    precio      INTEGER NOT NULL,
    min_stock   INTEGER NOT NULL,
    max_stock   INTEGER NOT NULL,
    dispo_id    INTEGER NOT NULL,
    cat_p_id    INTEGER NOT NULL
);

ALTER TABLE producto ADD CONSTRAINT producto_pk PRIMARY KEY ( id );

CREATE TABLE proveedor (
    nit            INTEGER NOT NULL,
    nombre         VARCHAR2(80) NOT NULL,
    direccion      VARCHAR2(100) NOT NULL,
    telefono       INTEGER NOT NULL,
    email_contacto VARCHAR2(80) NOT NULL
);

ALTER TABLE proveedor ADD CONSTRAINT proveedor_pk PRIMARY KEY ( nit );

CREATE TABLE tarjeta (
    correlativo       INTEGER NOT NULL,
    no_tarjeta        VARCHAR2(16) NOT NULL,
    nombre_tarjeta    VARCHAR2(80) NOT NULL,
    cvv               INTEGER NOT NULL,
    fecha_vencimiento DATE NOT NULL,
    saldo             INTEGER NOT NULL
);

ALTER TABLE tarjeta ADD CONSTRAINT tarjeta_pk PRIMARY KEY ( correlativo );

CREATE TABLE temporada (
    id                   INTEGER NOT NULL,
    nombre               VARCHAR2(30) NOT NULL,
    fecha_inicio         DATE NOT NULL,
    fecha_fin            DATE NOT NULL,
    porcentaje_descuento INTEGER NOT NULL,
    estado_id            INTEGER NOT NULL,
    cat_p_id             INTEGER NOT NULL
);

ALTER TABLE temporada ADD CONSTRAINT temporada_pk PRIMARY KEY ( id );

CREATE TABLE usuario (
    id        INTEGER NOT NULL,
    email     VARCHAR2(80) NOT NULL,
    password  VARCHAR2(32) NOT NULL,
    nombre    VARCHAR2(30) NOT NULL,
    apellido  VARCHAR2(30) NOT NULL,
    telefono  INTEGER NOT NULL,
    estado_id INTEGER NOT NULL
);

ALTER TABLE usuario ADD CONSTRAINT usuario_pk PRIMARY KEY ( id );

CREATE TABLE venta (
    id                  INTEGER NOT NULL,
    direccion_entrega   VARCHAR2(80) NOT NULL,
    nit                 INTEGER NOT NULL,
    telefono_contacto   INTEGER NOT NULL,
    email               VARCHAR2(80) NOT NULL,
    lista_productos     VARCHAR2(1000) NOT NULL,
    sub_total           INTEGER NOT NULL,
    total               INTEGER NOT NULL,
    fecha_venta         DATE NOT NULL,
    estado_id           INTEGER NOT NULL,
    depa_id             INTEGER NOT NULL,
    muni_id             INTEGER NOT NULL,
    usuario_id          INTEGER NOT NULL,
    tarjeta_correlativo INTEGER NOT NULL
);

ALTER TABLE venta ADD CONSTRAINT venta_pk PRIMARY KEY ( id );

CREATE TABLE whislist (
    correlativo  INTEGER NOT NULL,
    fecha_agrega DATE NOT NULL,
    usuario_id   INTEGER NOT NULL,
    producto_id  INTEGER NOT NULL
);

ALTER TABLE whislist ADD CONSTRAINT whislist_pk PRIMARY KEY ( correlativo );

ALTER TABLE cat_p
    ADD CONSTRAINT cat_p_cat_p_fk FOREIGN KEY ( cat_p_id )
        REFERENCES cat_p ( id );

ALTER TABLE compra
    ADD CONSTRAINT compra_estado_fk FOREIGN KEY ( estado_id )
        REFERENCES estado ( id );

ALTER TABLE compra
    ADD CONSTRAINT compra_producto_fk FOREIGN KEY ( producto_id )
        REFERENCES producto ( id );

ALTER TABLE compra
    ADD CONSTRAINT compra_proveedor_fk FOREIGN KEY ( proveedor_nit )
        REFERENCES proveedor ( nit );

ALTER TABLE muni
    ADD CONSTRAINT muni_depa_fk FOREIGN KEY ( depa_id )
        REFERENCES depa ( id );

ALTER TABLE produc_img
    ADD CONSTRAINT produc_img_producto_fk FOREIGN KEY ( producto_id )
        REFERENCES producto ( id );

ALTER TABLE producto
    ADD CONSTRAINT producto_cat_p_fk FOREIGN KEY ( cat_p_id )
        REFERENCES cat_p ( id );

ALTER TABLE producto
    ADD CONSTRAINT producto_dispo_fk FOREIGN KEY ( dispo_id )
        REFERENCES dispo ( id );

ALTER TABLE temporada
    ADD CONSTRAINT temporada_cat_p_fk FOREIGN KEY ( cat_p_id )
        REFERENCES cat_p ( id );

ALTER TABLE temporada
    ADD CONSTRAINT temporada_estado_fk FOREIGN KEY ( estado_id )
        REFERENCES estado ( id );

ALTER TABLE usuario
    ADD CONSTRAINT usuario_estado_fk FOREIGN KEY ( estado_id )
        REFERENCES estado ( id );

ALTER TABLE venta
    ADD CONSTRAINT venta_depa_fk FOREIGN KEY ( depa_id )
        REFERENCES depa ( id );

ALTER TABLE venta
    ADD CONSTRAINT venta_estado_fk FOREIGN KEY ( estado_id )
        REFERENCES estado ( id );

ALTER TABLE venta
    ADD CONSTRAINT venta_muni_fk FOREIGN KEY ( muni_id )
        REFERENCES muni ( id );

ALTER TABLE venta
    ADD CONSTRAINT venta_tarjeta_fk FOREIGN KEY ( tarjeta_correlativo )
        REFERENCES tarjeta ( correlativo );

ALTER TABLE venta
    ADD CONSTRAINT venta_usuario_fk FOREIGN KEY ( usuario_id )
        REFERENCES usuario ( id );

ALTER TABLE whislist
    ADD CONSTRAINT whislist_producto_fk FOREIGN KEY ( producto_id )
        REFERENCES producto ( id );

ALTER TABLE whislist
    ADD CONSTRAINT whislist_usuario_fk FOREIGN KEY ( usuario_id )
        REFERENCES usuario ( id );

-- Creacion de sequencias

CREATE SEQUENCE cat
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE prod_img
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE prod
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE tar
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE temp
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE usuarios
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE vent
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

CREATE SEQUENCE whishl
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1;

-- Volcado de datos

-- Departamento

INSERT INTO depa VALUES (1, 'Peten');
INSERT INTO depa VALUES (2, 'Huehuetenango');
INSERT INTO depa VALUES (3, 'Quiche');
INSERT INTO depa VALUES (4, 'Alta Verapaz');
INSERT INTO depa VALUES (5, 'Izabal');
INSERT INTO depa VALUES (6, 'Baja Verapaz');
INSERT INTO depa VALUES (7, 'El Progreso');
INSERT INTO depa VALUES (8, 'Zacapa');
INSERT INTO depa VALUES (9, 'San Marcos');
INSERT INTO depa VALUES (10, 'Quetzaltenango');
INSERT INTO depa VALUES (11, 'Totonicapan');
INSERT INTO depa VALUES (12, 'Solola');
INSERT INTO depa VALUES (13, 'Chimaltenango');
INSERT INTO depa VALUES (14, 'Sacatepequez');
INSERT INTO depa VALUES (15, 'Guatemala');
INSERT INTO depa VALUES (16, 'Jalapa');
INSERT INTO depa VALUES (17, 'Chiquimula');
INSERT INTO depa VALUES (18, 'Retalhuleu');
INSERT INTO depa VALUES (19, 'Suchitepequez');
INSERT INTO depa VALUES (20, 'Escuintla');
INSERT INTO depa VALUES (21, 'Santa Rosa');
INSERT INTO depa VALUES (22, 'Jutiapa');

-- Municipios
INSERT INTO muni VALUES (101, 1, 'Flores');
INSERT INTO muni VALUES (102, 1, 'San Jose');
INSERT INTO muni VALUES (103, 1, 'San Benito');
INSERT INTO muni VALUES (104, 1, 'San Andres');
INSERT INTO muni VALUES (105, 1, 'La Libertad');
INSERT INTO muni VALUES (106, 1, 'San Francisco');
INSERT INTO muni VALUES (107, 1, 'Santa Ana');
INSERT INTO muni VALUES (108, 1, 'Dolores');
INSERT INTO muni VALUES (109, 1, 'San Luis');
INSERT INTO muni VALUES (110, 1, 'Sayaxche');
INSERT INTO muni VALUES (111, 1, 'Melchor de mencos');
INSERT INTO muni VALUES (112, 1, 'Poptun');
INSERT INTO muni VALUES (201, 2, 'Huehuetenango');
INSERT INTO muni VALUES (202, 2, 'Chiantla');
INSERT INTO muni VALUES (203, 2, 'Malacatancito');
INSERT INTO muni VALUES (204, 2, 'Cuilco');
INSERT INTO muni VALUES (205, 2, 'Nenton');
INSERT INTO muni VALUES (206, 2, 'San Pedro Necta');
INSERT INTO muni VALUES (207, 2, 'Jacaltenango');
INSERT INTO muni VALUES (208, 2, 'San Pedro Soloma');
INSERT INTO muni VALUES (209, 2, 'San Ildelfonso Ixtahuac´n');
INSERT INTO muni VALUES (210, 2, 'Santa Barbara');
INSERT INTO muni VALUES (211, 2, 'La Libertad');
INSERT INTO muni VALUES (212, 2, 'La Democracia');
INSERT INTO muni VALUES (213, 2, 'San Miguel Acatan');
INSERT INTO muni VALUES (214, 2, 'San Rafael La Independencia');
INSERT INTO muni VALUES (215, 2, 'Todos Santos Chuchcumatan');
INSERT INTO muni VALUES (216, 2, 'San Juan Atitan');
INSERT INTO muni VALUES (217, 2, 'Santa Eulalia');
INSERT INTO muni VALUES (218, 2, 'San Mateo Ixtatan');
INSERT INTO muni VALUES (219, 2, 'Colotenango');
INSERT INTO muni VALUES (220, 2, 'San Sebastian Huehuetenango');
INSERT INTO muni VALUES (221, 2, 'Tectitan');
INSERT INTO muni VALUES (222, 2, 'Concepcion Huista');
INSERT INTO muni VALUES (223, 2, 'San Juan Ixcoy');
INSERT INTO muni VALUES (224, 2, 'San Antonio Huista');
INSERT INTO muni VALUES (225, 2, 'San Sebastian Coatan');
INSERT INTO muni VALUES (226, 2, 'Santa Cruz Barillas');
INSERT INTO muni VALUES (227, 2, 'Aguacatan');
INSERT INTO muni VALUES (228, 2, 'San Rafael Petzal');
INSERT INTO muni VALUES (229, 2, 'San Gaspar Ixchil');
INSERT INTO muni VALUES (230, 2, 'Santiago Chimaltenango');
INSERT INTO muni VALUES (231, 2, 'Santa Ana Huista');
INSERT INTO muni VALUES (301, 3, 'Santa Cruz del Quiche');
INSERT INTO muni VALUES (302, 3, 'Chiche');
INSERT INTO muni VALUES (303, 3, 'Chinique');
INSERT INTO muni VALUES (304, 3, 'Zacualpa');
INSERT INTO muni VALUES (305, 3, 'Chajul');
INSERT INTO muni VALUES (306, 3, 'Santo Tomas Chichicstenango');
INSERT INTO muni VALUES (307, 3, 'Patzite');
INSERT INTO muni VALUES (308, 3, 'San Antonio Ilotenango');
INSERT INTO muni VALUES (309, 3, 'San Pedro Jocopilas');
INSERT INTO muni VALUES (310, 3, 'Cunen');
INSERT INTO muni VALUES (311, 3, 'San Juan Cotzal');
INSERT INTO muni VALUES (312, 3, 'Joyabaj');
INSERT INTO muni VALUES (313, 3, 'Santa Maria Nebaj');
INSERT INTO muni VALUES (314, 3, 'San Andres Sajcabaja');
INSERT INTO muni VALUES (315, 3, 'San Miguel Uspatan');
INSERT INTO muni VALUES (316, 3, 'Sacapulas');
INSERT INTO muni VALUES (317, 3, 'San Bartolome Jocotenango');
INSERT INTO muni VALUES (318, 3, 'Canilla');
INSERT INTO muni VALUES (319, 3, 'Chicaman');
INSERT INTO muni VALUES (320, 3, 'Playa Grnade - Ixcan');
INSERT INTO muni VALUES (321, 3, 'Pachalum');
INSERT INTO muni VALUES (401, 4, 'Coban');
INSERT INTO muni VALUES (402, 4, 'Santa Cruz Verapaz');
INSERT INTO muni VALUES (403, 4, 'San Cristobal Verapaz');
INSERT INTO muni VALUES (404, 4, 'Tactic');
INSERT INTO muni VALUES (405, 4, 'Tamahu');
INSERT INTO muni VALUES (406, 4, 'San Miguel Tucuru');
INSERT INTO muni VALUES (407, 4, 'Panzos');
INSERT INTO muni VALUES (408, 4, 'Senahu');
INSERT INTO muni VALUES (409, 4, 'San Pedro Carcha');
INSERT INTO muni VALUES (410, 4, 'SanJuan Chamelco');
INSERT INTO muni VALUES (411, 4, 'Lanquin');
INSERT INTO muni VALUES (412, 4, 'Santa Maria Cahabon');
INSERT INTO muni VALUES (413, 4, 'Chisec');
INSERT INTO muni VALUES (414, 4, 'Chahal');
INSERT INTO muni VALUES (415, 4, 'Fray Bartolome de las Casas');
INSERT INTO muni VALUES (416, 4, 'Santa Catarina La Tinta');
INSERT INTO muni VALUES (501, 5, 'Puerto Barrios');
INSERT INTO muni VALUES (502, 5, 'Livingston');
INSERT INTO muni VALUES (503, 5, 'El Estor');
INSERT INTO muni VALUES (504, 5, 'Morales');
INSERT INTO muni VALUES (505, 5, 'Los Amates');
INSERT INTO muni VALUES (601, 6, 'Salama');
INSERT INTO muni VALUES (602, 6, 'San Miguel Chicaj');
INSERT INTO muni VALUES (603, 6, 'Rabinal');
INSERT INTO muni VALUES (604, 6, 'Cubulco');
INSERT INTO muni VALUES (605, 6, 'Granados');
INSERT INTO muni VALUES (606, 6, 'Santa Cruz El Chol');
INSERT INTO muni VALUES (607, 6, 'San Jeronimo');
INSERT INTO muni VALUES (608, 6, 'Purulha');
INSERT INTO muni VALUES (701, 7, 'Guastatoya');
INSERT INTO muni VALUES (702, 7, 'Morazan');
INSERT INTO muni VALUES (703, 7, 'San Agustin Acasaguastlan');
INSERT INTO muni VALUES (704, 7, 'San Cristobal Acasaguastlan');
INSERT INTO muni VALUES (705, 7, 'El Jicaro');
INSERT INTO muni VALUES (706, 7, 'Sansare');
INSERT INTO muni VALUES (707, 7, 'Sanarate');
INSERT INTO muni VALUES (708, 7, 'San Antonio La Paz');
INSERT INTO muni VALUES (801, 8, 'Zacapa');
INSERT INTO muni VALUES (802, 8, 'Estanzuela');
INSERT INTO muni VALUES (803, 8, 'Rio Hondo');
INSERT INTO muni VALUES (804, 8, 'gualan');
INSERT INTO muni VALUES (805, 8, 'Teculutan');
INSERT INTO muni VALUES (806, 8, 'Usumatlan');
INSERT INTO muni VALUES (807, 8, 'Cabañas');
INSERT INTO muni VALUES (808, 8, 'San Diego');
INSERT INTO muni VALUES (809, 8, 'La Union');
INSERT INTO muni VALUES (810, 8, 'Huite');
INSERT INTO muni VALUES (901, 9, 'San Marcos');
INSERT INTO muni VALUES (902, 9, 'San Pedro Sacatepequez');
INSERT INTO muni VALUES (903, 9, 'Comitancillo');
INSERT INTO muni VALUES (904, 9, 'San Antonio Sacatepequez');
INSERT INTO muni VALUES (905, 9, 'San Miguel Ixtahuacan');
INSERT INTO muni VALUES (906, 9, 'Concepcion Tutuapa');
INSERT INTO muni VALUES (907, 9, 'Tacana');
INSERT INTO muni VALUES (908, 9, 'Sibinal');
INSERT INTO muni VALUES (909, 9, 'Tajumulco');
INSERT INTO muni VALUES (910, 9, 'Tejutla');
INSERT INTO muni VALUES (911, 9, 'San Rafael Pie de la Cuesta');
INSERT INTO muni VALUES (912, 9, 'Nuevo Progreso');
INSERT INTO muni VALUES (913, 9, 'El Tumbador');
INSERT INTO muni VALUES (914, 9, 'San Jose El Rodeo');
INSERT INTO muni VALUES (915, 9, 'Malacatan');
INSERT INTO muni VALUES (916, 9, 'Catarina');
INSERT INTO muni VALUES (917, 9, 'Ayutla');
INSERT INTO muni VALUES (918, 9, 'Ocos');
INSERT INTO muni VALUES (919, 9, 'San Pablo');
INSERT INTO muni VALUES (920, 9, 'El Quetzal');
INSERT INTO muni VALUES (921, 9, 'La Reforma');
INSERT INTO muni VALUES (922, 9, 'Pajapita');
INSERT INTO muni VALUES (923, 9, 'Ixchiguan');
INSERT INTO muni VALUES (924, 9, 'San Jose Ojetenan');
INSERT INTO muni VALUES (925, 9, 'San Cristobal Cucho');
INSERT INTO muni VALUES (926, 9, 'Sipacapa');
INSERT INTO muni VALUES (927, 9, 'Esquipulas Palo Gordo');
INSERT INTO muni VALUES (928, 9, 'Rio Blanco');
INSERT INTO muni VALUES (929, 9, 'San Lorenzo');
INSERT INTO muni VALUES (1001, 10, 'Quetzaltenango');
INSERT INTO muni VALUES (1002, 10, 'Salcaja');
INSERT INTO muni VALUES (1003, 10, 'Olintepeque');
INSERT INTO muni VALUES (1004, 10, 'San Carlos Sija');
INSERT INTO muni VALUES (1005, 10, 'Sibilia');
INSERT INTO muni VALUES (1006, 10, 'Cabrican');
INSERT INTO muni VALUES (1007, 10, 'Cajola');
INSERT INTO muni VALUES (1008, 10, 'San Miguel Siguilça');
INSERT INTO muni VALUES (1009, 10, 'San Juan Ostuncalco');
INSERT INTO muni VALUES (1010, 10, 'San Mateo');
INSERT INTO muni VALUES (1011, 10, 'Concepcion Chiquirichapa');
INSERT INTO muni VALUES (1012, 10, 'San Martin Sacatepequez');
INSERT INTO muni VALUES (1013, 10, 'Almolonga');
INSERT INTO muni VALUES (1014, 10, 'Cantel');
INSERT INTO muni VALUES (1015, 10, 'Huitan');
INSERT INTO muni VALUES (1016, 10, 'Zunil');
INSERT INTO muni VALUES (1017, 10, 'Colomba');
INSERT INTO muni VALUES (1018, 10, 'San Francisco La Union');
INSERT INTO muni VALUES (1019, 10, 'El Palmar');
INSERT INTO muni VALUES (1020, 10, 'Coatepeque');
INSERT INTO muni VALUES (1021, 10, 'Genova');
INSERT INTO muni VALUES (1022, 10, 'Flores Costa Cuca');
INSERT INTO muni VALUES (1023, 10, 'La Esperanza');
INSERT INTO muni VALUES (1024, 10, 'Palestina de los Altos');
INSERT INTO muni VALUES (1101, 11, 'Totonicapan');
INSERT INTO muni VALUES (1102, 11, 'San Cristobal Totonicapan');
INSERT INTO muni VALUES (1103, 11, 'San Francisco El Alto');
INSERT INTO muni VALUES (1104, 11, 'San Andres Xecul');
INSERT INTO muni VALUES (1105, 11, 'Momostenango');
INSERT INTO muni VALUES (1106, 11, 'Santa Maria Chiquimula');
INSERT INTO muni VALUES (1107, 11, 'Santa Lucia La Reforma');
INSERT INTO muni VALUES (1108, 11, 'San Bartolo Aguas Calientes');
INSERT INTO muni VALUES (1201, 12, 'Solola');
INSERT INTO muni VALUES (1202, 12, 'San Jose Chacaya');
INSERT INTO muni VALUES (1203, 12, 'Santa Maria Visitacion');
INSERT INTO muni VALUES (1204, 12, 'Santa Lucia Utatlan');
INSERT INTO muni VALUES (1205, 12, 'Nahuala');
INSERT INTO muni VALUES (1206, 12, 'Santa Catarina Ixtahuacan');
INSERT INTO muni VALUES (1207, 12, 'Santa Clara La Laguna');
INSERT INTO muni VALUES (1208, 12, 'Concepcion');
INSERT INTO muni VALUES (1209, 12, 'San Andres Semetabaj');
INSERT INTO muni VALUES (1210, 12, 'Panajachel');
INSERT INTO muni VALUES (1211, 12, 'Santa Catarina Palopo');
INSERT INTO muni VALUES (1212, 12, 'San Antonio Palopo');
INSERT INTO muni VALUES (1213, 12, 'San Lucas Toliman');
INSERT INTO muni VALUES (1214, 12, 'Santa Cruz La Laguna');
INSERT INTO muni VALUES (1215, 12, 'Sna Pablo La Laguna');
INSERT INTO muni VALUES (1216, 12, 'San Marcos La Laguna');
INSERT INTO muni VALUES (1217, 12, 'San Juan La Laguna');
INSERT INTO muni VALUES (1218, 12, 'San Pedro La Laguna');
INSERT INTO muni VALUES (1219, 12, 'Santiago Atitlan');
INSERT INTO muni VALUES (1301, 13, 'Chimaltenango');
INSERT INTO muni VALUES (1302, 13, 'San Jose Poaquil');
INSERT INTO muni VALUES (1303, 13, 'San Martin Jilotepeque');
INSERT INTO muni VALUES (1304, 13, 'San Juan Comalapa');
INSERT INTO muni VALUES (1305, 13, 'Santa Apolonia');
INSERT INTO muni VALUES (1306, 13, 'Tecpan Guatemala');
INSERT INTO muni VALUES (1307, 13, 'Patzun');
INSERT INTO muni VALUES (1308, 13, 'San Miguel Pochuta');
INSERT INTO muni VALUES (1309, 13, 'Patzicia');
INSERT INTO muni VALUES (1310, 13, 'Santa Cruz Balanya');
INSERT INTO muni VALUES (1311, 13, 'Acatenango');
INSERT INTO muni VALUES (1312, 13, 'San Pedro Yepocapa');
INSERT INTO muni VALUES (1313, 13, 'San Andres Itzapa');
INSERT INTO muni VALUES (1314, 13, 'Parramos');
INSERT INTO muni VALUES (1315, 13, 'Zaragoza');
INSERT INTO muni VALUES (1316, 13, 'El Tejar');
INSERT INTO muni VALUES (1401, 14, 'Antigua Guatemala');
INSERT INTO muni VALUES (1402, 14, 'Jocotenango');
INSERT INTO muni VALUES (1403, 14, 'Pastores');
INSERT INTO muni VALUES (1404, 14, 'Sumpango');
INSERT INTO muni VALUES (1405, 14, 'Santo Domingo Xenacoj');
INSERT INTO muni VALUES (1406, 14, 'Santiago Sacatepequez');
INSERT INTO muni VALUES (1407, 14, 'San Bartolome Milpas Altas');
INSERT INTO muni VALUES (1408, 14, 'San Lucas Sacatepequez');
INSERT INTO muni VALUES (1409, 14, 'Santa Lucia Milpas Altas');
INSERT INTO muni VALUES (1410, 14, 'Magdalena Milpas Altas');
INSERT INTO muni VALUES (1411, 14, 'Santa Maria de Jesus');
INSERT INTO muni VALUES (1412, 14, 'Ciudad Vieja');
INSERT INTO muni VALUES (1413, 14, 'San Miguel Dueñas');
INSERT INTO muni VALUES (1414, 14, 'San Juan Alotenango');
INSERT INTO muni VALUES (1415, 14, 'San Antonio Aguas Calientes');
INSERT INTO muni VALUES (1416, 14, 'Santa Catarina Barahona');
INSERT INTO muni VALUES (1501, 15, 'Guatemala');
INSERT INTO muni VALUES (1502, 15, 'Santa Catarina Pinula');
INSERT INTO muni VALUES (1503, 15, 'San Jose Pinula');
INSERT INTO muni VALUES (1504, 15, 'San Jose del Golfo');
INSERT INTO muni VALUES (1505, 15, 'Palencia');
INSERT INTO muni VALUES (1506, 15, 'Chinautla');
INSERT INTO muni VALUES (1507, 15, 'San Pedro Ayampuc');
INSERT INTO muni VALUES (1508, 15, 'Mixco');
INSERT INTO muni VALUES (1509, 15, 'San Pedro Sacatepequez');
INSERT INTO muni VALUES (1510, 15, 'San Juan Sacatepequez');
INSERT INTO muni VALUES (1511, 15, 'San Raymundo');
INSERT INTO muni VALUES (1512, 15, 'Chuarrancho');
INSERT INTO muni VALUES (1513, 15, 'Fraijanes');
INSERT INTO muni VALUES (1514, 15, 'Amatitlan');
INSERT INTO muni VALUES (1515, 15, 'Villa Nueva');
INSERT INTO muni VALUES (1516, 15, 'Villa Canales');
INSERT INTO muni VALUES (1517, 15, 'San Miguel Petapa');
INSERT INTO muni VALUES (1601, 16, 'Jalapa');
INSERT INTO muni VALUES (1602, 16, 'San Pedro Pinula');
INSERT INTO muni VALUES (1603, 16, 'San Luis Jilotepeque');
INSERT INTO muni VALUES (1604, 16, 'San Manuel Chaparron');
INSERT INTO muni VALUES (1605, 16, 'San Carlos Alzatate');
INSERT INTO muni VALUES (1606, 16, 'Monjas');
INSERT INTO muni VALUES (1607, 16, 'Mataquescuintla');
INSERT INTO muni VALUES (1701, 17, 'Chiquimula');
INSERT INTO muni VALUES (1702, 17, 'San Jose La Arada');
INSERT INTO muni VALUES (1703, 17, 'San Juan Hermita');
INSERT INTO muni VALUES (1704, 17, 'Jocotan');
INSERT INTO muni VALUES (1705, 17, 'Camotan');
INSERT INTO muni VALUES (1706, 17, 'Olopa');
INSERT INTO muni VALUES (1707, 17, 'Esquipulas');
INSERT INTO muni VALUES (1708, 17, 'Concepcion Las Minas');
INSERT INTO muni VALUES (1709, 17, 'Quezaltepeque');
INSERT INTO muni VALUES (1710, 17, 'San Jacinto');
INSERT INTO muni VALUES (1711, 17, 'Ipala');
INSERT INTO muni VALUES (1801, 18, 'Retalhuelu');
INSERT INTO muni VALUES (1802, 18, 'San Sebastian');
INSERT INTO muni VALUES (1803, 18, 'Santa Cruz Mulua');
INSERT INTO muni VALUES (1804, 18, 'San Martin Zapotitlan');
INSERT INTO muni VALUES (1805, 18, 'San Felipe Retalhuleu');
INSERT INTO muni VALUES (1806, 18, 'San Andres Villa Seca');
INSERT INTO muni VALUES (1807, 18, 'Champerico');
INSERT INTO muni VALUES (1808, 18, 'Nuevo San Carlos');
INSERT INTO muni VALUES (1809, 18, 'El Asintal');
INSERT INTO muni VALUES (1901, 19, 'Mazatenango');
INSERT INTO muni VALUES (1902, 19, 'Cuyotenango');
INSERT INTO muni VALUES (1903, 19, 'San Francisco Zapotitlan');
INSERT INTO muni VALUES (1904, 19, 'San Bernardino');
INSERT INTO muni VALUES (1905, 19, 'San Jose El idolo');
INSERT INTO muni VALUES (1906, 19, 'Santo Domingo Suchitepequez');
INSERT INTO muni VALUES (1907, 19, 'San Lorenzo');
INSERT INTO muni VALUES (1908, 19, 'Samayac');
INSERT INTO muni VALUES (1909, 19, 'San Pablo Jocopilas');
INSERT INTO muni VALUES (1910, 19, 'San Antonio Suchitepequez');
INSERT INTO muni VALUES (1911, 19, 'San Miguel Panan');
INSERT INTO muni VALUES (1912, 19, 'San Gabriel');
INSERT INTO muni VALUES (1913, 19, 'Chicacao');
INSERT INTO muni VALUES (1914, 19, 'Patulul');
INSERT INTO muni VALUES (1915, 19, 'Santa Barbara');
INSERT INTO muni VALUES (1916, 19, 'San Juan Bautista');
INSERT INTO muni VALUES (1917, 19, 'Santo Tomas La Union');
INSERT INTO muni VALUES (1918, 19, 'Zunilito');
INSERT INTO muni VALUES (1919, 19, 'Pueblo Nuevo Suchitepequez');
INSERT INTO muni VALUES (1920, 19, 'Rio Bravo');
INSERT INTO muni VALUES (2001, 20, 'Escuintla');
INSERT INTO muni VALUES (2002, 20, 'Santa Lucia Cotzumalguapa');
INSERT INTO muni VALUES (2003, 20, 'La Democracia');
INSERT INTO muni VALUES (2004, 20, 'Siquinala');
INSERT INTO muni VALUES (2005, 20, 'Masagua');
INSERT INTO muni VALUES (2006, 20, 'Pueblo Nuevo Tiquisate');
INSERT INTO muni VALUES (2007, 20, 'La Gomera');
INSERT INTO muni VALUES (2008, 20, 'Guanagazapa');
INSERT INTO muni VALUES (2009, 20, 'Puerto de San Jose');
INSERT INTO muni VALUES (2010, 20, 'Iztapa');
INSERT INTO muni VALUES (2011, 20, 'Palin');
INSERT INTO muni VALUES (2012, 20, 'San Vicente Pacaya');
INSERT INTO muni VALUES (2013, 20, 'Nueva Concepcion');
INSERT INTO muni VALUES (2101, 21, 'Cuilapa');
INSERT INTO muni VALUES (2102, 21, 'Berberena');
INSERT INTO muni VALUES (2103, 21, 'San Rosa de Lima');
INSERT INTO muni VALUES (2104, 21, 'Casillas');
INSERT INTO muni VALUES (2105, 21, 'San Rafael Las Flores');
INSERT INTO muni VALUES (2106, 21, 'Oratorio');
INSERT INTO muni VALUES (2107, 21, 'San Juan TEcuaco');
INSERT INTO muni VALUES (2108, 21, 'Chiquimulilla');
INSERT INTO muni VALUES (2109, 21, 'Taxisco');
INSERT INTO muni VALUES (2110, 21, 'Santa Maria Ixhuatan');
INSERT INTO muni VALUES (2111, 21, 'Guazacapan');
INSERT INTO muni VALUES (2112, 21, 'Santa Cruz Naranjo');
INSERT INTO muni VALUES (2113, 21, 'Pueblo Nuevo Viñas');
INSERT INTO muni VALUES (2114, 21, 'Nueva Santa Rosa');
INSERT INTO muni VALUES (2201, 22, 'Jutiapa');
INSERT INTO muni VALUES (2202, 22, 'El Progreso');
INSERT INTO muni VALUES (2203, 22, 'Santa Catarina Mita');
INSERT INTO muni VALUES (2204, 22, 'Agua Blanca');
INSERT INTO muni VALUES (2205, 22, 'Asuncion Mita');
INSERT INTO muni VALUES (2206, 22, 'Yupiltepeque');
INSERT INTO muni VALUES (2207, 22, 'Atescatempa');
INSERT INTO muni VALUES (2208, 22, 'Jerez');
INSERT INTO muni VALUES (2209, 22, 'El Adelanto');
INSERT INTO muni VALUES (2210, 22, 'Zapotitlan');
INSERT INTO muni VALUES (2211, 22, 'Comapa');
INSERT INTO muni VALUES (2212, 22, 'Jalpatagua');
INSERT INTO muni VALUES (2213, 22, 'Conguaco');
INSERT INTO muni VALUES (2214, 22, 'Moyuta');
INSERT INTO muni VALUES (2215, 22, 'Pasaco');
INSERT INTO muni VALUES (2216, 22, 'San Jose Acatempa');
INSERT INTO muni VALUES (2217, 22, 'Quezada');

-- Disponibilidad
INSERT INTO dispo VALUES (1,'Disponible');
INSERT INTO dispo VALUES (2,'Agotado');

-- Estados
INSERT INTO estado VALUES (1,'usuario');
INSERT INTO estado VALUES (2,'administrador');
INSERT INTO estado VALUES (3,'enviado');
INSERT INTO estado VALUES (4,'entregado');

COMMIT;


-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                            14
-- CREATE INDEX                             0
-- ALTER TABLE                             32
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE MATERIALIZED VIEW LOG             0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
