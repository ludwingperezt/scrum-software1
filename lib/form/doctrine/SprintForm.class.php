<?php

/**
 * Sprint form.
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SprintForm extends BaseSprintForm
{
  public function configure()
  {
  unset(
  $this['created_at'],
  $this['updated_at']  
  );
$this->widgetSchema['Proyecto_id']  = new sfWidgetFormInputHidden();
$this->widgetSchema['Persona_id']  = new sfWidgetFormInputHidden();
  }
}
