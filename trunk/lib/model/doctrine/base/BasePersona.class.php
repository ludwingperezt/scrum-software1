<?php

/**
 * BasePersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idPersona
 * @property string $Nombre
 * @property string $Email
 * @property string $Telefono
 * @property blob $Contraseña
 * @property boolean $Activo
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $ProductBacklogs
 * @property Doctrine_Collection $Proyectoes
 * @property Doctrine_Collection $Equipoes
 * @property Doctrine_Collection $Reunions
 * @property Doctrine_Collection $HistorialChats
 * @property Doctrine_Collection $Cambios
 * 
 * @method integer             getIdPersona()       Returns the current record's "idPersona" value
 * @method string              getNombre()          Returns the current record's "Nombre" value
 * @method string              getEmail()           Returns the current record's "Email" value
 * @method string              getTelefono()        Returns the current record's "Telefono" value
 * @method blob                getContrase�()       Returns the current record's "Contrase�" value
 * @method boolean             getActivo()          Returns the current record's "Activo" value
 * @method Doctrine_Collection getTareas()          Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getProductBacklogs() Returns the current record's "ProductBacklogs" collection
 * @method Doctrine_Collection getProyectoes()      Returns the current record's "Proyectoes" collection
 * @method Doctrine_Collection getEquipoes()        Returns the current record's "Equipoes" collection
 * @method Doctrine_Collection getReunions()        Returns the current record's "Reunions" collection
 * @method Doctrine_Collection getHistorialChats()  Returns the current record's "HistorialChats" collection
 * @method Doctrine_Collection getCambios()         Returns the current record's "Cambios" collection
 * @method Persona             setIdPersona()       Sets the current record's "idPersona" value
 * @method Persona             setNombre()          Sets the current record's "Nombre" value
 * @method Persona             setEmail()           Sets the current record's "Email" value
 * @method Persona             setTelefono()        Sets the current record's "Telefono" value
 * @method Persona             setContrase�()       Sets the current record's "Contrase�" value
 * @method Persona             setActivo()          Sets the current record's "Activo" value
 * @method Persona             setTareas()          Sets the current record's "Tareas" collection
 * @method Persona             setProductBacklogs() Sets the current record's "ProductBacklogs" collection
 * @method Persona             setProyectoes()      Sets the current record's "Proyectoes" collection
 * @method Persona             setEquipoes()        Sets the current record's "Equipoes" collection
 * @method Persona             setReunions()        Sets the current record's "Reunions" collection
 * @method Persona             setHistorialChats()  Sets the current record's "HistorialChats" collection
 * @method Persona             setCambios()         Sets the current record's "Cambios" collection
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
        $this->hasColumn('idPersona', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('Email', 'string', 45, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('Telefono', 'string', 15, array(
             'type' => 'string',
             'fixed' => 1,
             'length' => 15,
             ));
        $this->hasColumn('Contraseña', 'blob', 65535, array(
             'type' => 'blob',
             'notnull' => true,
             'length' => 65535,
             ));
        $this->hasColumn('Activo', 'boolean', null, array(
             'type' => 'boolean',
             ));

        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Tarea as Tareas', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('ProductBacklog as ProductBacklogs', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('Proyecto as Proyectoes', array(
             'local' => 'idPersona',
             'foreign' => 'idAdministrador'));

        $this->hasMany('Equipo as Equipoes', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('Reunion as Reunions', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('HistorialChat as HistorialChats', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('Cambio as Cambios', array(
             'local' => 'idPersona',
             'foreign' => 'Persona_idPersona'));
    }
}