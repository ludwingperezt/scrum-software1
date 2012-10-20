<?php

/**
 * Reunion form base class.
 *
 * @method Reunion getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReunionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'Proyecto_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => false)),
      'Persona_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'Titulo'      => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormTextarea(),
      'Anotaciones' => new sfWidgetFormTextarea(),
      'Fecha'       => new sfWidgetFormDateTime(),
      'Duracion'    => new sfWidgetFormInputText(),
      'Activo'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Proyecto_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'))),
      'Persona_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'Titulo'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion' => new sfValidatorString(array('required' => false)),
      'Anotaciones' => new sfValidatorString(array('required' => false)),
      'Fecha'       => new sfValidatorDateTime(array('required' => false)),
      'Duracion'    => new sfValidatorInteger(array('required' => false)),
      'Activo'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reunion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reunion';
  }

}
