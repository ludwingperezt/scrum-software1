<?php

class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  public function configure()
  {
    unset(
	$this['algorithm'],
	$this['salt'],
	$this['is_active'],
	$this['is_super_admin'],
	$this['last_login'],
	$this['created_at'],
	$this['updated_at'],
	$this['groups_list'],
	$this['permissions_list']
	);

	$this->widgetSchema->setLabels(array(
	  'first_name'    => 'Nombre',
	  'last_name'      => 'Apellido',
	  'email_address'   => 'Email',
	  'username'   => 'Usuario',
	  'password'   => 'Contraseña',
	  'password_again'   => 'Repetir contraseña'
	));

  }
}
