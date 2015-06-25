CREATE DATABASE snackPool;
USE snackPool;

-- Se debe modificar todos los atributos que sean id
-- hacerlos autoincrementables y modificar la insercion de los datos

CREATE TABLE empleado(
	idEmpleado 	INT NOT NULL AUTO_INCREMENT,
	nombre 		VARCHAR(20) NOT NULL,
	apellido 	VARCHAR(20) NOT NULL,
	nomUsuario	VARCHAR(15) NOT NULL,
	password 	VARCHAR(25) NOT NULL,
	tipoUsuario 	VARCHAR(10) NOT NULL,
	correo  	VARCHAR(30),
	telefono	VARCHAR(15) NOT NULL,
	CONSTRAINT pkEmpleado PRIMARY KEY(idEmpleado)
);
 

CREATE TABLE comanda(
	idComanda 	INT AUTO_INCREMENT,
	fkCoEmpleado  	INT NOT NULL,
	fecha		DATE NOT NULL,
	hora 		TIME NOT NULL,
	estado 		VARCHAR(20) NOT NULL,
	CONSTRAINT pkComanda PRIMARY KEY(idComanda),
	CONSTRAINT fk_CoEmpleado FOREIGN KEY(fkCoEmpleado) REFERENCES empleado(idEmpleado)
);

CREATE TABLE cuenta(
	idCuenta 	INT NOT NULL AUTO_INCREMENT,
	fkCuComanda 	INT NOT NULL,
	fkCuEmpleado	INT NOT NULL,
	total		FLOAT NOT NULL,
	estadoDeCuenta  VARCHAR(10) NOT NULL,
	subtotal 	FLOAT NOT NULL,
	metodoPago 	VARCHAR(20) NOT NULL,
	CONSTRAINT pkCuenta PRIMARY kEY(idCuenta),
	CONSTRAINT fk_CuComanda FOREIGN KEY(fkCuComanda) REFERENCES comanda(idComanda),
	CONSTRAINT fk_CuEmpleado FOREIGN KEY(fkCuEmpleado) REFERENCES empleado(idEmpleado)
);



CREATE TABLE mesa(
	idMesa 		   INT NOT NULL,
	tipo		   VARCHAR(15) NOT NULL,
	precioHrMesaBillar FLOAT NOT NULL,
	CONSTRAINT pkMesa PRIMARY KEY(idMesa)

);

CREATE TABLE mesatienecomanda(
	fkMeComanda	   INT NOT NULL,
	fkMeMesa	   INT NOT NULL,
	CONSTRAINT fk_MeComanda FOREIGN KEY(fkMeComanda) REFERENCES comanda(idComanda),
	CONSTRAINT fk_Mesita FOREIGN KEY(fkMeMesa) REFERENCES mesa(idMesa)
);

CREATE TABLE paquete(
	idPaquete	INT NOT NULL AUTO_INCREMENT,
	nombre		VARCHAR(20) NOT NULL,
	precio 		FLOAT NOT NULL,
	descripcion VARCHAR(50) NOT NULL,
	CONSTRAINT pkPaquete PRIMARY KEY(idPaquete)
);

CREATE TABLE comandaincluyepaquete(
	fkPaComanda INT NOT NULL,
	fkComandaPaq INT NOT NULL,
	cantidad 	INT NOT NULL,
    subtotal    FLOAT NOT NULL,
	CONSTRAINT fkpaqueteComanda PRIMARY KEY(fkPaComanda,fkComandaPaq),
	CONSTRAINT fkComandaPaq FOREIGN KEY(fkPaComanda) REFERENCES comanda(idComanda),
	CONSTRAINT fkPaComanda 	 FOREIGN KEY(fkComandaPaq)   REFERENCES paquete(idPaquete)

);


CREATE TABLE producto(
	idProducto	INT NOT NULL AUTO_INCREMENT,
	nombre		VARCHAR(40) NOT NULL,
	cantidad	INT NOT NULL,
	costo		FLOAT NOT NULL,
	precio		FLOAT NOT NULL,
	CONSTRAINT pkProducto PRIMARY KEY(idProducto)
);

CREATE TABLE consumo(
	idCoComanda 	INT NOT NULL,
	idCoProducto 	INT NOT NULL,
	cantidadConsumo INT NOT NULL,
	subtotal	FLOAT NOT NULL,
	CONSTRAINT pkCosumo PRIMARY KEY(idCoComanda,idCoProducto),
	CONSTRAINT fk_CoComanda  FOREIGN KEY(idCoComanda)  REFERENCES comanda(idComanda),
	CONSTRAINT fk_CoProducto FOREIGN KEY(idCoProducto) REFERENCES producto(idProducto)
);



