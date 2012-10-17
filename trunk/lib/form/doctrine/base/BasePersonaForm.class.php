<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPersona'   => new sfWidgetFormInputHidden(),
      'Nombre'      => new sfWidgetFormInputText(),
      'Email'       => new sfWidgetFormInputText(),
      'Telefono'    => new sfWidgetFormInputText(),
      'Contraseña' => new sfWidgetFormTextarea(),
      'Activo'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idPersona'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idPersona')), 'empty_value' => $this->getObject()->get('idPersona'), 'required' => false)),
      'Nombre'      => new sfValidatorString(array('max_length' => 100)),
      'Email'       => new sfValidatorString(array('max_length' => 45)),
      'Telefono'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'Contraseña' => new sfValidatorString(),
      'Activo'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Persona', 'column' => array('Email')))
    );

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

}
