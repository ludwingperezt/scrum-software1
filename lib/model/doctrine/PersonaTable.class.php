<?php

/**
 * PersonaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PersonaTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PersonaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Persona');
    }
	
	public static function getUsuarioLogueado($idSfUser)
	{
		$q=Doctrine_Query::create()
			->from('Persona p')
			->where ('p.sf_guard_user_id='.$idSfUser);
		return $q->fetchOne();
	}
	
	public static function getPersona($idPersona)
	{
		$q=Doctrine_Query::create()
			->from('Persona p')
			->where ('p.id='.$idPersona);
		return $q->fetchOne();
	}
}