CREATE TABLE bebida(
	fkProBebida	INT NOT NULL,
	tipo 		VARCHAR(40) NOT NULL,
	CONSTRAINT pkBebida PRIMARY KEY(fkProBebida),
	CONSTRAINT fk_Bebida FOREIGN KEY(fkProBebida) REFERENCES producto(idProducto)
);

CREATE TABLE comida(
	fkProComida	INT NOT NULL,
	calorias	INT NOT NULL,
	CONSTRAINT pkComida PRIMARY KEY(fkProComida),
	CONSTRAINT fk_Comida FOREIGN KEY(fkProComida) REFERENCES producto(idProducto)
);

CREATE TABLE ingredientes(
	idIngredientes	INT NOT NULL AUTO_INCREMENT,
	nombre		VARCHAR(40) NOT NULL,
	calorias	INT NOT NULL,
	cantidad 	INT NOT NULL,
	CONSTRAINT pkIngredientes PRIMARY KEY(idIngredientes)
);

CREATE TABLE comidatieneingredientes(
	fkIdComida	INT NOT NULL,
	fkIdIngredientes	INT NOT NULL,
	CONSTRAINT pkComidaIngredientes PRIMARY KEY(fkIdComida, fkIdIngredientes),
	CONSTRAINT fk_CoIngredientes FOREIGN KEY(fkIdComida) REFERENCES comida(fkProComida),
	CONSTRAINT fk_Ingre FOREIGN KEY(fkIdIngredientes) REFERENCES ingredientes(idIngredientes)
);

CREATE TABLE bebidatieneingredientes(
	fkIdBebida	INT NOT NULL,
	fkIdBebIngredientes	INT NOT NULL,
	CONSTRAINT pkbebidaIngre PRIMARY KEY(fkIdBebida, fkIdBebIngredientes),
	CONSTRAINT fk_BeIngredientes FOREIGN KEY(fkIdBebida) REFERENCES bebida(fkProBebida),
	CONSTRAINT fk_IngreBebidas FOREIGN KEY(fkIdBebIngredientes) REFERENCES ingredientes(idIngredientes)
);


INSERT INTO empleado(nombre,apellido,nomUsuario,password,tipoUsuario,correo,telefono) 
		     VALUES ('Karen', 'Ventura', 'karen', '12345', 'mesero', 'karen@hotmail.com', '3123048579');
INSERT INTO empleado(nombre,apellido,nomUsuario,password,tipoUsuario,correo,telefono)
		     VALUES ('Edgar', 'Garcia', 'edgar', '12345', 'cajero', 'edgar@hotmail.com', '3123048579');
INSERT INTO empleado(nombre,apellido,nomUsuario,password,tipoUsuario,correo,telefono)
	  	     VALUES ('Eduardo', 'Batas', 'yasskate', '12345', 'administrador', 'yasskate@hotmail.com', '3123048579');

/*La tabla comanda se llenará por medio de la aplicación*/
/*La tabla cuenta se llenará por medio de la aplicación*/


-- Se quito el idMesa y se especificaron los atributos en los que se van
-- a insertar valores, asi mismo se quito el id en la especificacion de los datos
-- Antes: VALUES(101,billar,25,1) 
-- como debe quedar: VALUES(Billar,25,1)
INSERT INTO mesa VALUES (1,'Billar',25);
INSERT INTO mesa VALUES (2,'Billar',25);
INSERT INTO mesa VALUES (3,'Billar',25);
INSERT INTO mesa VALUES (4,'Billar',25);
INSERT INTO mesa VALUES (5,'Billar',25);

INSERT INTO mesa VALUES (6,'Normal',0);
INSERT INTO mesa VALUES (7,'Normal',0);
INSERT INTO mesa VALUES (8,'Normal',0);
INSERT INTO mesa VALUES (9,'Normal',0);
INSERT INTO mesa VALUES (10,'Normal',0);

INSERT INTO mesa VALUES (11,'Periquera',0);
INSERT INTO mesa VALUES (12,'Periquera',0);
INSERT INTO mesa VALUES (13,'Periquera',0);
INSERT INTO mesa VALUES (14,'Periquera',0);
INSERT INTO mesa VALUES (15,'Periquera',0);
INSERT INTO mesa VALUES (16,'Periquera',0);
INSERT INTO mesa VALUES (17,'Periquera',0);
INSERT INTO mesa VALUES (18,'Periquera',0);


