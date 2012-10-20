<?php

/**
 * sprint actions.
 *
 * @package    scrum
 * @subpackage sprint
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sprintActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sprints = Doctrine_Core::getTable('sprint')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sprint = Doctrine_Core::getTable('sprint')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sprint);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sprintForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sprintForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sprint = Doctrine_Core::getTable('sprint')->find(array($request->getParameter('id'))), sprintf('Object sprint does not exist (%s).', $request->getParameter('id')));
    $this->form = new sprintForm($sprint);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sprint = Doctrine_Core::getTable('sprint')->find(array($request->getParameter('id'))), sprintf('Object sprint does not exist (%s).', $request->getParameter('id')));
    $this->form = new sprintForm($sprint);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sprint = Doctrine_Core::getTable('sprint')->find(array($request->getParameter('id'))), sprintf('Object sprint does not exist (%s).', $request->getParameter('id')));
    $sprint->delete();

    $this->redirect('sprint/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sprint = $form->save();

      $this->redirect('sprint/edit?id='.$sprint->getId());
    }
  }
}
