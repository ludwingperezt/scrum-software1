<?php

/**
 * Proyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Proyecto extends BaseProyecto
{
	public function __toString()
	{
		return sprintf($this->getNombre());
	}
	
	public function delete(Doctrine_Connection $conn = NULL)
	{
		$this->setIsActivated(false);
		return parent::save($conn);
	}
}
