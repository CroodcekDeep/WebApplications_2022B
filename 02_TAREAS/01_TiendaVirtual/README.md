# Tarea: Tienda de Productos
## Objetivos
1. Aplicar las instrucciones PHP.
2. Aplicar conceptos de Métodos HTTP, Cookies y Sesiones

## Descripción de la Tarea
Desarrollar una Tienda Virtual Web en la que el usuario pueda visualizar las categorías de productos disponibles. La Tienda Virtual debe tener las siguientes pantallas:

<table>
<head>
  <tr>
    <th>Prototipos</th>
    <th>Descripción</th>
  </tr>
</head>
<body>
  <tr>
    <td>Imagen 1</td>
    <td>
      <ol>
        <li>
          El usuario debe poder ingresar su nombre de usuario y clave (los caracteres ingresados en “clave” deben presentarse como asterisco (*)).
        </li>
        <li>
          Además, si el usuario selecciona el cuadro de verificación “Recordarme”, el nombre de usuario y la clave deben ser llenados automáticamente 
          la próxima vez que el usuario visite el sitio. Si el cuadro de “Recordarme” no fue seleccionado, la próxima vez que el usuario visite el sitio 
          los cuadros de texto estarán vacíos.
        </li>
      </ol>
    </td>
  </tr>
  <tr>
    <td>Imagen 2</td>
    <td>
      El panel principal se presenta una vez autenticado el usuario.
      <ol>
        <li>
          El nombre del usuario debe mostrarse en la bienvenida (ej: “Bienvenido Usuario: nombre_de_usuario). El nombre del usuario debe ser 
          obtenido de una sesión creada cuando el usuario es autenticado.
        </li>
        <li>
          El usuario debe poder cambiar el idioma de la lista de categorías de productos. La preferencia de idioma debe ser guardada en una 
          cookie con al menos 24 horas de vigencia. Si el usuario selecciona ES, el sistema debe presentar la lista de categorías de productos 
          del fichero categorias_es.txt. Si la selección es EN, el sistema debe presentar los productos del fichero categorias_en.txt.
        </li>
        <li>
          Al hacer clic en “Cerrar Sesión”, la aplicación debe destruir la sesión creada y navegar a la pantalla login.
        </li>
      </ol>
    </td>
  </tr>
</body>
</table>
