<?php

/**
 * historialchat actions.
 *
 * @package    scrum
 * @subpackage historialchat
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class historialchatActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->historialchats = Doctrine_Core::getTable('historialchat')
      ->createQuery('a')
      ->execute();*/
	if ($this->getUser()->getAttribute('proyecto')!=null)
	{
		$this->historialchats = Doctrine_Core::getTable('historialchat')->getMensajes($this->getUser()->getAttribute('proyecto'));
	}
	else
		$this->historialchats = Doctrine_Core::getTable('historialchat')->getMensajes(0);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->historialchat);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new HistorialChat();
	$temp->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    $this->form = new historialchatForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new historialchatForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id')));
    $this->form = new historialchatForm($historialchat);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id')));
    $this->form = new historialchatForm($historialchat);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id')));

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha eliminado el mensaje: '.$historialchat->getMensaje());
	$cambio->save();

    $historialchat->delete();

    $this->redirect('historialchat/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $historialchat = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha modificado el mensaje: '.$historialchat->getMensaje());
	$cambio->save();

      $this->redirect('historialchat/edit?id='.$historialchat->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $historialchat = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().'ha enviado el mensaje: '.$historialchat->getMensaje());
	$cambio->save();

      $this->redirect('historialchat/index');
    }
  }
}
