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
    $this->reunions = Doctrine_Core::getTable('reunion')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->reunion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new reunionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new reunionForm();

    $this->processForm($request, $this->form);

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
    $request->checkCSRFProtection();

    $this->forward404Unless($reunion = Doctrine_Core::getTable('reunion')->find(array($request->getParameter('id'))), sprintf('Object reunion does not exist (%s).', $request->getParameter('id')));
    $reunion->delete();

    $this->redirect('reunion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $reunion = $form->save();

      $this->redirect('reunion/edit?id='.$reunion->getId());
    }
  }
}
