### InterventionsApi

- [Sobre el Proyecto](#sobre-el-proyecto)
  
- [Tecnologías](#tecnologías)

- [Herramientas](#herramientas)

- [Versiones](#versiones)

- [Modelo de datos](#modelo-de-datos)

- [Acesso al proyecto](#instrucciones-de-instalación)

- [Desarrolladoras](#desarrolladoras)


### InterventionsApi
Como objetivo principal de la Hackaton Jump2digital se nos ha planteado abordar uno de los retos propuestos, basados ​​en la Agenda 2030, haciendo uso de la plataforma de bases de datos Open Data BCN.
De los retos presentados, hemos elegido La Sequía en la ciudad de Barcelona.
La sequía es uno de los mayores problemas que afronta Cataluña en los últimos años. Además de provocar problemas ambientales, en una ciudad como Barcelona la sequía puede afectar a la agricultura, el turismo, la salud y el bienestar de la ciudadanía, así como la economía en general. 
Es importante que las ciudades tengan planes de gestión de sequías que incluyan medidas para la conservación del agua, la reducción del consumo de agua potable, la recogida de agua de lluvia, la reutilización de agua y otras acciones para la gestión sostenible del agua.
Nuestra ciudad cuenta con depósitos fluviales que ofrecen una gestión sostenible del agua de lluvia, reduciendo el riesgo de inundaciones, ahorrando energía y disminuyendo la demanda de agua potable.
Teniendo en cuenta esta información, hemos tenido que pensar en un recurso que utilice datos y tecnologías para abordar los desafíos de la sequía y mejorar la gestión del agua en las ciudades.

### Sobre el proyecto
La idea surgió como posible solución a el problema planteado. Se trata de una aplicación web que muestra, a partir de datos obtenidos de Open Data BCN, los barrios de la ciudad donde la vegetación crece de forma más saludable, y por el contrario, los barrios donde no.
La aplicación ofrece entonces la posibilidad de visualizar los sectores de la ciudad donde reforestar sería una mejor evolución debido a su alta probabilidad de éxito. 
A partir de esto, la aplicación sería utilizada por el ayuntamiento de la ciudad, para poder definir lugares donde realizar acciones de reforestación, crearlas, modificarlas y poder mostrarlas dentro de un mapa. 
Al mismo tiempo, sería visualizada por todos los ciudadanos de Barcelona, para enterarse de donde están sucediendo dichas acciones de reforestación. 


### Tecnologías y herramientas utilizadas

-PHP
-Laravel
-Laravel/Passport
-PHP Unit
-MySQL

### Versiones

-   php: 8.1
-   laravel/framework: 10.10
-   laravel/passport: 11.10
-   phpunit/phpunit: 10.1


## Requisitos

- Debes tener instalado Apache mediante XAMPP o MAMP, Composer y MySQL para poder correr la aplicación
  

## Instrucciones de instalación

- Clona el repositorio en GitHub  

**Instalación del Servidor**

- Abre el proyecto en tu editor de código y en la terminal ingresa al directorio del proyecto `./server`.
- Instala las dependencias mediante el comando `composer i`.
- Crea un archivo .env a partir del archivo .env.example.
- Crea tu base de datos en mysql y configura el apartado de la base de datos en el archivo .env.
- Ejecuta las migraciones para crear las tablas de la base de datos `php artisan migrate`.
- Ejecuta los seeders para rellenar las tablas de la base de datos `php artisan db:seed`.
- Inicia el servidor: `php artisan serve`.

**Testeo de la aplicación**

- Abre postman u otra herramienta que utilices para testear APIs.
- Crea un request con la ruta que desees testear y rellena los campos necesarios. 
- Puedes revisar la documentación perfectamente detallada en [este link](https://documenter.getpostman.com/view/27825598/2s9YXpTxkx).

## Desarrolladores

- Albert
- Isaac
- Joana
- Lea
