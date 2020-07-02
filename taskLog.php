/*

  ! 1. Estructura del proyecto
  * Estructurar tu sitio web de forma correcta es crucial tanto para su usabilidad
  * como para su capacidad de búsqueda.

  assets: archivos estáticos (imágenes, videos, audio, etc.)
    assets/img: imágenes
  
  db: configuración de la base de datos
  
  resources: recursos necesarios para la interfaz del cliente

    resources/layout: vista por defecto (navbar, footer, etc.)
    
    resources/views: vistas

  public: estilos y scripts

    public/css: hoja de estilos
    public/icon: iconos
    public/js: scripts
    bootstrap-4.5.0: dependencia completa (css, js)


  ! 2. Cambio del nombre de la carpeta de iconos a 'mdi'

  ! 3. Cambiar rutas de los archivos de estilo, iconos, etc.

  ! 4. Conexion a db

  ! 5. Agregar usuario de prueba via phpMyAdmin
  
  ! 6. Programados los Metodos de inicio de sesion

  ! 7. Adaptar navbar para ambos usuarios en una sola vista
    * definida una sola estructura para el header.php (inicio del documento, banner, links, body)
    * codificado de forma dinamica el navbar para detectar la el tipo de sesion y mostrar las opciones correspondientes
    * renombrado de los archivos header a opciones
    * archivos sesion1.php y sesion2.php eliminados, se recodifican las rutas hacia index.php

  ! 8. duplicados eliminados:
    * oficinas
    * contacto 

  ! 9. nombres cambiados
    * reestablecercontrasena -> validar_usuario
    * reestablecercontrasena2 -> preguntas_seguridad
    * reestablecercontrasena3 -> nueva_contrasena

  ! 10. vista registrousuario
    * eliminados los placeholder vacios
    * asignacion de nombres (name) a cada input
    * creacion de tabla 'personas'para el registro de usuarios regulares
    * programacion de metodo INSERT para registrar usuarios en DB, pruebas Ok

  ! 11. Creacion de tabla personas con los campos del formulario

  ! 12. programadas las vistas para permitir acceso segun el rol de sesion
  
  ! 13. Encritado de contraseña para nuevos usuarios

  ! 14. Encritado la contraseña del usuario administrador

  ! 15. Programado: creacion de usuarios con el rol 'Administrador' desde la sesion de otro administrador

  ! 16. Vista de recuperacion de contraseña, programado metodo POST para validar contraseña ingresada o dar acceso a la siguiente vista

  ! 17. Programado para validar preguntas y respuestas de seguridad

  ! 18. Programado: registro de solicitudes (sesion usuario)
    *Pendiente: campos de fechas solicitud y fecha atencion

  ! 19. Programado: consulta de solicitudes (sesion usuario)

  ! 20. Creado repositorios local y remoto

  ! 21. Modificar usuarios
    * Eliminado: prefijo del codigo del telefono
    
  ! 22. 



*/