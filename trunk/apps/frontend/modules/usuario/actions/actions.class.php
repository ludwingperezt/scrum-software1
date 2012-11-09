<?php

/**
 * usuario actions.
 *
 * @package    scrum
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
//    $this->redirect('@default?module=usuario');
  }

	public function executeNew(sfWebRequest $request)
	{
		$temp = new sfGuardUser();
		$temp->setIsActive(true);
		$temp->setIsSuperAdmin(false);
	
	    $this->form = new sfGuardRegisterForm($temp);
	}

  public function executeShow(sfWebRequest $request)
  {
    $this->usuario = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->usuario);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardRegisterForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuario = $form->save();

      $this->redirect('@sf_guard_signin?module=sfGuardAuth&action=signin');
    }
  }

public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardRegisterForm($user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($link = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardRegisterForm($link);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }
protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuario = $form->save();
      $this->redirect('@default?module=Acceso');
    }
  }
 public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($usuario = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));

	$usuario->setIsActive(false);
	$usuario->save();

    $this->redirect('@sf_guard_signout?module=sfGuardAuth&action=signout');
  }
}
