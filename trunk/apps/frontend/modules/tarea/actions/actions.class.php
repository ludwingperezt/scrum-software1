<?php

/**
 * tarea actions.
 *
 * @package    scrum
 * @subpackage tarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tareas = Doctrine_Core::getTable('tarea')
      ->createQuery('a')
      ->execute();
  }
  
  public function executeIndexFiltradoSprint(sfWebRequest $request)
  {
	$this->idPB = $request->getParameter('idPB');
	$q = Doctrine_Query::create()
		->from('Tarea t')
		->Where('t.productbacklog_id = ?', $request->getParameter('idPB'));
		//->andWhere('t.persona_id = ?', $request->getParameter('idP'));
    $this->tareas = $q->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->tarea);
  }

  public function executeNew(sfWebRequest $request)
  {
	$temp = new Tarea();
	$temp->setProductbacklogId($request->getParameter('idPB'));
	$temp->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    $this->form = new tareaForm($temp);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tareaForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tareaForm($tarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tareaForm($tarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha eliminado la tarea '.$tarea->getNombre());
	$cambio->save();

    $tarea->delete();

    $this->redirect('tarea/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tarea = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha modificado la tarea '.$tarea->getNombre());
	$cambio->save();

      $this->redirect('tarea/edit?id='.$tarea->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tarea = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($this->getUser()->getAttribute('proyecto'));
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion($this->getUser()->getGuardUser()->getUsername().' ha creado la tarea '.$tarea->getNombre());
	$cambio->save();

      $this->redirect('tarea/indexFiltradoSprint?idPB='.$tarea->getProductbacklogId());
    }
  }
}
