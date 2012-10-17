<?php

/**
 * ProductBacklog form base class.
 *
 * @method ProductBacklog getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductBacklogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idProductBacklog' => new sfWidgetFormInputHidden(),
      'Nombre'           => new sfWidgetFormInputText(),
      'Descripcion'      => new sfWidgetFormInputText(),
      'Prioridad'        => new sfWidgetFormInputText(),
      'Duracion'         => new sfWidgetFormInputText(),
      'idProyecto'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => false)),
      'idPersona'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => false)),
      'Activo'           => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idProductBacklog' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idProductBacklog')), 'empty_value' => $this->getObject()->get('idProductBacklog'), 'required' => false)),
      'Nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'Descripcion'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'Prioridad'        => new sfValidatorInteger(array('required' => false)),
      'Duracion'         => new sfValidatorInteger(array('required' => false)),
      'idProyecto'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'))),
      'idPersona'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'))),
      'Activo'           => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_backlog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductBacklog';
  }

}
