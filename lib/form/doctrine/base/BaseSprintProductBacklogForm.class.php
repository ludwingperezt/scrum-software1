<?php

/**
 * SprintProductBacklog form base class.
 *
 * @method SprintProductBacklog getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSprintProductBacklogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'Persona_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Sprint_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sprint'), 'add_empty' => false)),
      'Productbacklog_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Productbacklog'), 'add_empty' => false)),
      'Anotaciones'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Persona_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Sprint_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sprint'))),
      'Productbacklog_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Productbacklog'))),
      'Anotaciones'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sprint_product_backlog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SprintProductBacklog';
  }

}
