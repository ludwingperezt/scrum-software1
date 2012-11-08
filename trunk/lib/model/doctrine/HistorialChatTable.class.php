<?php

/**
 * HistorialChatTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class HistorialChatTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object HistorialChatTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('HistorialChat');
    }
	
	public static function getUltimosMensajes()
	{
		$q=Doctrine_Query::create()
			->from('historialchat hc')
			->orderBy('hc.created_At')
			->limit(5);
		return $q->execute();
	}
}