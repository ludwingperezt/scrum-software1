<?php

/**
 * Sprint form base class.
 *
 * @method Sprint getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSprintForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idSprint'        => new sfWidgetFormInputHidden(),
      'Nombre'          => new sfWidgetFormInputText(),
      'Descripcion'     => new sfWidgetFormInputText(),
      'FechaInicio'     => new sfWidgetFormDateTime(),
      'FechaFin'        => new sfWidgetFormDateTime(),
      'DiasDisponibles' => new sfWidgetFormInputText(),
      'idEstado'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idSprint'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idSprint')), 'empty_value' => $this->getObject()->get('idSprint'), 'required' => false)),
      'Nombre'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'FechaInicio'     => new sfValidatorDateTime(array('required' => false)),
      'FechaFin'        => new sfValidatorDateTime(array('required' => false)),
      'DiasDisponibles' => new sfValidatorInteger(array('required' => false)),
      'idEstado'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'))),
    ));

    $this->widgetSchema->setNameFormat('sprint[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sprint';
  }

}
