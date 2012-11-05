<?php

/**
 * ProductBacklog form base class.
 *
 * @method ProductBacklog getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductBacklogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'Proyecto_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'Persona_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Nombre'       => new sfWidgetFormInputText(),
      'Descripcion'  => new sfWidgetFormTextarea(),
      'Prioridad'    => new sfWidgetFormInputText(),
      'Duracion'     => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Proyecto_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'Persona_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Nombre'       => new sfValidatorString(array('max_length' => 45)),
      'Descripcion'  => new sfValidatorString(array('required' => false)),
      'Prioridad'    => new sfValidatorInteger(array('required' => false)),
      'Duracion'     => new sfValidatorInteger(array('required' => false)),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('product_backlog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductBacklog';
  }

}
