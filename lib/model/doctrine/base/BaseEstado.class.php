<?php

/**
 * BaseEstado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $Nombre
 * @property clob $Descripcion
 * @property Doctrine_Collection $Tareas
 * @property Doctrine_Collection $Sprints
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getNombre()      Returns the current record's "Nombre" value
 * @method clob                getDescripcion() Returns the current record's "Descripcion" value
 * @method Doctrine_Collection getTareas()      Returns the current record's "Tareas" collection
 * @method Doctrine_Collection getSprints()     Returns the current record's "Sprints" collection
 * @method Estado              setId()          Sets the current record's "id" value
 * @method Estado              setNombre()      Sets the current record's "Nombre" value
 * @method Estado              setDescripcion() Sets the current record's "Descripcion" value
 * @method Estado              setTareas()      Sets the current record's "Tareas" collection
 * @method Estado              setSprints()     Sets the current record's "Sprints" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEstado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('estado');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
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

        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Tarea as Tareas', array(
             'local' => 'id',
             'foreign' => 'Estado_id'));

        $this->hasMany('Sprint as Sprints', array(
             'local' => 'id',
             'foreign' => 'Estado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}