<?php

/**
 * productbacklog actions.
 *
 * @package    scrum
 * @subpackage productbacklog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productbacklogActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->productbacklogs = Doctrine_Core::getTable('productbacklog')
      ->createQuery('a')
      ->execute();*/
	$this->productbacklogs = Doctrine_Core::getTable('productbacklog')->getProductBacklog($this->getUser()->getAttribute('proyecto'));
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->productbacklog = Doctrine_Core::getTable('productbacklog')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->productbacklog);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new Productbacklog();
	$temp->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    $this->form = new productbacklogForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new productbacklogForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($productbacklog = Doctrine_Core::getTable('productbacklog')->find(array($request->getParameter('id'))), sprintf('Object productbacklog does not exist (%s).', $request->getParameter('id')));
    $this->form = new productbacklogForm($productbacklog);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($productbacklog = Doctrine_Core::getTable('productbacklog')->find(array($request->getParameter('id'))), sprintf('Object productbacklog does not exist (%s).', $request->getParameter('id')));
    $this->form = new productbacklogForm($productbacklog);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($productbacklog = Doctrine_Core::getTable('productbacklog')->find(array($request->getParameter('id'))), sprintf('Object productbacklog does not exist (%s).', $request->getParameter('id')));
    
	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha eliminado el backlog '.$productbacklog->getNombre());
	$cambio->save();
	$productbacklog->delete();

    $this->redirect('productbacklog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $productbacklog = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha modificado el backlog '.$productbacklog->getNombre());
	$cambio->save();

      $this->redirect('productbacklog/edit?id='.$productbacklog->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $productbacklog = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha creado el backlog '.$productbacklog->getNombre());
	$cambio->save();

      $this->redirect('productbacklog/index');
    }
  }
}
