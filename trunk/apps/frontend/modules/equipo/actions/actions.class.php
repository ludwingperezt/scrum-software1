<?php

/**
 * equipo actions.
 *
 * @package    scrum
 * @subpackage equipo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class equipoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
/*
    $this->equipos = Doctrine_Core::getTable('equipo')
      ->createQuery('a')
      ->execute();*/
	if ($this->getUser()->getAttribute('proyecto')!=null){
	    $this->equipos = Doctrine_Core::getTable('equipo')->getEquipos($this->getUser()->getAttribute('proyecto'));
	}
	else
		$this->equipos = Doctrine_Core::getTable('equipo')->getEquipos(0);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->equipo);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new Equipo();
	$temp->setProyectoId($this->getUser()->getAttribute('proyecto'));
    $this->form = new equipoForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new equipoForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id'))), sprintf('Object equipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new equipoForm($equipo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id'))), sprintf('Object equipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new equipoForm($equipo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id'))), sprintf('Object equipo does not exist (%s).', $request->getParameter('id')));
    
	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Se elimino a'.$equipo->getPersona()->getNombre().' del proyecto');
	$cambio->save();

	$equipo->delete();

    $this->redirect('equipo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $equipo = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Se modifico el equipo de proyecto');
	$cambio->save();

      $this->redirect('equipo/edit?id='.$equipo->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $equipo = $form->save();
	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Se agrego a '.$equipo->getPersona()->getNombre().' al proyecto');
	$cambio->save();

      $this->redirect('equipo/index');
    }
  }
}
