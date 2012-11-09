<?php

/**
 * link actions.
 *
 * @package    scrum
 * @subpackage link
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linkActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->links = Doctrine_Core::getTable('link')
      ->createQuery('a')
      ->execute();*/
	if ($this->getUser()->getAttribute('proyecto')!=null){
		$this->links = Doctrine_Core::getTable('link')->getLinksProyecto($this->getUser()->getAttribute('proyecto'));
	}
	else
		$this->links = Doctrine_Core::getTable('link')->getLinksProyecto(0);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->link = Doctrine_Core::getTable('link')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->link);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new Link();
	$temp->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$temp->setDireccion('http://www.');
	
    $this->form = new linkForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new linkForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($link = Doctrine_Core::getTable('link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new linkForm($link);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($link = Doctrine_Core::getTable('link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $this->form = new linkForm($link);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($link = Doctrine_Core::getTable('link')->find(array($request->getParameter('id'))), sprintf('Object link does not exist (%s).', $request->getParameter('id')));
    $link->delete();

    $this->redirect('link/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $link = $form->save();

      $this->redirect('link/edit?id='.$link->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $link = $form->save();

      $this->redirect('link/index');
    }
  }
}
