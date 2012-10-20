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
      'Proyecto_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'Persona_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => true)),
      'Nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Descripcion' => new sfWidgetFormFilterInput(),
      'Prioridad'   => new sfWidgetFormFilterInput(),
      'Duracion'    => new sfWidgetFormFilterInput(),
      'Activo'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Proyecto_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'id')),
      'Persona_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Persona'), 'column' => 'id')),
      'Nombre'      => new sfValidatorPass(array('required' => false)),
      'Descripcion' => new sfValidatorPass(array('required' => false)),
      'Prioridad'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Duracion'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Activo'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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
      'id'          => 'Number',
      'Proyecto_id' => 'ForeignKey',
      'Persona_id'  => 'ForeignKey',
      'Nombre'      => 'Text',
      'Descripcion' => 'Text',
      'Prioridad'   => 'Number',
      'Duracion'    => 'Number',
      'Activo'      => 'Boolean',
    );
  }
}
