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
      ->execute();
	  
	  $idPersona=$this->getUser()->getAttribute('personaLogueada');
	  $q=Doctrine_Query::create()
			->from('Proyecto p')
			->where ('p.id IN (SELECT e.Proyecto_Id FROM Equipo e WHERE e.Persona_Id='.$idPersona.') OR p.persona_id='.$idPersona);*/
		$this->proyectos=Doctrine_Core::getTable('proyecto')->getProyectosUsuario($this->getUser()->getAttribute('personaLogueada'));
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->proyecto);
  }

  public function executeNew(sfWebRequest $request)
  {
	$project = new Proyecto();
	$project->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
    	$this->form = new proyectoForm($project);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new proyectoForm();

    $this->processCreatedForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new proyectoForm($proyecto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new proyectoForm($proyecto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id')));
    
	$cambio = new Cambio();
	$cambio->setProyectoId($proyecto->getId());
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Proyecto '.$proyecto.' ha sido eliminado');
	$cambio->save();

	$proyecto->delete();

    $this->redirect('proyecto/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $proyecto = $form->save();

	$cambio = new Cambio();
	$cambio->setProyectoId($proyecto->getId());
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Proyecto '.$proyecto.' ha sido modificado');
	$cambio->save();

      $this->redirect('proyecto/edit?id='.$proyecto->getId());
    }
  }
  
  protected function processCreatedForm(sfWebRequest $request, sfForm $form)
  {
	//acciones tomadas luego de procesar el formulario de nuevo proyecto
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $proyecto = $form->save();
	$cambio = new Cambio();
	$cambio->setProyectoId($proyecto->getId());
	$cambio->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio->setDescripcion('Proyecto '.$proyecto.' creado');
	$cambio->save();
	
	$equipo = new Equipo();
	$equipo->setProyectoId($proyecto->getId());
	$equipo->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$equipo->setRolId(1); //scrum master por defecto
	$equipo->setNombre('Administrador de proyecto');
	$equipo->setIsActivated(1);
	$equipo->save();

	$cambio1 = new Cambio();
	$cambio1->setProyectoId($proyecto->getId());
	$cambio1->setPersonaId($this->getUser()->getAttribute('personaLogueada'));
	$cambio1->setDescripcion($this->getUser()->getGuardUser()->getUsername().' es el administrador del proyecto');
	$cambio1->save();
      $this->redirect('proyecto/index');
    }
  }

  public function executePredeterminar(sfWebRequest $request)
  {
	$this->forward404Unless($proyecto = Doctrine_Core::getTable('proyecto')->find(array($request->getParameter('id'))), sprintf('Object proyecto does not exist (%s).', $request->getParameter('id')));
	$this->getUser()->setAttribute('proyecto', $proyecto->getId());
    	$this->redirect('Acceso/index');
  }


}
