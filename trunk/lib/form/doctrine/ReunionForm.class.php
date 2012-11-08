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
  $this->widgetSchema->setLabels(array(
	'Persona_id' => 'Encargado',
	'Proyecto_id'=>'Proyecto',
	'Duracion'=>'Duracion (hrs)'
  ));
  unset(
  $this['is_activated'],
  $this['created_at'],
  $this['updated_at']
  );
$this->widgetSchema['Proyecto_id']  = new sfWidgetFormInputHidden();
$this->widgetSchema['Persona_id']  = new sfWidgetFormInputHidden();
  }
}
