<?php

/**
 * HistorialChat form base class.
 *
 * @method HistorialChat getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHistorialChatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idHistorialChat' => new sfWidgetFormInputHidden(),
      'idPersona'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => false)),
      'idProyecto'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => false)),
      'Mensaje'         => new sfWidgetFormTextarea(),
      'Fecha'           => new sfWidgetFormDateTime(),
      'Activo'          => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idHistorialChat' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idHistorialChat')), 'empty_value' => $this->getObject()->get('idHistorialChat'), 'required' => false)),
      'idPersona'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'))),
      'idProyecto'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'))),
      'Mensaje'         => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'Fecha'           => new sfValidatorDateTime(array('required' => false)),
      'Activo'          => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('historial_chat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HistorialChat';
  }

}
