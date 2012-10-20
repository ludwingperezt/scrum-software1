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
      'Nombre'           => new sfWidgetFormFilterInput(),
      'Descripcion'      => new sfWidgetFormFilterInput(),
      'TiempoEstimado'   => new sfWidgetFormFilterInput(),
      'idProductBacklog' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProductBacklog'), 'add_empty' => true)),
      'idEstado'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'), 'add_empty' => true)),
      'idPersona'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Nombre'           => new sfValidatorPass(array('required' => false)),
      'Descripcion'      => new sfValidatorPass(array('required' => false)),
      'TiempoEstimado'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idProductBacklog' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProductBacklog'), 'column' => 'idProductBacklog')),
      'idEstado'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idEstado'), 'column' => 'idEstado')),
      'idPersona'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idPersona'), 'column' => 'idPersona')),
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
      'idTarea'          => 'Number',
      'Nombre'           => 'Text',
      'Descripcion'      => 'Text',
      'TiempoEstimado'   => 'Number',
      'idProductBacklog' => 'ForeignKey',
      'idEstado'         => 'ForeignKey',
      'idPersona'        => 'ForeignKey',
    );
  }
}
