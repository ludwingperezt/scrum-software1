<?php

/**
 * Equipo form base class.
 *
 * @method Equipo getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEquipoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idEquipo'   => new sfWidgetFormInputHidden(),
      'idRol'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idRol'), 'add_empty' => false)),
      'idPersona'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => false)),
      'idProyecto' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => false)),
      'Nombre'     => new sfWidgetFormInputText(),
      'Activo'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idEquipo'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idEquipo')), 'empty_value' => $this->getObject()->get('idEquipo'), 'required' => false)),
      'idRol'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idRol'))),
      'idPersona'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'))),
      'idProyecto' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'))),
      'Nombre'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Activo'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('equipo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

}
