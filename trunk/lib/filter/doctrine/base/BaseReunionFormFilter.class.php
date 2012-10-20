<?php

/**
 * Reunion filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReunionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Titulo'      => new sfWidgetFormFilterInput(),
      'Descripcion' => new sfWidgetFormFilterInput(),
      'Anotaciones' => new sfWidgetFormFilterInput(),
      'Fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'Duracion'    => new sfWidgetFormFilterInput(),
      'idProyecto'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => true)),
      'idPersona'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => true)),
      'Activo'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Titulo'      => new sfValidatorPass(array('required' => false)),
      'Descripcion' => new sfValidatorPass(array('required' => false)),
      'Anotaciones' => new sfValidatorPass(array('required' => false)),
      'Fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Duracion'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idProyecto'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProyecto'), 'column' => 'idProyecto')),
      'idPersona'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idPersona'), 'column' => 'idPersona')),
      'Activo'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('reunion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reunion';
  }

  public function getFields()
  {
    return array(
      'idReunion'   => 'Number',
      'Titulo'      => 'Text',
      'Descripcion' => 'Text',
      'Anotaciones' => 'Text',
      'Fecha'       => 'Date',
      'Duracion'    => 'Number',
      'idProyecto'  => 'ForeignKey',
      'idPersona'   => 'ForeignKey',
      'Activo'      => 'Boolean',
    );
  }
}
