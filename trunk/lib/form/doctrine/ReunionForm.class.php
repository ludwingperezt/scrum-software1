<?php

/**
 * Reunion form.
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReunionForm extends BaseReunionForm
{
  public function configure()
  {
	unset(
		$this['Activo']
	);
	$this->widgetSchema->setLabels(array(
		'idProyecto'=>'Proyecto',
		'idPersona'=>'Responsable'
	));
	//$this->widgetSchema->setHelp('idProyecto','Seleccione el proyecto a quien se le asignará la reunión');
  }
}
