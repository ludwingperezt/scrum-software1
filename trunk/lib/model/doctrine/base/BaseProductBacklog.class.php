<?php

/**
 * BaseProductBacklog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idProductBacklog
 * @property string $Nombre
 * @property string $Descripcion
 * @property integer $Prioridad
 * @property integer $Duracion
 * @property integer $idProyecto
 * @property integer $idPersona
 * @property boolean $Activo
 * @property Proyecto $idProyecto
 * @property Persona $idPersona
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $SprintProductBacklogs
 * 
 * @method integer             getIdProductBacklog()      Returns the current record's "idProductBacklog" value
 * @method string              getNombre()                Returns the current record's "Nombre" value
 * @method string              getDescripcion()           Returns the current record's "Descripcion" value
 * @method integer             getPrioridad()             Returns the current record's "Prioridad" value
 * @method integer             getDuracion()              Returns the current record's "Duracion" value
 * @method Proyecto            getIdProyecto()            Returns the current record's "idProyecto" value
 * @method Persona             getIdPersona()             Returns the current record's "idPersona" value
 * @method boolean             getActivo()                Returns the current record's "Activo" value
 * @method Doctrine_Collection getTareas()                Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getSprintProductBacklogs() Returns the current record's "SprintProductBacklogs" collection
 * @method ProductBacklog      setIdProductBacklog()      Sets the current record's "idProductBacklog" value
 * @method ProductBacklog      setNombre()                Sets the current record's "Nombre" value
 * @method ProductBacklog      setDescripcion()           Sets the current record's "Descripcion" value
 * @method ProductBacklog      setPrioridad()             Sets the current record's "Prioridad" value
 * @method ProductBacklog      setDuracion()              Sets the current record's "Duracion" value
 * @method ProductBacklog      setIdProyecto()            Sets the current record's "idProyecto" value
 * @method ProductBacklog      setIdPersona()             Sets the current record's "idPersona" value
 * @method ProductBacklog      setActivo()                Sets the current record's "Activo" value
 * @method ProductBacklog      setTareas()                Sets the current record's "Tareas" collection
 * @method ProductBacklog      setSprintProductBacklogs() Sets the current record's "SprintProductBacklogs" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductBacklog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product_backlog');
        $this->hasColumn('idProductBacklog', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('Descripcion', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('Prioridad', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
        $this->hasColumn('Duracion', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
        $this->hasColumn('idProyecto', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('idPersona', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Activo', 'boolean', null, array(
             'type' => 'boolean',
             ));


        $this->index('fk_ProductBacklog_Proyecto1_idx', array(
             'fields' => 
             array(
              0 => 'idProyecto',
             ),
             ));
        $this->index('fk_ProductBacklog_Persona1_idx', array(
             'fields' => 
             array(
              0 => 'idPersona',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Proyecto as idProyecto', array(
             'local' => 'idProyecto',
             'foreign' => 'idProyecto'));

        $this->hasOne('Persona as idPersona', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasMany('Tarea as Tareas', array(
             'local' => 'idProductBacklog',
             'foreign' => 'idProductBacklog'));

        $this->hasMany('SprintProductBacklog as SprintProductBacklogs', array(
             'local' => 'idProductBacklog',
             'foreign' => 'idProductBacklog'));
    }
}