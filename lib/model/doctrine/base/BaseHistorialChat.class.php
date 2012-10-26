<?php

/**
 * BaseHistorialChat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $Proyecto_id
 * @property integer $Persona_id
 * @property clob $Mensaje
 * @property timestamp $created_at
 * @property boolean $is_activated
 * @property Proyecto $Proyecto
 * @property Persona $Persona
 * 
 * @method integer       getId()           Returns the current record's "id" value
 * @method integer       getProyectoId()   Returns the current record's "Proyecto_id" value
 * @method integer       getPersonaId()    Returns the current record's "Persona_id" value
 * @method clob          getMensaje()      Returns the current record's "Mensaje" value
 * @method timestamp     getCreatedAt()    Returns the current record's "created_at" value
 * @method boolean       getIsActivated()  Returns the current record's "is_activated" value
 * @method Proyecto      getProyecto()     Returns the current record's "Proyecto" value
 * @method Persona       getPersona()      Returns the current record's "Persona" value
 * @method HistorialChat setId()           Sets the current record's "id" value
 * @method HistorialChat setProyectoId()   Sets the current record's "Proyecto_id" value
 * @method HistorialChat setPersonaId()    Sets the current record's "Persona_id" value
 * @method HistorialChat setMensaje()      Sets the current record's "Mensaje" value
 * @method HistorialChat setCreatedAt()    Sets the current record's "created_at" value
 * @method HistorialChat setIsActivated()  Sets the current record's "is_activated" value
 * @method HistorialChat setProyecto()     Sets the current record's "Proyecto" value
 * @method HistorialChat setPersona()      Sets the current record's "Persona" value
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
        $this->hasColumn('Mensaje', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));


        $this->index('fk_HistorialChat_Proyecto1', array(
             'fields' => 
             array(
              0 => 'Proyecto_id',
             ),
             ));
        $this->index('fk_HistorialChat_Persona2', array(
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
        $this->hasOne('Proyecto', array(
             'local' => 'Proyecto_id',
             'foreign' => 'id'));

        $this->hasOne('Persona', array(
             'local' => 'Persona_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}