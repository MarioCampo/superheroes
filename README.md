# Superheroes

Creación de plugin wordpress para visualizar en forma de tarjetas información de superhores mediante el shortcode [superheroe nombre="nombreSuperheroe"].

REST API utilizada -> SuperHero API: https://superheroapi.com/. 

Lista de heroes: https://superheroapi.com/ids.html

Versión Wordpress: 5.7.2
Última comprobación el 26 de mayo de 2021 a las 04:16 PM GTM-5.


## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._


### Pre-requisitos 📋

* XAMPP o cualquier entorno de Apache de tu preferencia.
* Wordpress.

### Instalación 🔧

Para subir el plugin wordpress contenido en el archivo .zip, seguiremos los siguientes pasos:

* Iniciar sesión en nuestro entorno administrativo de wordpress /wp-admin/
* Una vez dentro del panel administrativo, dirigirnos al menú de plugins y hacer clic en añadir nuevo
* Luego, hacer clic en subir plugin, esto con el fin de que se nos despliegue una nueva interfaz
* Finalmente, arrastrar hasta la interfaz nuestro archivo .zip o hacer clic en "Seleccionar archivo" para encontrarlo y subirlo.

![Imagen de instalacion de plugin wordpress en archivo .zip](https://wpnovatos.com/wp-content/uploads/2018/01/instalar-plugin-wordpress.png)


## Ejecutando las pruebas ⚙️

Para hacer uso del plugin, se utilizará la modadlidad de shortcode con el fin de obtener la información del superheroe proporcionado por la REST API.

El shortcode en cuestión es el siguiente

```
[superheroe nombre="nombreSuperheroe"]
```

Para una prueba rapida, podemos utilizar

```
[superheroe nombre="venom"]
```

Este shortcode puede ser incluido en los editores de páginas y editores de post(_inclusive aquellos que utilizan el editor Gutenberg_).


## Construido con 🛠️

* [WordPress](https://es-co.wordpress.org/download/#download-install)
* [add_shortcode](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [wp_remote_get](https://developer.wordpress.org/reference/functions/wp_remote_get/)
* [SuperHero API](https://superheroapi.com/)


## Autores ✒️

* **Mario Alberto Campo Londoño** - [MarioCampo](https://github.com/MarioCampo)


---
⌨️ con ❤️ por [MarioCampo](https://github.com/MarioCampo) 😊
