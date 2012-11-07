<?php

/**
 * Persona filter form base class.
 *
 * @package    scrum
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idFacebook'       => new sfWidgetFormFilterInput(),
      'Nombre'           => new sfWidgetFormFilterInput(),
      'Email'            => new sfWidgetFormFilterInput(),
      'Telefono'         => new sfWidgetFormFilterInput(),
      'is_activated'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sf_guard_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'idFacebook'       => new sfValidatorPass(array('required' => false)),
      'Nombre'           => new sfValidatorPass(array('required' => false)),
      'Email'            => new sfValidatorPass(array('required' => false)),
      'Telefono'         => new sfValidatorPass(array('required' => false)),
      'is_activated'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sf_guard_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'idFacebook'       => 'Text',
      'Nombre'           => 'Text',
      'Email'            => 'Text',
      'Telefono'         => 'Text',
      'is_activated'     => 'Boolean',
      'sf_guard_user_id' => 'ForeignKey',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
