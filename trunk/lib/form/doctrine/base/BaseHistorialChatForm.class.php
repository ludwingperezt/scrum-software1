<?php

/**
 * HistorialChat form base class.
 *
 * @method HistorialChat getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHistorialChatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'Proyecto_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'Persona_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Mensaje'      => new sfWidgetFormTextarea(),
      'created_at'   => new sfWidgetFormDateTime(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Proyecto_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'Persona_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Mensaje'      => new sfValidatorString(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('historial_chat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HistorialChat';
  }

}
