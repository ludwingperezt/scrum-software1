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
      'id'               => new sfWidgetFormInputHidden(),
      'idFacebook'       => new sfWidgetFormInputText(),
      'Nombre'           => new sfWidgetFormInputText(),
      'Email'            => new sfWidgetFormInputText(),
      'Telefono'         => new sfWidgetFormInputText(),
      'is_activated'     => new sfWidgetFormInputCheckbox(),
      'sf_guard_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idFacebook'       => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'Nombre'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'Email'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Telefono'         => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'is_activated'     => new sfValidatorBoolean(array('required' => false)),
      'sf_guard_user_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

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
