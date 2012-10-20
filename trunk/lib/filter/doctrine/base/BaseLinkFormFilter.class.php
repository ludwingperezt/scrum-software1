<?php

/**
 * Link filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLinkFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Direccion'   => new sfWidgetFormFilterInput(),
      'Descripcion' => new sfWidgetFormFilterInput(),
      'idProyecto'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Direccion'   => new sfValidatorPass(array('required' => false)),
      'Descripcion' => new sfValidatorPass(array('required' => false)),
      'idProyecto'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProyecto'), 'column' => 'idProyecto')),
    ));

    $this->widgetSchema->setNameFormat('link_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Link';
  }

  public function getFields()
  {
    return array(
      'idLink'      => 'Number',
      'Direccion'   => 'Text',
      'Descripcion' => 'Text',
      'idProyecto'  => 'ForeignKey',
    );
  }
}
