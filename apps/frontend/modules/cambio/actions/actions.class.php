<?php

/**
 * cambio actions.
 *
 * @package    scrum
 * @subpackage cambio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cambioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->cambios = Doctrine_Core::getTable('cambio')
      ->createQuery('a')
      ->execute();*/
	$this->cambios = Doctrine_Core::getTable('cambio')->getHistorialCambios($this->getUser()->getAttribute('proyecto'), $this->getUser()->getAttribute('personaLogueada'));
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cambio = Doctrine_Core::getTable('cambio')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->cambio);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new cambioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new cambioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cambio = Doctrine_Core::getTable('cambio')->find(array($request->getParameter('id'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id')));
    $this->form = new cambioForm($cambio);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cambio = Doctrine_Core::getTable('cambio')->find(array($request->getParameter('id'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id')));
    $this->form = new cambioForm($cambio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($cambio = Doctrine_Core::getTable('cambio')->find(array($request->getParameter('id'))), sprintf('Object cambio does not exist (%s).', $request->getParameter('id')));
    $cambio->delete();

    $this->redirect('cambio/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cambio = $form->save();

      $this->redirect('cambio/edit?id='.$cambio->getId());
    }
  }
}
