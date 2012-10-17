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
      'idTarea'          => new sfWidgetFormInputHidden(),
      'Nombre'           => new sfWidgetFormInputText(),
      'Descripcion'      => new sfWidgetFormInputText(),
      'TiempoEstimado'   => new sfWidgetFormInputText(),
      'idProductBacklog' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProductBacklog'), 'add_empty' => false)),
      'idEstado'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'), 'add_empty' => false)),
      'idPersona'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idTarea'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idTarea')), 'empty_value' => $this->getObject()->get('idTarea'), 'required' => false)),
      'Nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'TiempoEstimado'   => new sfValidatorInteger(array('required' => false)),
      'idProductBacklog' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProductBacklog'))),
      'idEstado'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idEstado'))),
      'idPersona'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'))),
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
