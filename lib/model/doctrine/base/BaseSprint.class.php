<?php

/**
 * BaseSprint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $Proyecto_id
 * @property integer $Persona_id
 * @property integer $Estado_id
 * @property string $Nombre
 * @property clob $Descripcion
 * @property timestamp $FechaInicio
 * @property timestamp $FechaFin
 * @property integer $DiasDisponibles
 * @property Estado $Estado
 * @property Proyecto $Proyecto
 * @property Persona $Persona
 * @property Doctrine_Collection $SprintProductBacklogs
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method integer             getProyectoId()            Returns the current record's "Proyecto_id" value
 * @method integer             getPersonaId()             Returns the current record's "Persona_id" value
 * @method integer             getEstadoId()              Returns the current record's "Estado_id" value
 * @method string              getNombre()                Returns the current record's "Nombre" value
 * @method clob                getDescripcion()           Returns the current record's "Descripcion" value
 * @method timestamp           getFechaInicio()           Returns the current record's "FechaInicio" value
 * @method timestamp           getFechaFin()              Returns the current record's "FechaFin" value
 * @method integer             getDiasDisponibles()       Returns the current record's "DiasDisponibles" value
 * @method Estado              getEstado()                Returns the current record's "Estado" value
 * @method Proyecto            getProyecto()              Returns the current record's "Proyecto" value
 * @method Persona             getPersona()               Returns the current record's "Persona" value
 * @method Doctrine_Collection getSprintProductBacklogs() Returns the current record's "SprintProductBacklogs" collection
 * @method Sprint              setId()                    Sets the current record's "id" value
 * @method Sprint              setProyectoId()            Sets the current record's "Proyecto_id" value
 * @method Sprint              setPersonaId()             Sets the current record's "Persona_id" value
 * @method Sprint              setEstadoId()              Sets the current record's "Estado_id" value
 * @method Sprint              setNombre()                Sets the current record's "Nombre" value
 * @method Sprint              setDescripcion()           Sets the current record's "Descripcion" value
 * @method Sprint              setFechaInicio()           Sets the current record's "FechaInicio" value
 * @method Sprint              setFechaFin()              Sets the current record's "FechaFin" value
 * @method Sprint              setDiasDisponibles()       Sets the current record's "DiasDisponibles" value
 * @method Sprint              setEstado()                Sets the current record's "Estado" value
 * @method Sprint              setProyecto()              Sets the current record's "Proyecto" value
 * @method Sprint              setPersona()               Sets the current record's "Persona" value
 * @method Sprint              setSprintProductBacklogs() Sets the current record's "SprintProductBacklogs" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSprint extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sprint');
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
        $this->hasColumn('Estado_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('Descripcion', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));
        $this->hasColumn('FechaInicio', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('FechaFin', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('DiasDisponibles', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));


        $this->index('fk_Sprint_Estado1', array(
             'fields' => 
             array(
              0 => 'Estado_id',
             ),
             ));
        $this->index('fk_Sprint_Proyecto1', array(
             'fields' => 
             array(
              0 => 'Proyecto_id',
             ),
             ));
        $this->index('fk_Sprint_Persona1', array(
             'fields' => 
             array(
              0 => 'Persona_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estado', array(
             'local' => 'Estado_id',
             'foreign' => 'id'));

        $this->hasOne('Proyecto', array(
             'local' => 'Proyecto_id',
             'foreign' => 'id'));

        $this->hasOne('Persona', array(
             'local' => 'Persona_id',
             'foreign' => 'id'));

        $this->hasMany('SprintProductBacklog as SprintProductBacklogs', array(
             'local' => 'id',
             'foreign' => 'Sprint_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}