<?php

/**
 * ProductBacklog filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductBacklogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Nombre'           => new sfWidgetFormFilterInput(),
      'Descripcion'      => new sfWidgetFormFilterInput(),
      'Prioridad'        => new sfWidgetFormFilterInput(),
      'Duracion'         => new sfWidgetFormFilterInput(),
      'idProyecto'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => true)),
      'idPersona'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => true)),
      'Activo'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Nombre'           => new sfValidatorPass(array('required' => false)),
      'Descripcion'      => new sfValidatorPass(array('required' => false)),
      'Prioridad'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Duracion'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idProyecto'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProyecto'), 'column' => 'idProyecto')),
      'idPersona'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idPersona'), 'column' => 'idPersona')),
      'Activo'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('product_backlog_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductBacklog';
  }

  public function getFields()
  {
    return array(
      'idProductBacklog' => 'Number',
      'Nombre'           => 'Text',
      'Descripcion'      => 'Text',
      'Prioridad'        => 'Number',
      'Duracion'         => 'Number',
      'idProyecto'       => 'ForeignKey',
      'idPersona'        => 'ForeignKey',
      'Activo'           => 'Boolean',
    );
  }
}
