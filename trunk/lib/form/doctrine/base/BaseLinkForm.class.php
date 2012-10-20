<?php

/**
 * Link form base class.
 *
 * @method Link getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'Proyecto_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'Persona_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Direccion'   => new sfWidgetFormTextarea(),
      'Descripcion' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Proyecto_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'Persona_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Direccion'   => new sfValidatorString(),
      'Descripcion' => new sfValidatorString(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('link[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Link';
  }

}
