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
    $this->equipos = Doctrine_Core::getTable('equipo')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->equipo);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new equipoForm();
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
    $request->checkCSRFProtection();

    $this->forward404Unless($equipo = Doctrine_Core::getTable('equipo')->find(array($request->getParameter('id'))), sprintf('Object equipo does not exist (%s).', $request->getParameter('id')));
    $equipo->delete();

    $this->redirect('equipo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $equipo = $form->save();

      $this->redirect('equipo/edit?id='.$equipo->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $equipo = $form->save();

      $this->redirect('equipo/index');
    }
  }
}
