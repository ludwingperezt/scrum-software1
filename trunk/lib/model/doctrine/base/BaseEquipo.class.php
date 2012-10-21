<?php

/**
 * BaseEquipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $Proyecto_id
 * @property integer $Persona_id
 * @property integer $Rol_id
 * @property string $Nombre
 * @property boolean $is_activated
 * @property Rol $Rol
 * @property Persona $Persona
 * @property Proyecto $Proyecto
 * 
 * @method integer  getId()           Returns the current record's "id" value
 * @method integer  getProyectoId()   Returns the current record's "Proyecto_id" value
 * @method integer  getPersonaId()    Returns the current record's "Persona_id" value
 * @method integer  getRolId()        Returns the current record's "Rol_id" value
 * @method string   getNombre()       Returns the current record's "Nombre" value
 * @method boolean  getIsActivated()  Returns the current record's "is_activated" value
 * @method Rol      getRol()          Returns the current record's "Rol" value
 * @method Persona  getPersona()      Returns the current record's "Persona" value
 * @method Proyecto getProyecto()     Returns the current record's "Proyecto" value
 * @method Equipo   setId()           Sets the current record's "id" value
 * @method Equipo   setProyectoId()   Sets the current record's "Proyecto_id" value
 * @method Equipo   setPersonaId()    Sets the current record's "Persona_id" value
 * @method Equipo   setRolId()        Sets the current record's "Rol_id" value
 * @method Equipo   setNombre()       Sets the current record's "Nombre" value
 * @method Equipo   setIsActivated()  Sets the current record's "is_activated" value
 * @method Equipo   setRol()          Sets the current record's "Rol" value
 * @method Equipo   setPersona()      Sets the current record's "Persona" value
 * @method Equipo   setProyecto()     Sets the current record's "Proyecto" value
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEquipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('equipo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Proyecto_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Persona_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Rol_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));


        $this->index('fk_Equipo_Rol1', array(
             'fields' => 
             array(
              0 => 'Rol_id',
             ),
             ));
        $this->index('fk_Equipo_Persona1', array(
             'fields' => 
             array(
              0 => 'Persona_id',
             ),
             ));
        $this->index('fk_Equipo_Proyecto1', array(
             'fields' => 
             array(
              0 => 'Proyecto_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Rol', array(
             'local' => 'Rol_id',
             'foreign' => 'id'));

        $this->hasOne('Persona', array(
             'local' => 'Persona_id',
             'foreign' => 'id'));

        $this->hasOne('Proyecto', array(
             'local' => 'Proyecto_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}