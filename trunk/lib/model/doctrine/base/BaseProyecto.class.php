<?php

/**
 * BaseProyecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $Persona_id
 * @property string $Nombre
 * @property clob $Descripcion
 * @property clob $Comentarios
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property timestamp $expires_at
 * @property boolean $is_activated
 * @property Persona $Persona
 * @property Doctrine_Collection $Sprints
 * @property Doctrine_Collection $Productbacklogs
 * @property Doctrine_Collection $Equipoes
 * @property Doctrine_Collection $Reunions
 * @property Doctrine_Collection $HistorialChats
 * @property Doctrine_Collection $Links
 * @property Doctrine_Collection $Cambioes
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getPersonaId()       Returns the current record's "Persona_id" value
 * @method string              getNombre()          Returns the current record's "Nombre" value
 * @method clob                getDescripcion()     Returns the current record's "Descripcion" value
 * @method clob                getComentarios()     Returns the current record's "Comentarios" value
 * @method timestamp           getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()       Returns the current record's "updated_at" value
 * @method timestamp           getExpiresAt()       Returns the current record's "expires_at" value
 * @method boolean             getIsActivated()     Returns the current record's "is_activated" value
 * @method Persona             getPersona()         Returns the current record's "Persona" value
 * @method Doctrine_Collection getSprints()         Returns the current record's "Sprints" collection
 * @method Doctrine_Collection getProductbacklogs() Returns the current record's "Productbacklogs" collection
 * @method Doctrine_Collection getEquipoes()        Returns the current record's "Equipoes" collection
 * @method Doctrine_Collection getReunions()        Returns the current record's "Reunions" collection
 * @method Doctrine_Collection getHistorialChats()  Returns the current record's "HistorialChats" collection
 * @method Doctrine_Collection getLinks()           Returns the current record's "Links" collection
 * @method Doctrine_Collection getCambioes()        Returns the current record's "Cambioes" collection
 * @method Proyecto            setId()              Sets the current record's "id" value
 * @method Proyecto            setPersonaId()       Sets the current record's "Persona_id" value
 * @method Proyecto            setNombre()          Sets the current record's "Nombre" value
 * @method Proyecto            setDescripcion()     Sets the current record's "Descripcion" value
 * @method Proyecto            setComentarios()     Sets the current record's "Comentarios" value
 * @method Proyecto            setCreatedAt()       Sets the current record's "created_at" value
 * @method Proyecto            setUpdatedAt()       Sets the current record's "updated_at" value
 * @method Proyecto            setExpiresAt()       Sets the current record's "expires_at" value
 * @method Proyecto            setIsActivated()     Sets the current record's "is_activated" value
 * @method Proyecto            setPersona()         Sets the current record's "Persona" value
 * @method Proyecto            setSprints()         Sets the current record's "Sprints" collection
 * @method Proyecto            setProductbacklogs() Sets the current record's "Productbacklogs" collection
 * @method Proyecto            setEquipoes()        Sets the current record's "Equipoes" collection
 * @method Proyecto            setReunions()        Sets the current record's "Reunions" collection
 * @method Proyecto            setHistorialChats()  Sets the current record's "HistorialChats" collection
 * @method Proyecto            setLinks()           Sets the current record's "Links" collection
 * @method Proyecto            setCambioes()        Sets the current record's "Cambioes" collection
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProyecto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('proyecto');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('Persona_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Nombre', 'string', 45, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('Descripcion', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));
        $this->hasColumn('Comentarios', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('updated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('expires_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));


        $this->index('fk_Proyecto_Persona1', array(
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
        $this->hasOne('Persona', array(
             'local' => 'Persona_id',
             'foreign' => 'id'));

        $this->hasMany('Sprint as Sprints', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('Productbacklog as Productbacklogs', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('Equipo as Equipoes', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('Reunion as Reunions', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('HistorialChat as HistorialChats', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('Link as Links', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $this->hasMany('Cambio as Cambioes', array(
             'local' => 'id',
             'foreign' => 'Proyecto_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}