<?php

/**
 * LinkTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LinkTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object LinkTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Link');
    }
	public function getLinksProyecto($idproyecto)
	{
		$q=Doctrine_Query::create()
			->from('link l')
			->where ('l.proyecto_id = '.$idproyecto);
		return $q->execute();
	}
}
