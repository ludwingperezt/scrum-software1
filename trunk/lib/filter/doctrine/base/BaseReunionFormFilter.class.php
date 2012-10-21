<?php

/**
 * Reunion filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReunionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Proyecto_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'Persona_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => true)),
      'Titulo'       => new sfWidgetFormFilterInput(),
      'Descripcion'  => new sfWidgetFormFilterInput(),
      'Anotaciones'  => new sfWidgetFormFilterInput(),
      'Fecha'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'Duracion'     => new sfWidgetFormFilterInput(),
      'is_activated' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'Proyecto_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'id')),
      'Persona_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Persona'), 'column' => 'id')),
      'Titulo'       => new sfValidatorPass(array('required' => false)),
      'Descripcion'  => new sfValidatorPass(array('required' => false)),
      'Anotaciones'  => new sfValidatorPass(array('required' => false)),
      'Fecha'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Duracion'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_activated' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('reunion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reunion';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'Proyecto_id'  => 'ForeignKey',
      'Persona_id'   => 'ForeignKey',
      'Titulo'       => 'Text',
      'Descripcion'  => 'Text',
      'Anotaciones'  => 'Text',
      'Fecha'        => 'Date',
      'Duracion'     => 'Number',
      'is_activated' => 'Boolean',
    );
  }
}
