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
    $this->historialchats = Doctrine_Core::getTable('historialchat')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id_historial_chat')));
    $this->forward404Unless($this->historialchat);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new historialchatForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new historialchatForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id_historial_chat'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id_historial_chat')));
    $this->form = new historialchatForm($historialchat);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id_historial_chat'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id_historial_chat')));
    $this->form = new historialchatForm($historialchat);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($historialchat = Doctrine_Core::getTable('historialchat')->find(array($request->getParameter('id_historial_chat'))), sprintf('Object historialchat does not exist (%s).', $request->getParameter('id_historial_chat')));
    $historialchat->delete();

    $this->redirect('historialchat/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $historialchat = $form->save();

      $this->redirect('historialchat/edit?id_historial_chat='.$historialchat->getIdHistorialChat());
    }
  }
}
