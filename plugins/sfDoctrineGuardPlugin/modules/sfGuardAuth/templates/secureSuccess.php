<?php use_helper('I18N') ?>

<h2><?php echo __('Oops! Se necesita autenticación para ingresar a la página solicitada.', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Sigue el acceso inferior para acceder', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>
