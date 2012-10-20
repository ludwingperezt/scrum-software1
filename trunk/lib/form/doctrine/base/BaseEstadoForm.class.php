<?php

/**
 * Estado form base class.
 *
 * @method Estado getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idEstado'    => new sfWidgetFormInputHidden(),
      'Nombre'      => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idEstado'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idEstado')), 'empty_value' => $this->getObject()->get('idEstado'), 'required' => false)),
      'Nombre'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estado';
  }

}
