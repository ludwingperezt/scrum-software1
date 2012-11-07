<?php

/**
 * BaseRol
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $Nombre
 * @property clob $Descripcion
 * @property boolean $is_activated
 * @property Doctrine_Collection $Equipoes
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getNombre()       Returns the current record's "Nombre" value
 * @method clob                getDescripcion()  Returns the current record's "Descripcion" value
 * @method boolean             getIsActivated()  Returns the current record's "is_activated" value
 * @method Doctrine_Collection getEquipoes()     Returns the current record's "Equipoes" collection
 * @method Rol                 setId()           Sets the current record's "id" value
 * @method Rol                 setNombre()       Sets the current record's "Nombre" value
 * @method Rol                 setDescripcion()  Sets the current record's "Descripcion" value
 * @method Rol                 setIsActivated()  Sets the current record's "is_activated" value
 * @method Rol                 setEquipoes()     Sets the current record's "Equipoes" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRol extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rol');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('Descripcion', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));

        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Equipo as Equipoes', array(
             'local' => 'id',
             'foreign' => 'Rol_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}