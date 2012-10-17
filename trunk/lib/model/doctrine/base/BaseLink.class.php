<?php

/**
 * BaseLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idLink
 * @property string $Direccion
 * @property string $Descripcion
 * @property integer $idProyecto
 * @property Proyecto $idProyecto
 * 
 * @method integer  getIdLink()      Returns the current record's "idLink" value
 * @method string   getDireccion()   Returns the current record's "Direccion" value
 * @method string   getDescripcion() Returns the current record's "Descripcion" value
 * @method Proyecto getIdProyecto()  Returns the current record's "idProyecto" value
 * @method Link     setIdLink()      Sets the current record's "idLink" value
 * @method Link     setDireccion()   Sets the current record's "Direccion" value
 * @method Link     setDescripcion() Sets the current record's "Descripcion" value
 * @method Link     setIdProyecto()  Sets the current record's "idProyecto" value
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('link');
        $this->hasColumn('idLink', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Direccion', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('Descripcion', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('idProyecto', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('fk_Link_Proyecto1_idx', array(
             'fields' => 
             array(
              0 => 'idProyecto',
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
    }
}