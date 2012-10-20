<?php

/**
 * Tarea form base class.
 *
 * @method Tarea getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTareaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'Persona_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'ProductBacklog_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductBacklog'), 'add_empty' => false)),
      'Estado_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'Nombre'            => new sfWidgetFormInputText(),
      'Descripcion'       => new sfWidgetFormTextarea(),
      'TiempoEstimado'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Persona_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'ProductBacklog_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductBacklog'))),
      'Estado_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'Nombre'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'       => new sfValidatorString(array('required' => false)),
      'TiempoEstimado'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tarea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tarea';
  }

}
