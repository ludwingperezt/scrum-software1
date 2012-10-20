<?php

/**
 * Cambio filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCambioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Descripcion'         => new sfWidgetFormFilterInput(),
      'Fecha'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'Proyecto_idProyecto' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProyectoIdProyecto'), 'add_empty' => true)),
      'Persona_idPersona'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PersonaIdPersona'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Descripcion'         => new sfValidatorPass(array('required' => false)),
      'Fecha'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Proyecto_idProyecto' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProyectoIdProyecto'), 'column' => 'idProyecto')),
      'Persona_idPersona'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PersonaIdPersona'), 'column' => 'idPersona')),
    ));

    $this->widgetSchema->setNameFormat('cambio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cambio';
  }

  public function getFields()
  {
    return array(
      'idCambios'           => 'Number',
      'Descripcion'         => 'Text',
      'Fecha'               => 'Date',
      'Proyecto_idProyecto' => 'ForeignKey',
      'Persona_idPersona'   => 'ForeignKey',
    );
  }
}
