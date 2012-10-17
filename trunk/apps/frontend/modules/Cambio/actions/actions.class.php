<?php

/**
 * Cambio actions.
 *
 * @package    scrum
 * @subpackage Cambio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CambioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->cambios = Doctrine_Core::getTable('Cambio')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cambio = Doctrine_Core::getTable('Cambio')->find(array($request->getParameter('id_cambios')));
    $this->forward404Unless($this->cambio);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CambioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CambioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cambio = Doctrine_Core::getTable('Cambio')->find(array($request->getParameter('id_cambios'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id_cambios')));
    $this->form = new CambioForm($cambio);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cambio = Doctrine_Core::getTable('Cambio')->find(array($request->getParameter('id_cambios'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id_cambios')));
    $this->form = new CambioForm($cambio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($cambio = Doctrine_Core::getTable('Cambio')->find(array($request->getParameter('id_cambios'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id_cambios')));
    $cambio->delete();

    $this->redirect('Cambio/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cambio = $form->save();

      $this->redirect('Cambio/edit?id_cambios='.$cambio->getIdCambios());
    }
  }
}
