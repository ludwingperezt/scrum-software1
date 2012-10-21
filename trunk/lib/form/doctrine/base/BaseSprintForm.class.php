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
      'id'              => new sfWidgetFormInputHidden(),
      'Proyecto_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'Persona_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Estado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'Nombre'          => new sfWidgetFormInputText(),
      'Descripcion'     => new sfWidgetFormTextarea(),
      'FechaInicio'     => new sfWidgetFormDateTime(),
      'FechaFin'        => new sfWidgetFormDateTime(),
      'DiasDisponibles' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Proyecto_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'Persona_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Estado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'Nombre'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'     => new sfValidatorString(array('required' => false)),
      'FechaInicio'     => new sfValidatorDateTime(array('required' => false)),
      'FechaFin'        => new sfValidatorDateTime(array('required' => false)),
      'DiasDisponibles' => new sfValidatorInteger(array('required' => false)),
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
