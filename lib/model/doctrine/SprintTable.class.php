<?php

/**
 * SprintTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SprintTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SprintTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Sprint')
			->createQuery('a')
			->where('proyecto_id='.$this->getUser()->getAttribute('proyecto'))
			->execute();
    }
	public function getSprints($idproyecto)
	{
		if  ($idproyecto == null){
			$idproyecto = 0;
		}
			$q=Doctrine_Query::create()
				->from('sprint s')
				->where ('s.proyecto_id = '.$idproyecto);
		return $q->execute();
	}
}
