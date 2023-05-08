# Historial de actualizaciones
### Actualización 1: Evidencia 2 29/03/2023
- Se creo proyecto en laravel
- Se creo modelos/migraciones/controladores para usuarios,ordenes, y materiales
- Se hizo relaciones de tablas
- Se implemento seeders para las tablas y un factory para materiales
- Se creo la vista para logeo de usuarios y se implemento sistema de logeo
- Se añadio botones para acceder a los apartados usuarios, ordenes, ordenes archivadas
- Se creo la vista para usuarios y se implemento tabla crud
- Se creo la vista para ordenes y se implemento tabla crud
- Se creo la vista para ordenes archivadas y se adapto con el crud para ordenes
- se creo apartado cliente y se configuro para la visualización de estado de orden y mostrar imagenes si la orden esta en estado 'enviado' o 'entregado'
- se actualizo el repositorio
- se modifico el archivo readme con cambios hechos

### Actualización 2: Evidencia 3 
#### 05/05/2023
##### commit ev3pt1
- Se habilito la funcion de cerrar sesion app.blade.php
##### commit ev3pt2
- Se implemento la subida de imagenes en los campos de fotos
- se modifico el seeder para agregar imagenes desde la carpeta uploads
##### commit ev3pt3
- Se instalo AdminLTE 3 y se agrego al view home
#### 06/05/2023
##### commit ev3pt4
- Se implemento plantilla de AdminLTE a todas las views para usuarios
##### commit ev3pt5
- Se implemento opcion para ir al inicio para usuarios
- Se personalizo el color de las alertas en las tablas de usuarios y ordenes segun la accion realizada
##### commit ev3pt6
- Se han implementado notificaciones en las tablas de usuarios y ordenes
##### commit ev3pt7
- Se cambio el color del navbar y el color del select del sidebar
- Se realizo modificaciones al diseño de las tablas de usuarios y ordenes
- Se agrego contenido al dashboard
- Se cambio el nombre y logo predeterminado por el de HalconSystem
#### 07/05/2023
##### commit ev3pt8
- Se le cambio el color a los cards del apartado de clientes
- Se cambio el color y elementos del navbar del apartado de clientes
- Las imagenes ahora son responsivas en el view de resultado
##### commit ev3pt9
- Se agrego modo cliente en sidebar de usuario
- Ahora el dashboard mostrara datos reales del numero de ordenes y usuarios en base de datos
- Se cambio el logo que aparece al recargar pagina
- Se cambio el texto del log in del apartado de usuarios
##### commit ev3pt10
- Se alerta al usuario cuando ingresa o actualiza una orden con un material que no existe