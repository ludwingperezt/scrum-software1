<?php
if ($sf_user->isAuthenticated()){
?>
	<ul class="ttw-notification-menu">
		<li id="Inicio" class="notification-menu-item first-item"><a href="<?php echo url_for('@default?module=Acceso')?>">Inicio</a></li>
		<li id="Proyectos" class="notification-menu-item"><a href="<?php echo url_for('@default?module=proyecto')?>">Proyectos</a></li>
		<?php 
			if ($sf_user->getAttribute('proyecto')!=NULL){
				echo "";
		?>
				<li id="Equipo" class="notification-menu-item"><a href="<?php echo url_for('@default?module=equipo')?>">Equipo</a></li>
				<li id="ProductBacklog" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=productbacklog')?>">Product Backlog</a> </li>
				<li id="Tareas" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=tarea')?>">Tareas</a> </li>
				<li id="Sprints" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=sprint')?>">Sprints</a> </li>
				<li id="SprintBacklog" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=sprintproductbacklog')?>">Sprint Backlog</a> </li>
				<li id="Reuniones" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=reunion')?>">Reuniones</a> </li>
				<li id="Mensajes" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=historialchat')?>">Mensajes</a> </li>
				<li id="Links" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=link')?>">Links</a> </li>
				<li id="Historial" class="notification-menu-item"> <a href="<?php echo url_for('@default?module=cambio')?>">Historial</a> </li>
		<?php } ?>
		<li id="Perfil" class="notification-menu-item"><a href="<?php echo url_for('@default?module=persona')?>" >Perfil</a></li>
		<li id="Salir" class="notification-menu-item last-item"><a href="<?php echo url_for('@sf_guard_signout?module=sfGuardAuth&action=signout')?>">Salir</a></li>
	</ul><?php
	//$this->redirect('@acceso');
}else{?>
 <ul class="ttw-notification-menu">
	<li id="Home" class="notification-menu-item first-item"><a href="IR A PAGINA DE REGISTRO">Registrar</a></li>
	<li id="Salir" class="notification-menu-item last-item"><a href="<?php echo url_for('@sf_guard_signin?module=sfGuardAuth&action=signin')?>">Iniciar Sesion</a></li>
</ul>
<?php }?>