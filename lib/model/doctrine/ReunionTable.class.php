<?php

/**
 * ReunionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ReunionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ReunionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Reunion');
    }
	
	public function getReunionesProyecto($idProyecto)
	{
		$q=$this->createQuery('r')
		->where('r.Proyecto_id ='.$idProyecto.' and r.is_activated=1');
		return $q->execute();
	}
	
	public function getReuniones()
	{
		$q=$this->createQuery('r')
		->where('r.is_activated=1');
		return $q->execute();
	}
}