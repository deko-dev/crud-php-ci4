-- Nombre de la base de dato
-- crud-blog

-- Creanmos la Tabla para guardar los Blogs
REATE TABLE blogs ( 
    id INT NOT NULL AUTO_INCREMENT , 
    titulo VARCHAR(50) NOT NULL , 
    fecha DATE NOT NULL , 
    contenido VARCHAR(5000) NOT NULL , 
    PRIMARY KEY (id)
) ENGINE = InnoDB;

-- Insertamos el primer Blog para realizar pruebas
INSERT INTO blogs (id, titulo, fecha, contenido) VALUES (NULL, 'Blog Inicial', '2020-08-26', 'Este es el primer Blog que se publica en este CRUD de blog este se podra editar y tambien eliminar en el momento que el Administrador deseé');