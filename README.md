# Basic examples PHP

## Comandos útiles para lanzar el server de Apache desde Linux
sudo /opt/lampp/lampp start

### Carpeta que será visible hacia el exterior
ls /opt/lampp/htdocs

### Generando un acceso directo hacia htdocs. Nombre de carpeta acceso directo: public_html
ln -s /opt/lampp/htdocs/ public_html

### Ahora podemos acceder a ella con:
cd public_html

### Tiramos desde esa dirección un: 
code .
Abrimos el VSCode

### Damos permisos de lectura, escritura y ejecución
sudo chmod o+w .

### Generamos un archivo ejemplo
touch ejem_001.php
