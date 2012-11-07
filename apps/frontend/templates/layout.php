<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>SCRUM Manager</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php
	include_javascripts();
    include_stylesheets(); ?>	
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1><a href="<?php echo url_for('@default?module=Inicial') ?>">
            <img src="/images/logo.png" alt="SCRUM Manager..." />
          </a>
		  </h1>		  
          <div id="sub_header">
            <div class="post">
              <!--<h2>Login</h2>
              <div>
                <a href="http://www.scrum.260mb.org">Login</a>
              </div>-->
			 
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
            </div>
          </div>
        </div>
      </div>
 
      <div id="content">
        <div class="content">
          <?php echo $sf_content ?>
        </div>
		<?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
      </div>
 
      <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="/images/jobeet-mini.png" />
            powered by <a href="http://www.symfony-project.org/">
            <img src="/images/symfony.gif" alt="symfony framework" />
            </a>
          </span>
          <ul>
            <li><a href="http://scrummethodology.com/">Acerca de SCRUM...</a></li>
            <li class="feed"><a href="">Full feed</a></li>
            <li><a href="">Jobeet API</a></li>
            <li class="last"><a href="">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
