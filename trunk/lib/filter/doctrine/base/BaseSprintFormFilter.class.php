<?php

/**
 * Sprint filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSprintFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Nombre'          => new sfWidgetFormFilterInput(),
      'Descripcion'     => new sfWidgetFormFilterInput(),
      'FechaInicio'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'FechaFin'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'DiasDisponibles' => new sfWidgetFormFilterInput(),
      'idEstado'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Nombre'          => new sfValidatorPass(array('required' => false)),
      'Descripcion'     => new sfValidatorPass(array('required' => false)),
      'FechaInicio'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'FechaFin'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'DiasDisponibles' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idEstado'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idEstado'), 'column' => 'idEstado')),
    ));

    $this->widgetSchema->setNameFormat('sprint_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sprint';
  }

  public function getFields()
  {
    return array(
      'idSprint'        => 'Number',
      'Nombre'          => 'Text',
      'Descripcion'     => 'Text',
      'FechaInicio'     => 'Date',
      'FechaFin'        => 'Date',
      'DiasDisponibles' => 'Number',
      'idEstado'        => 'ForeignKey',
    );
  }
}
