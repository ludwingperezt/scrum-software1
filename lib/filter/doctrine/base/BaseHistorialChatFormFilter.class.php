<?php

/**
 * HistorialChat filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHistorialChatFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPersona'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idPersona'), 'add_empty' => true)),
      'idProyecto'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('idProyecto'), 'add_empty' => true)),
      'Mensaje'         => new sfWidgetFormFilterInput(),
      'Fecha'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'Activo'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'idPersona'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idPersona'), 'column' => 'idPersona')),
      'idProyecto'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('idProyecto'), 'column' => 'idProyecto')),
      'Mensaje'         => new sfValidatorPass(array('required' => false)),
      'Fecha'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Activo'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('historial_chat_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HistorialChat';
  }

  public function getFields()
  {
    return array(
      'idHistorialChat' => 'Number',
      'idPersona'       => 'ForeignKey',
      'idProyecto'      => 'ForeignKey',
      'Mensaje'         => 'Text',
      'Fecha'           => 'Date',
      'Activo'          => 'Boolean',
    );
  }
}
