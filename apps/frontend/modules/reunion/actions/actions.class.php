<?php

/**
 * reunion actions.
 *
 * @package    scrum
 * @subpackage reunion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reunionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->reunions = Doctrine_Core::getTable('reunion')->getReunionesProyecto($this->getUser()->getAttribute('proyecto'));
     // ->createQuery('a')
     // ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->reunion);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new Reunion();
	$temp->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    $this->form = new reunionForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new reunionForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id'))), sprintf('Object reunion does not exist (%s).', $request->getParameter('id')));
    $this->form = new reunionForm($reunion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id'))), sprintf('Object reunion does not exist (%s).', $request->getParameter('id')));
    $this->form = new reunionForm($reunion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id'))), sprintf('Object reunion does not exist (%s).', $request->getParameter('id')));

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha eliminado la reunion '.$reunion->getTitulo());
	$cambio->save();    

	$reunion->delete();

    $this->redirect('reunion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $reunion = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha modificado la reunion '.$reunion->getTitulo());
	$cambio->save();

      $this->redirect('reunion/edit?id='.$reunion->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $reunion = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha agregado la reunion '.$reunion->getTitulo());
	$cambio->save();

      $this->redirect('reunion/index');
    }
  }
}
