<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
echo "<a href=\"/index.php/reunion\">Reuniones</a><br>";
echo "<a href=\"/index.php/proyecto\">Proyectos</a><br>";
echo "<a href=\"/index.php/persona\">Personas</a><br>";
echo "<a href=\"/index.php/equipo\">Equipos</a><br>";
echo "<a href=\"/index.php/estado\">Estados</a><br>";
echo "<a href=\"/index.php/historialchat\">Chat</a><br>";
echo "<a href=\"/index.php/link\">Links</a><br>";
echo "<a href=\"/index.php/productbacklog\">Product Backlog</a><br>";
echo "<a href=\"/index.php/rol\">Roles</a><br>";
echo "<a href=\"/index.php/sprint\">Sprints</a><br>";
echo "<a href=\"/index.php/sprintproductbacklog\">Sprint Backlog</a><br>";
echo "<a href=\"/index.php/tarea\">Tareas</a><br>";
echo "<a href=\"/index.php/cambio\">Cambios</a><br>";
