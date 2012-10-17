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
    $this->sprintproductbacklogs = Doctrine_Core::getTable('sprintproductbacklog')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id_sprint'),
                         $request->getParameter('id_product_backlog')));
    $this->forward404Unless($this->sprintproductbacklog);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sprintproductbacklogForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sprintproductbacklogForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog')));
    $this->form = new sprintproductbacklogForm($sprintproductbacklog);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog')));
    $this->form = new sprintproductbacklogForm($sprintproductbacklog);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sprintproductbacklog = Doctrine_Core::getTable('sprintproductbacklog')->find(array($request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog'))), sprintf('Object sprintproductbacklog does not exist (%s).', $request->getParameter('id_sprint'),
   $request->getParameter('id_product_backlog')));
    $sprintproductbacklog->delete();

    $this->redirect('sprintproductbacklog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sprintproductbacklog = $form->save();

      $this->redirect('sprintproductbacklog/edit?id_sprint='.$sprintproductbacklog->getIdSprint().'&id_product_backlog='.$sprintproductbacklog->getIdProductBacklog());
    }
  }
}
