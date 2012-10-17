<?php

/**
 * Rol filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRolFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Descripcion' => new sfWidgetFormFilterInput(),
      'Activo'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Nombre'      => new sfValidatorPass(array('required' => false)),
      'Descripcion' => new sfValidatorPass(array('required' => false)),
      'Activo'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('rol_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rol';
  }

  public function getFields()
  {
    return array(
      'idRol'       => 'Number',
      'Nombre'      => 'Text',
      'Descripcion' => 'Text',
      'Activo'      => 'Boolean',
    );
  }
}
