<?php

/**
 * Proyecto form base class.
 *
 * @method Proyecto getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idProyecto'      => new sfWidgetFormInputHidden(),
      'idAdministrador' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idAdministrador'), 'add_empty' => false)),
      'Nombre'          => new sfWidgetFormInputText(),
      'Descripcion'     => new sfWidgetFormInputText(),
      'Comentarios'     => new sfWidgetFormInputText(),
      'FCreacion'       => new sfWidgetFormDateTime(),
      'FModificacion'   => new sfWidgetFormDateTime(),
      'FFinalizacion'   => new sfWidgetFormDateTime(),
      'Activo'          => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idProyecto'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProyecto')), 'empty_value' => $this->getObject()->get('idProyecto'), 'required' => false)),
      'idAdministrador' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idAdministrador'))),
      'Nombre'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'Comentarios'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'FCreacion'       => new sfValidatorDateTime(array('required' => false)),
      'FModificacion'   => new sfValidatorDateTime(array('required' => false)),
      'FFinalizacion'   => new sfValidatorDateTime(array('required' => false)),
      'Activo'          => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proyecto';
  }

}
