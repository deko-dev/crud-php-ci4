# CRUD con PHP y CodeIgniter 4 Framework

## Instrucciones de Uso

### NOTA:

> Para poner en funcionamiento este Proyecto se debe tener instalado un servidor Local ( XAMP, LAMP, WAMP ), además se debe tener instalado composer


### Descargar Proyecto

> Para tener el proyecto de forma local en nuestro Ordenador debemos descargarlo en formato .zip o con el comando git clone

```
  > git clone https://github.com/deko-dev/crud-php-ci4.git
```

> Luego nos dirigimos a la carpeta creada

```
  > cd crud-php-ci4/
```
> Ejecutamos el servidor para ver nuestra pagina en funcionamiento ( Por defecto se levanta en la url http://localhost:8080 )

```
  > php spark serve
```


### Crear Base de datos

> Luego de ver nuestra pagina en funcionamiento y  ver la pagina de Bienvenida de CodeIgniter 4 Framework, debemos crear la base de datos en MySql, cuyo nombre debe ser **crud-blog** 

> **NOTA:** si se desea cambiar el nombre de la base de datos se debe configurar en el archivo **.env** y buscar la seccion de **DATABASE** en la Linea 49 y modificar la linea **database.default.database = crud-blog** cambiando el nombre **crud-blog** por el que se desea


### Crear Tabla blogs

> Para crear la tabal de blogs nos dirigimos a PhpMyAdmin, seleccionamos nuestra base de datos y en las opciones que tenemos escogemos **SQL** y copiamos el código a continuación 

```
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `contenido` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

> Luego las siguientes lineas una por una

```
ALTER TABLE `blogs` ADD PRIMARY KEY (`id`);
```

```
ALTER TABLE `blogs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
```

>**NOTA:** Si se desea, se puede realizar todos estos pasos a Manualmente con la Interfaz grafica de PhpMyAdmin, sin obviar ningún detalle 


### Poner en funcionamiento

>Por ultimo ahora solo se debe asegurar de que todos los cambios realizados se hayan guardado satisfactoriamente, bajamos el servidor con **CTRL+C** y lo volvemos a subir con la linea **php spark serve**, cuando el servidor se haya levantado solo debemos ir a la siguien url **http://localhost:8080/blogs** y listo!!





```
                            ************************************************
                            ************************************************
                            *****************<Deko-Dev/>********************
                            ***********Deyser Andres Orozco Yepes***********
                            *******Todos los derechos Reservados - 2020*****   
                            ************************************************
                            ************************************************
```