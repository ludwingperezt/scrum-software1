<?php

/**
 * sprintproductbacklog actions.
 *
 * @package    scrum
 * @subpackage sprintproductbacklog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sprintproductbacklogActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->sprintproductbacklogs = Doctrine_Core::getTable('sprintproductbacklog')
      ->createQuery('a')
      ->execute();*/
	$this->sprintproductbacklogs = Doctrine_Core::getTable('sprintproductbacklog')->getSprintProductBacklog($this->getUser()->getAttribute('proyecto'));
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id')));
    $this->sprintproductbacklogs = Doctrine_Core::getTable('sprintproductbacklog')->getProductBacklogs($this->sprintproductbacklog->getSprint()->getId());
    $this->forward404Unless($this->sprintproductbacklog);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new SprintProductBacklog();
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    $this->form = new sprintproductbacklogForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sprintproductbacklogForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id')));
    $this->form = new sprintproductbacklogForm($sprintproductbacklog);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id')));
    $this->form = new sprintproductbacklogForm($sprintproductbacklog);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id')));

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha removido el product backlog '.$sprintproductbacklog->getProductbacklog()->getNombre().' del sprint '.$sprintproductbacklog->getSprint()->getNombre());
	$cambio->save();

    $sprintproductbacklog->delete();

    $this->redirect('sprintproductbacklog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sprintproductbacklog = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha comentado el sprint backlog '.$sprintproductbacklog->getSprint()->getNombre());
	$cambio->save();

      $this->redirect('sprintproductbacklog/edit?id='.$sprintproductbacklog->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sprintproductbacklog = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha asignado el product backlog '.$sprintproductbacklog->getProductbacklog()->getNombre().' al sprint '.$sprintproductbacklog->getSprint()->getNombre());
	$cambio->save();

      $this->redirect('sprintproductbacklog/index');
    }
  }
	public function executeListar(sfWebRequest $request)
	{
		$this->idsprint = $request->getParameter('idsprint');
		$this->productbacklogs = Doctrine_Core::getTable('productbacklog')->getProductBacklogsSinAsignar($this->getUser()->getAttribute('proyecto'));
	}

	public function executeAsignar(sfWebRequest $request)
	{

		$productbacklog = Doctrine_Core::getTable('productbacklog')->find($request->getParameter('idproductbacklog'));
		$this->forward404Unless($sprintproductbacklog);

		$sprint = Doctrine_Core::getTable('sprint')->find($request->getParameter('idsprint'));
    		$this->forward404Unless($sprint);

		$sprintBacklog = new SprintProductBacklog();
		$sprintBacklog->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
		$sprintBacklog->setSprintId($request->getParameter('idsprint'));
		$sprintBacklog->setProductbacklogId($request->getParameter('idproductbacklog'));
		$sprintBacklog->setAnotaciones('Se ha asignado el product backlog '.$productbacklog->getNombre().' al sprint '.$sprint->getNombre());
		$sprintBacklog->save();

		$cambio = new Cambio();
		$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
		$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
		$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha asignado el product backlog '.$productbacklog->getNombre().' al sprint '.$sprint->getNombre());
		$cambio->save();

		$this->redirect('sprintproductbacklog/index');
	}
}
