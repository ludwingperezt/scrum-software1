<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="/resources/demos/external/jquery.bgiframe-2.1.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#Mensajes" ).dialog({ position: "right" , show: "slide"});
		$( "#Historial" ).dialog({ position: "center" , show: "slide"});
		$( "#Temporal" ).dialog({ position: "left" , show: { effect: 'drop', direction: "up" }});
    });
    </script>
<div id="Mensajes" title="Ultimos Mensajes...">
	<p><?php
	$mensajes=HistorialChatTable::getUltimosMensajes();
	foreach ($mensajes as $msg){
	?>
    <?php echo '<b><span style="color:blue">'.$msg->getCreatedAt().' hrs '.$msg->getPersona().' dice: </b><span style="color:green">'.$msg.
	'<b><span style="color:red"> ('.$msg->getProyecto().')'.'</b><br>'?>
	<?php }
	echo '<br>'.link_to('Nuevo mensaje...','historialchat/new').' ';
	echo link_to('Ver mas...','@default?module=historialchat');?>
	</p>
</div>
 
 <div id="Historial" title="Novedades y cambios...">
	<p><?php
	$cambios=CambioTable::getUltimosCambios();
	foreach ($cambios as $cambio){
	?>
    <?php echo '<b><span style="color:blue">'.$cambio->getCreatedAt().' hrs '.$cambio->getPersona().' hizo: </b><span style="color:green">'.$cambio.
	'<b><span style="color:red"> ('.$cambio->getProyecto().')'.'</b><br>'?>
	<?php }
	echo '<br>'.link_to('Ver mas...','@default?module=cambio');?>
	</p>
</div>

 <div id="Temporal" title="MENU TEMPORAL">
    <a href="<?php echo url_for('@default?module=persona')?>">Personas</a><br>
	<a href="<?php echo url_for('@default?module=proyecto')?>">Proyectos</a><br>
	<a href="<?php echo url_for('@default?module=reunion')?>">Reuniones</a><br>
	<a href="<?php echo url_for('@default?module=equipo')?>">Equipos</a><br>
	<a href="<?php echo url_for('@default?module=historialchat')?>">Chat</a><br>
	<a href="<?php echo url_for('@default?module=link')?>">Links</a><br>
	<a href="<?php echo url_for('@default?module=productbacklog')?>">Product Backlog</a><br>
	<a href="<?php echo url_for('@default?module=sprint')?>">Sprints</a><br>
	<a href="<?php echo url_for('@default?module=sprintproductbacklog')?>">Sprint Backlog</a><br>
	<a href="<?php echo url_for('@default?module=tarea')?>">Tareas</a><br>
	<a href="<?php echo url_for('@default?module=cambio')?>">Cambios</a><br>
</div>

<h1>Bienvenido <?php echo PersonaTable::getPersona($sf_user->getAttribute('personaLogueada'))->getNombre();?></h1>
<br>