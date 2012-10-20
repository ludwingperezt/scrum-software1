<?php

/**
 * proyecto actions.
 *
 * @package    scrum
 * @subpackage proyecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class proyectoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    /*$this->proyectos = Doctrine_Core::getTable('proyecto')
      ->createQuery('a')
      ->execute();*/
	  $q=Doctrine_Query::create()
		->from('proyecto p')
		->where('p.Activo=1');
	$this->proyectos=$q->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id_proyecto')));
    $this->forward404Unless($this->proyecto);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new proyectoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new proyectoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
    $this->form = new proyectoForm($proyecto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
    $this->form = new proyectoForm($proyecto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id_proyecto'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id_proyecto')));
    $proyecto->delete();

    $this->redirect('proyecto/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $proyecto = $form->save();

      $this->redirect('proyecto/edit?id_proyecto='.$proyecto->getIdProyecto());
    }
  }
}