/*La tabla mesatienecomanda se llenará por medio de la aplicación*/


INSERT INTO paquete(nombre,precio,descripcion) VALUES ('Pool', 100,'contiene mielda de pollo');
INSERT INTO paquete(nombre,precio,descripcion) VALUES ('Snack', 101,'contiene mielda de pollo');
INSERT INTO paquete(nombre,precio,descripcion) VALUES ('Pizzero', 100,'contiene mielda de pollo');
INSERT INTO paquete(nombre,precio,descripcion) VALUES ('BBQ', 100,'contiene mielda de pollo');
INSERT INTO paquete(nombre,precio,descripcion) VALUES ('SnackPool', 100,'contiene mielda de pollo');


/*La tabla comandaincluyepaquete se llenará por medio de la aplicación*/


INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Alitas', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Nachos', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Costilla', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Pizza', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Sushi', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Duritos', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Aros de Cebolla', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Palomitas',30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Corona', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Tecate', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Indio', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Corona-Extra', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Victoria', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Pacifico-Clara', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Tecate-Light', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Sol', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Estrella', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza XX-Light', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Heineken', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Negra-Modelo', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Corona-Light', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Modelo-Light', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Cerveza Bohemia', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Michelada', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Naranjada', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Limonada', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('CocaCola', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Fanta', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Manzanita', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Sprite', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Agua Natural', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Te', 30, 30, 40);
INSERT INTO producto(nombre,cantidad,costo,precio) VALUES ('Calpico', 30, 30, 40);


/*La tabla consumo se llenará por medio de la aplicación*/
/*
INSERT INTO bebida VALUES (9,'Alcoholica');
INSERT INTO bebida VALUES (10,'Alcoholica');
INSERT INTO bebida VALUES (11,'Alcoholica');
INSERT INTO bebida VALUES (12,'Alcoholica');
INSERT INTO bebida VALUES (13,'Alcoholica');
INSERT INTO bebida VALUES (14,'Alcoholica');
INSERT INTO bebida VALUES (15,'Alcoholica');
INSERT INTO bebida VALUES (16,'Alcoholica');
INSERT INTO bebida VALUES (17,'Alcoholica');
INSERT INTO bebida VALUES (18,'Alcoholica');
INSERT INTO bebida VALUES (19,'Alcoholica');
INSERT INTO bebida VALUES (20,'Alcoholica');
INSERT INTO bebida VALUES (21,'Alcoholica');
INSERT INTO bebida VALUES (22,'Alcoholica');
INSERT INTO bebida VALUES (23,'Alcoholica');
INSERT INTO bebida VALUES (24,'Alcoholica');
INSERT INTO bebida VALUES (25,'No-Alcoholica');
INSERT INTO bebida VALUES (26,'No-Alcoholica');
INSERT INTO bebida VALUES (27,'No-Alcoholica');
INSERT INTO bebida VALUES (28,'No-Alcoholica');
INSERT INTO bebida VALUES (29,'No-Alcoholica');
INSERT INTO bebida VALUES (30,'No-Alcoholica');
INSERT INTO bebida VALUES (31,'No-Alcoholica');
INSERT INTO bebida VALUES (32,'No-Alcoholica');
INSERT INTO bebida VALUES (33,'No-Alcoholica');



INSERT INTO comida VALUES (1,320);
INSERT INTO comida VALUES (2,320);
INSERT INTO comida VALUES (3,320);
INSERT INTO comida VALUES (4,320);
INSERT INTO comida VALUES (5,320);
INSERT INTO comida VALUES (7,320);
INSERT INTO comida VALUES (8,320);
*/

INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('pollo',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('maiz',10,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('peperoni',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('queso',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('salsa de tomate',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('masa',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('agua mineral',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('naranja',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('limón',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('tequila',50,100);
INSERT INTO ingredientes(nombre,calorias,cantidad) VALUES ('agua natural',50,100);



/*
INSERT INTO comidatieneingredientes VALUES (4,3);
INSERT INTO comidatieneingredientes VALUES (4,4);
INSERT INTO comidatieneingredientes VALUES (4,5);
INSERT INTO comidatieneingredientes VALUES (4,6);
INSERT INTO bebidatieneingredientes VALUES (12,7);
INSERT INTO bebidatieneingredientes VALUES (12,8);
INSERT INTO bebidatieneingredientes VALUES (12,11);
INSERT INTO bebidatieneingredientes VALUES (13,9);
INSERT INTO bebidatieneingredientes VALUES (13,8);
INSERT INTO bebidatieneingredientes VALUES (13,11);
*/
