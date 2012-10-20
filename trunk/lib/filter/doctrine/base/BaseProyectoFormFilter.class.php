<?php

/**
 * Proyecto filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProyectoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idAdministrador' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idAdministrador'), 'add_empty' => true)),
      'Nombre'          => new sfWidgetFormFilterInput(),
      'Descripcion'     => new sfWidgetFormFilterInput(),
      'Comentarios'     => new sfWidgetFormFilterInput(),
      'FCreacion'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'FModificacion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'FFinalizacion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'Activo'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'idAdministrador' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idAdministrador'), 'column' => 'idPersona')),
      'Nombre'          => new sfValidatorPass(array('required' => false)),
      'Descripcion'     => new sfValidatorPass(array('required' => false)),
      'Comentarios'     => new sfValidatorPass(array('required' => false)),
      'FCreacion'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'FModificacion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'FFinalizacion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Activo'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('proyecto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }

  public function getFields()
  {
    return array(
      'idProyecto'      => 'Number',
      'idAdministrador' => 'ForeignKey',
      'Nombre'          => 'Text',
      'Descripcion'     => 'Text',
      'Comentarios'     => 'Text',
      'FCreacion'       => 'Date',
      'FModificacion'   => 'Date',
      'FFinalizacion'   => 'Date',
      'Activo'          => 'Boolean',
    );
  }
}
