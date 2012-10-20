<?php

/**
 * Proyecto form base class.
 *
 * @method Proyecto getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'Persona_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Nombre'      => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormTextarea(),
      'Comentarios' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'expires_at'  => new sfWidgetFormDateTime(),
      'Activo'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Persona_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Nombre'      => new sfValidatorString(array('max_length' => 45)),
      'Descripcion' => new sfValidatorString(array('required' => false)),
      'Comentarios' => new sfValidatorString(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'expires_at'  => new sfValidatorDateTime(array('required' => false)),
      'Activo'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Proyecto', 'column' => array('Nombre')))
    );

    $this->widgetSchema->setNameFormat('proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }

}
