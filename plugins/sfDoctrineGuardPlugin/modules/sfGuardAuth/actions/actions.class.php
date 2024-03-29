<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once(dirname(__FILE__).'/../lib/BasesfGuardAuthActions.class.php');

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardAuthActions extends BasesfGuardAuthActions
{

  public function executeSignout($request)
  {
    $this->getUser()->getAttributeHolder()->clear();
    $this->getUser()->signOut();

    $signoutUrl = sfConfig::get('app_sf_guard_plugin_success_signout_url', $request->getReferer());

    $this->redirect('' != $signoutUrl ? $signoutUrl : '@homepage');
  }

public function executeSignin($request)
  {
    $user = $this->getUser();
    if ($user->isAuthenticated())
    {

      return $this->redirect('@homepage');
    }



    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin'); 
    $this->form = new $class();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('signin'));
      if ($this->form->isValid())
      {
        $values = $this->form->getValues(); 
        $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);

        // always redirect to a URL set in app.yml
        // or to the referer
        // or to the homepage
        $signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));

	//aqui se agrega el seteo de usuario por defecto
	if ($this->getUser()->isAuthenticated()){
		// Primero se obtiene el id sfUser para luego buscarlo en la tabla de usuarios y devolver una coleccion con posibles resultados
		$temp = PersonaTable::getUsuarioLogueado($this->getUser()->getGuardUser()->getId());
		//verificación: si el usuario loggeado no tiene asigando un perfil "Persona", se crea el nuevo perfil en base a los datos del usuario sfGuardUser
		if ($temp == false)	
		{
			$nPersona = new Persona();
    			$nPersona->setNombre($this->getUser()->getGuardUser()->getUsername());
    			$nPersona->setIdFacebook('');
    			$nPersona->setEmail($this->getUser()->getGuardUser()->getEmailAddress());
			$nPersona->setTelefono('');
			$nPersona->setIsActivated(true);
			$nPersona->setSfGuardUserId($this->getUser()->getGuardUser()->getId());
			$nPersona->save();
		}
		$this->getUser()->setAttribute('personaLogueada',PersonaTable::getUsuarioLogueado($this->getUser()->getGuardUser()->getId())->getId());	
		//echo $sf_user->getAttribute('personaLogueada');
		//$this->getUser()->setAttribute('usuario',1);
	}

        //return $this->redirect('' != $signinUrl ? $signinUrl : '@homepage');@default?module=Accion
          return $this->redirect('@default?module=Acceso&action=index');
      }
    }
    else
    {
      if ($request->isXmlHttpRequest())
      {
        $this->getResponse()->setHeaderOnly(true);
        $this->getResponse()->setStatusCode(401);

        return sfView::NONE;
      }

      // if we have been forwarded, then the referer is the current URL
      // if not, this is the referer of the current request
      $user->setReferer($this->getContext()->getActionStack()->getSize() > 1 ? $request->getUri() : $request->getReferer());

      $module = sfConfig::get('sf_login_module');
      if ($this->getModuleName() != $module)
      {
        return $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
      }

      $this->getResponse()->setStatusCode(401);
    }
  }

}
