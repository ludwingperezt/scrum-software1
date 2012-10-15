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
      'idReunion'   => new sfWidgetFormInputHidden(),
      'Titulo'      => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormInputText(),
      'Anotaciones' => new sfWidgetFormInputText(),
      'Fecha'       => new sfWidgetFormDateTime(),
      'Duracion'    => new sfWidgetFormInputText(),
      'idProyecto'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => false)),
      'idPersona'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => false)),
      'Activo'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idReunion'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idReunion')), 'empty_value' => $this->getObject()->get('idReunion'), 'required' => false)),
      'Titulo'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Anotaciones' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Fecha'       => new sfValidatorDateTime(array('required' => false)),
      'Duracion'    => new sfValidatorInteger(array('required' => false)),
      'idProyecto'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'))),
      'idPersona'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'))),
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
