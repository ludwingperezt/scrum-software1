<?php

/**
 * BaseHistorialChat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idHistorialChat
 * @property integer $idPersona
 * @property integer $idProyecto
 * @property string $Mensaje
 * @property timestamp $Fecha
 * @property boolean $Activo
 * @property Persona $idPersona
 * @property Proyecto $idProyecto
 * 
 * @method integer       getIdHistorialChat() Returns the current record's "idHistorialChat" value
 * @method Persona       getIdPersona()       Returns the current record's "idPersona" value
 * @method Proyecto      getIdProyecto()      Returns the current record's "idProyecto" value
 * @method string        getMensaje()         Returns the current record's "Mensaje" value
 * @method timestamp     getFecha()           Returns the current record's "Fecha" value
 * @method boolean       getActivo()          Returns the current record's "Activo" value
 * @method HistorialChat setIdHistorialChat() Sets the current record's "idHistorialChat" value
 * @method HistorialChat setIdPersona()       Sets the current record's "idPersona" value
 * @method HistorialChat setIdProyecto()      Sets the current record's "idProyecto" value
 * @method HistorialChat setMensaje()         Sets the current record's "Mensaje" value
 * @method HistorialChat setFecha()           Sets the current record's "Fecha" value
 * @method HistorialChat setActivo()          Sets the current record's "Activo" value
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHistorialChat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('historial_chat');
        $this->hasColumn('idHistorialChat', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('idPersona', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('idProyecto', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Mensaje', 'string', 300, array(
             'type' => 'string',
             'length' => 300,
             ));
        $this->hasColumn('Fecha', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('Activo', 'boolean', null, array(
             'type' => 'boolean',
             ));


        $this->index('fk_HistorialChat_Persona1_idx', array(
             'fields' => 
             array(
              0 => 'idPersona',
             ),
             ));
        $this->index('fk_HistorialChat_Proyecto1_idx', array(
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
        $this->hasOne('Persona as idPersona', array(
             'local' => 'idPersona',
             'foreign' => 'idPersona'));

        $this->hasOne('Proyecto as idProyecto', array(
             'local' => 'idProyecto',
             'foreign' => 'idProyecto'));
    }
}