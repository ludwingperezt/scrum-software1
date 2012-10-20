<?php

/**
 * Equipo filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEquipoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idRol'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idRol'), 'add_empty' => true)),
      'idPersona'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => true)),
      'idProyecto' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => true)),
      'Nombre'     => new sfWidgetFormFilterInput(),
      'Activo'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'idRol'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idRol'), 'column' => 'idRol')),
      'idPersona'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idPersona'), 'column' => 'idPersona')),
      'idProyecto' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProyecto'), 'column' => 'idProyecto')),
      'Nombre'     => new sfValidatorPass(array('required' => false)),
      'Activo'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('equipo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo';
  }

  public function getFields()
  {
    return array(
      'idEquipo'   => 'Number',
      'idRol'      => 'ForeignKey',
      'idPersona'  => 'ForeignKey',
      'idProyecto' => 'ForeignKey',
      'Nombre'     => 'Text',
      'Activo'     => 'Boolean',
    );
  }
}
