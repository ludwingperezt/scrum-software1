<?php

/**
 * Rol form base class.
 *
 * @method Rol getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRolForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRol'       => new sfWidgetFormInputHidden(),
      'Nombre'      => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormInputText(),
      'Activo'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idRol'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idRol')), 'empty_value' => $this->getObject()->get('idRol'), 'required' => false)),
      'Nombre'      => new sfValidatorString(array('max_length' => 45)),
      'Descripcion' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'Activo'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rol[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rol';
  }

}
