<?php

/**
 * Link form base class.
 *
 * @method Link getObject() Returns the current form's model object
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLinkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idLink'      => new sfWidgetFormInputHidden(),
      'Direccion'   => new sfWidgetFormInputText(),
      'Descripcion' => new sfWidgetFormInputText(),
      'idProyecto'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idLink'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idLink')), 'empty_value' => $this->getObject()->get('idLink'), 'required' => false)),
      'Direccion'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'Descripcion' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'idProyecto'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'))),
    ));

    $this->widgetSchema->setNameFormat('link[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Link';
  }

}
