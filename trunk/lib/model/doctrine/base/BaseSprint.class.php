<?php

/**
 * BaseSprint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idSprint
 * @property string $Nombre
 * @property string $Descripcion
 * @property timestamp $FechaInicio
 * @property timestamp $FechaFin
 * @property integer $DiasDisponibles
 * @property integer $idEstado
 * @property Estado $idEstado
 * @property Doctrine_Collection $SprintProductBacklogs
 * 
 * @method integer             getIdSprint()              Returns the current record's "idSprint" value
 * @method string              getNombre()                Returns the current record's "Nombre" value
 * @method string              getDescripcion()           Returns the current record's "Descripcion" value
 * @method timestamp           getFechaInicio()           Returns the current record's "FechaInicio" value
 * @method timestamp           getFechaFin()              Returns the current record's "FechaFin" value
 * @method integer             getDiasDisponibles()       Returns the current record's "DiasDisponibles" value
 * @method Estado              getIdEstado()              Returns the current record's "idEstado" value
 * @method Doctrine_Collection getSprintProductBacklogs() Returns the current record's "SprintProductBacklogs" collection
 * @method Sprint              setIdSprint()              Sets the current record's "idSprint" value
 * @method Sprint              setNombre()                Sets the current record's "Nombre" value
 * @method Sprint              setDescripcion()           Sets the current record's "Descripcion" value
 * @method Sprint              setFechaInicio()           Sets the current record's "FechaInicio" value
 * @method Sprint              setFechaFin()              Sets the current record's "FechaFin" value
 * @method Sprint              setDiasDisponibles()       Sets the current record's "DiasDisponibles" value
 * @method Sprint              setIdEstado()              Sets the current record's "idEstado" value
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
        $this->hasColumn('idSprint', 'integer', 4, array(
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
        $this->hasColumn('idEstado', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('fk_Sprint_Estado1_idx', array(
             'fields' => 
             array(
              0 => 'idEstado',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estado as idEstado', array(
             'local' => 'idEstado',
             'foreign' => 'idEstado'));

        $this->hasMany('SprintProductBacklog as SprintProductBacklogs', array(
             'local' => 'idSprint',
             'foreign' => 'idSprint'));
    }
}