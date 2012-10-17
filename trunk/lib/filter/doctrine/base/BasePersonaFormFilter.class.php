<?php

/**
 * Persona filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Email'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Telefono'    => new sfWidgetFormFilterInput(),
      'Contraseña' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Activo'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Nombre'      => new sfValidatorPass(array('required' => false)),
      'Email'       => new sfValidatorPass(array('required' => false)),
      'Telefono'    => new sfValidatorPass(array('required' => false)),
      'Contraseña' => new sfValidatorPass(array('required' => false)),
      'Activo'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'idPersona'   => 'Number',
      'Nombre'      => 'Text',
      'Email'       => 'Text',
      'Telefono'    => 'Text',
      'Contraseña' => 'Text',
      'Activo'      => 'Boolean',
    );
  }
}
