<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>SCRUM Manager</title>
    <link rel="shortcut icon"/>
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
				<span class="preload1"></span>
				<span class="preload2"></span>				
				<ul id="nav">
				<?php
				if ($sf_user->isAuthenticated()){
				?>
					<li class="top"><a href="<?php echo url_for('@default?module=Acceso')?>" class="top_link"><span>Inicio</span></a></li>
					<li class="top"><a id="Herramientas" class="top_link"><span class="down">Herramientas</span></a>
						<ul class="sub">
							<li><b>Proyectos</b></li>
							<li><a class="fly">Predeterminar</a>
									<ul>
									<?php
									$misProyectos=ProyectoTable::getProyectos($idPersona=$sf_user->getAttribute('personaLogueada'));
									foreach ($misProyectos as $miProyecto){
									?>
										<li><a href="<?php echo url_for('proyecto/predeterminar?id='.$miProyecto->getId()).'">';
										if ($sf_user->getAttribute('proyecto')==$miProyecto->getId())
											echo '<b>'.$miProyecto->getNombre().'</b>';
										else
											echo $miProyecto->getNombre();
										
										?></a></li>
										<?php } ?>
										<li><a href="<?php echo url_for('@default?module=proyecto')?>">Gestionar proyectos</a></li>
									</ul>
									<?php 
										if ($sf_user->getAttribute('proyecto')!=NULL){
									?>
									<li><a href="<?php echo url_for('@default?module=link')?>">Links</a></li>
									<li><a href="<?php echo url_for('@default?module=reunion')?>">Reuniones</a></li>
									<li><a href="<?php echo url_for('@default?module=equipo')?>">Equipo</a></li>
									<li><a href="<?php echo url_for('@default?module=sprint')?>">Sprints</a></li>
									<li><a href="<?php echo url_for('@default?module=productbacklog')?>">Product Backlog</a></li>
									<li><a href="<?php echo url_for('@default?module=sprintproductbacklog')?>">Tablero</a></li>
									<?php } ?>
							</li>
							<li><b>Configuraciones</b></li>
							<li><a href="<?php echo url_for('@default?module=persona')?>">Personas</a></li>
							<li><a href="<?php echo url_for('@default?module=cambio')?>">Historial</a></li>
							<li><a href="<?php echo url_for('@default?module=historialchat')?>">Mensajes</a></li>			
						</ul>
					</li>
					<li class="top"><a href="<?php echo url_for('@default?module=persona&action=show&id='.$idPersona)?>" class="top_link"><span>Perfil</span></a></li>
					<li class="top"><a href="<?php echo url_for('@sf_guard_signout?module=sfGuardAuth&action=signout')?>" class="top_link"><span>Cerrar Sesion</span></a></li>
					<li class="top"><a id="Ayuda" class="top_link"><span class="down">Ayuda</span></a>
						<ul class="sub">
							<li><a href="http://www.AyudaScrum.260mb.org/">Manual de Usuario</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="<?php echo url_for('Acceso/contacto')?>">Contacto</a></li>
							<li><a href="<?php echo url_for('Acceso/about')?>">Acerca de...</a></li>
						</ul>
					</li>
				</ul>
				<?php
					//$this->redirect('@acceso');
				}else{?>
					<li class="top"><a href="<?php echo url_for('@default?module=Inicial')?>" class="top_link"><span>Inicio</span></a></li>
					<li class="top"><a href="<?php echo url_for('@sf_guard_signin?module=sfGuardAuth&action=signin')?>" class="top_link"><span>Iniciar Sesion</span></a></li>
					<li class="top"><a href="#MODULOREGISTRO" class="top_link"><span>Registrar</span></a></li>
					<li class="top"><a id="Ayuda" class="top_link"><span class="down">Ayuda</span></a>
						<ul class="sub">
							<li><a href="http://www.AyudaScrum.260mb.org/">Manual de Usuario</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="<?php echo url_for('Acceso/contacto')?>">Contacto</a></li>
							<li><a href="<?php echo url_for('Acceso/about')?>">Acerca de...</a></li>
						</ul>
					</li>
					<?php }?>
				</ul>
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
 
      <!--<div id="footer">
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
      </div>-->
    </div>
  </body>
</html>
