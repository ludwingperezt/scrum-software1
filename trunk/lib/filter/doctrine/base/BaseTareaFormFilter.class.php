<?php

/**
 * Tarea filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTareaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Persona_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => true)),
      'ProductBacklog_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductBacklog'), 'add_empty' => true)),
      'Estado_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'Nombre'            => new sfWidgetFormFilterInput(),
      'Descripcion'       => new sfWidgetFormFilterInput(),
      'TiempoEstimado'    => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Persona_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Persona'), 'column' => 'id')),
      'ProductBacklog_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProductBacklog'), 'column' => 'id')),
      'Estado_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'Nombre'            => new sfValidatorPass(array('required' => false)),
      'Descripcion'       => new sfValidatorPass(array('required' => false)),
      'TiempoEstimado'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tarea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tarea';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'Persona_id'        => 'ForeignKey',
      'ProductBacklog_id' => 'ForeignKey',
      'Estado_id'         => 'ForeignKey',
      'Nombre'            => 'Text',
      'Descripcion'       => 'Text',
      'TiempoEstimado'    => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
