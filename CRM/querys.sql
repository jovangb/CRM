SELECT * FROM admin

INSERT INTO `admin` (`nombre`, `correo`, `pass`) VALUES ('Juan Gonzalez', 'juan@juan.com', '1234')

SELECT * FROM `admin` WHERE pass = 'pass'

DELETE FROM admin WHERE id_admin = 1

UPDATE admin SET nombre = 'Juan', pass = '1234' WHERE correo = 'jorge@baidon.com'

-- Selecciona todos los contactos

SELECT * FROM `contactos`

INSERT INTO contactos (nombre, correo, telefono, celular, estado, ciudad, calle_uno, calle_dos, CP, tipo)
VALUES ('Jorge Baidón', 'jorge@baidon.com', 1123, 123, "Querétaro", "Querétaro", "calle_uno", "calle_dos", "CP", "proveedor") 

DELETE FROM contactos WHERE id_contacto = 2;

UPDATE contactos SET nombre = 'Juan', tipo = '1234' WHERE correo = 'jorge@baidon.com';

DELETE FROM contactos WHERE id_contacto = 1;

SELECT * FROM cita ORDER BY DATE(fecha_cita) ASC;

SELECT id_admin FROM admin WHERE correo = "jorge@baidon.com" INTO @idadmin;
SELECT id_contacto FROM contacto WHERE correo = "lalo@lalo.com" INTO @idcontacto;
INSERT INTO cita (id_admin, id_contacto, fecha_cita, quantyty, type, descripcion, status) VALUES (@idadmin,@idcontacto,DATE(12/12/2020), 10000, "venta", "Una venta chida", false);

