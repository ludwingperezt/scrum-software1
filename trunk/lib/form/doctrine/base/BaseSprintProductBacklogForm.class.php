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
      'idSprint'         => new sfWidgetFormInputHidden(),
      'idProductBacklog' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idSprint'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idSprint')), 'empty_value' => $this->getObject()->get('idSprint'), 'required' => false)),
      'idProductBacklog' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProductBacklog')), 'empty_value' => $this->getObject()->get('idProductBacklog'), 'required' => false)),
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
