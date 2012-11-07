<?php

/**
 * BasePersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $idFacebook
 * @property string $Nombre
 * @property string $Email
 * @property string $Telefono
 * @property boolean $is_activated
 * @property integer $sf_guard_user_id
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $Sprints
 * @property Doctrine_Collection $Productbacklogs
 * @property Doctrine_Collection $Proyectoes
 * @property Doctrine_Collection $SprintProductBacklogs
 * @property Doctrine_Collection $Equipoes
 * @property Doctrine_Collection $Reunions
 * @property Doctrine_Collection $HistorialChats
 * @property Doctrine_Collection $Links
 * @property Doctrine_Collection $Cambioes
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getIdFacebook()            Returns the current record's "idFacebook" value
 * @method string              getNombre()                Returns the current record's "Nombre" value
 * @method string              getEmail()                 Returns the current record's "Email" value
 * @method string              getTelefono()              Returns the current record's "Telefono" value
 * @method boolean             getIsActivated()           Returns the current record's "is_activated" value
 * @method integer             getSfGuardUserId()         Returns the current record's "sf_guard_user_id" value
 * @method sfGuardUser         getSfGuardUser()           Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getTareas()                Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getSprints()               Returns the current record's "Sprints" collection
 * @method Doctrine_Collection getProductbacklogs()       Returns the current record's "Productbacklogs" collection
 * @method Doctrine_Collection getProyectoes()            Returns the current record's "Proyectoes" collection
 * @method Doctrine_Collection getSprintProductBacklogs() Returns the current record's "SprintProductBacklogs" collection
 * @method Doctrine_Collection getEquipoes()              Returns the current record's "Equipoes" collection
 * @method Doctrine_Collection getReunions()              Returns the current record's "Reunions" collection
 * @method Doctrine_Collection getHistorialChats()        Returns the current record's "HistorialChats" collection
 * @method Doctrine_Collection getLinks()                 Returns the current record's "Links" collection
 * @method Doctrine_Collection getCambioes()              Returns the current record's "Cambioes" collection
 * @method Persona             setId()                    Sets the current record's "id" value
 * @method Persona             setIdFacebook()            Sets the current record's "idFacebook" value
 * @method Persona             setNombre()                Sets the current record's "Nombre" value
 * @method Persona             setEmail()                 Sets the current record's "Email" value
 * @method Persona             setTelefono()              Sets the current record's "Telefono" value
 * @method Persona             setIsActivated()           Sets the current record's "is_activated" value
 * @method Persona             setSfGuardUserId()         Sets the current record's "sf_guard_user_id" value
 * @method Persona             setSfGuardUser()           Sets the current record's "sfGuardUser" value
 * @method Persona             setTareas()                Sets the current record's "Tareas" collection
 * @method Persona             setSprints()               Sets the current record's "Sprints" collection
 * @method Persona             setProductbacklogs()       Sets the current record's "Productbacklogs" collection
 * @method Persona             setProyectoes()            Sets the current record's "Proyectoes" collection
 * @method Persona             setSprintProductBacklogs() Sets the current record's "SprintProductBacklogs" collection
 * @method Persona             setEquipoes()              Sets the current record's "Equipoes" collection
 * @method Persona             setReunions()              Sets the current record's "Reunions" collection
 * @method Persona             setHistorialChats()        Sets the current record's "HistorialChats" collection
 * @method Persona             setLinks()                 Sets the current record's "Links" collection
 * @method Persona             setCambioes()              Sets the current record's "Cambioes" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersona extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('persona');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('idFacebook', 'string', 18, array(
             'type' => 'string',
             'fixed' => 1,
             'length' => 18,
             ));
        $this->hasColumn('Nombre', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('Email', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('Telefono', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'length' => 15,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('sf_guard_user_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));


        $this->index('fk_persona_sf_guard_user1', array(
             'fields' => 
             array(
              0 => 'sf_guard_user_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'sf_guard_user_id',
             'foreign' => 'id'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Sprint as Sprints', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Productbacklog as Productbacklogs', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Proyecto as Proyectoes', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('SprintProductBacklog as SprintProductBacklogs', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Equipo as Equipoes', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Reunion as Reunions', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('HistorialChat as HistorialChats', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Link as Links', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $this->hasMany('Cambio as Cambioes', array(
             'local' => 'id',
             'foreign' => 'Persona_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}