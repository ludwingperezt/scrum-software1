<?php
use_javascript('login.js');
include_javascripts();
include_stylesheets();
?>
<html>
<body>
<h1>Scrum...</h1>
<p>
Mas que una metodologia, es un framework en el que se aplican buenas prácticas basado en un proceso de desarrollo incremental/iterativo para desarrollo ágil.
Puede ser aplicado en mantenimientos, implementaciones y otros procesos, no solamente en un proceso de desarrollo.
</p><br>
<h2>Un poco de historia...</h2>
<p>
En 1986 Hirotaka Takeuchi e Ikujiro Nonaka describieron una nueva aproximación holística que incrementa la rapidez y la flexibilidad en el desarrollo de nuevos productos comerciales.
</p><br>
<h2>Un poco más...</h2>
Algunas herramientas para la gestión de todo el proceso se listan:
<ul>
<li class="Lista">KUNAGI. Herramienta Web que proporciona un sistema de gestión de proyectos basado en Scrum. Ofrece herramientas colaborativas y otras facilidades, como un cuadro de mando del proyecto, un panel interactivo para el Sprint o soporte a la estimación con Planning Poker.</li>
<li class="Lista">SCRUMDO. Herramienta Scrum muy centrada en la simplicidad y en la facilidad de uso. Permite gestionar las listas de tareas e historias de usuario, crear y gestionar iteraciones, obtener gráficos de avance “burndown” y también dar soporte a la estimación con Planning Poker.</li>
<li class="Lista">SPRINTOMETER. Herramienta para la gestión, medición y seguimiento de proyectos Scrum y eXtreme Programming. Para simplificar el intercambio de datos permite exportar gráficos e informes a Excel. Posee gráficos de avance burndown en 3D.</li>
<li class="Lista">ICESCRUM. Herramienta Scrum y Kanban. Ofrece las opciones de operación, consulta y estimación de historias de usuario. Permite añadir historias de usuario a la pila de producto, dividir el tiempo en Sprints y mover estas historias de la pila de producto a cada uno de los Sprint. Posee la técnica de Planning Poker para la estimación y paneles virtuales.</li>
<li class="Lista">PANGO SCRUM. Otra de las herramientas Scrum online, con una interfaz sencilla y amigable que permite escribir, estimar y priorizar la pila de producto. Facilita en gran medida la planificación de Sprints y las reuniones.</li>
</ul>
<h1> ESTO NO SE MOSTRARA, DEBE ESTAR EN ACCESO</h1>
	<a href="<?php echo url_for('@default?module=rol')?>">Roles</a><br>
	<a href="<?php echo url_for('@default?module=persona')?>">Personas</a><br>
	<a href="<?php echo url_for('@default?module=proyecto')?>">Proyectos</a><br>
	<a href="<?php echo url_for('@default?module=reunion')?>">Reuniones</a><br>
	<a href="<?php echo url_for('@default?module=equipo')?>">Equipos</a><br>
	<a href="<?php echo url_for('@default?module=estado')?>">Estados</a><br>
	<a href="<?php echo url_for('@default?module=historialchat')?>">Chat</a><br>
	<a href="<?php echo url_for('@default?module=link')?>">Links</a><br>
	<a href="<?php echo url_for('@default?module=productbacklog')?>">Product Backlog</a><br>
	<a href="<?php echo url_for('@default?module=sprint')?>">Sprints</a><br>
	<a href="<?php echo url_for('@default?module=sprintproductbacklog')?>">Sprint Backlog</a><br>
	<a href="<?php echo url_for('@default?module=tarea')?>">Tareas</a><br>
	<a href="<?php echo url_for('@default?module=cambio')?>">Cambios</a><br>

</body>
</html>