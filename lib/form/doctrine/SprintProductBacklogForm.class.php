<?php

/**
 * SprintProductBacklog form.
 *
 * @package    scrum
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SprintProductBacklogForm extends BaseSprintProductBacklogForm
{
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at']
    );
	$this->widgetSchema['Persona_id']  = new sfWidgetFormInputHidden();
	$this->widgetSchema['Sprint_id']  = new sfWidgetFormInputHidden();
	$this->widgetSchema['Productbacklog_id']  = new sfWidgetFormInputHidden();
  }
}
