<?php

/**
 * Cambio form base class.
 *
 * @method Cambio getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCambioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idCambios'           => new sfWidgetFormInputHidden(),
      'Descripcion'         => new sfWidgetFormInputText(),
      'Fecha'               => new sfWidgetFormDateTime(),
      'Proyecto_idProyecto' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProyectoIdProyecto'), 'add_empty' => false)),
      'Persona_idPersona'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PersonaIdPersona'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idCambios'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idCambios')), 'empty_value' => $this->getObject()->get('idCambios'), 'required' => false)),
      'Descripcion'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'Fecha'               => new sfValidatorDateTime(array('required' => false)),
      'Proyecto_idProyecto' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProyectoIdProyecto'))),
      'Persona_idPersona'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PersonaIdPersona'))),
    ));

    $this->widgetSchema->setNameFormat('cambio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cambio';
  }

}
