<img src="./public/img/logos/computadora.svg" alt= “INTERSISTEMAS”  height="60px">

# INTERSISTEMAS 
Este es un proyecto de una tienda web sencilla que permite a los usuarios explorar y comprar productos en línea.

## Características
Explora una amplia selección de productos.
Filtra los productos por categoría o características específicas.
Agrega productos al carrito de compras.
Realiza el proceso de compra y pago de forma segura.
Gestiona tu perfil de usuario.

## Capturas de pantalla
Captura de pantalla 1

Captura de pantalla 2

## Tecnologías utilizadas
HTML5 y CSS3 para la estructura y diseño de las páginas.
JavaScript para la interacción y funcionalidad dinámica.
PHP para el procesamiento de datos y la comunicación con la base de datos.
MySQL como base de datos relacional para almacenar información de productos, usuarios y pedidos.

## Instalación

- Bajar el proyecto
  - ```git clone https://github.com/Ocelotl-Z/InterSistemas.git```  
- Configuracion de VIRTUAL HOST
  - Ir a la ruta: ***C:\Windows\System32\drivers\etc***
  - Con un editor de texto con privilegios de administador editar el documento ***hosts***, poniendo el sigueinte texto en la parte de hasta abajo del archivo: ```127.0.0.1 intersistemas.test```
  - Ahora dirigete a la ubicacion de xampp y dentro de ella a la sigueinte direccion: ***apache\conf\extra***
  - Aqui poner lo sigueinte en el archivo ***httpd-vhosts.conf***:
  ```txt
    NameVirtualHost *
    <VirtualHost *>
      DocumentRoot "ruta a xammp"
      ServerName localhost
    </VirtualHost>
    <VirtualHost *>
      DocumentRoot "ruta al proyecto"
      ServerName intersistemas.test
      <Directory "ruta al proyecto">
       Options All
       AllowOverride All
       Require all granted
      </Directory>
    </VirtualHost>
    ```

## Autores
- 1
- 2
- 3
- 4

## Licencia
Este proyecto se distribuye bajo la licencia MIT. Puedes consultar el archivo LICENSE para más detalles.

## Contacto
Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto conmigo a través de correo electrónico o Twitter.