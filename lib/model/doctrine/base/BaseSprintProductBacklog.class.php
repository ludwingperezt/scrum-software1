<?php

/**
 * BaseSprintProductBacklog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $Sprint_id
 * @property integer $ProductBacklog_id
 * @property Sprint $Sprint
 * @property ProductBacklog $ProductBacklog
 * 
 * @method integer              getSprintId()          Returns the current record's "Sprint_id" value
 * @method integer              getProductBacklogId()  Returns the current record's "ProductBacklog_id" value
 * @method Sprint               getSprint()            Returns the current record's "Sprint" value
 * @method ProductBacklog       getProductBacklog()    Returns the current record's "ProductBacklog" value
 * @method SprintProductBacklog setSprintId()          Sets the current record's "Sprint_id" value
 * @method SprintProductBacklog setProductBacklogId()  Sets the current record's "ProductBacklog_id" value
 * @method SprintProductBacklog setSprint()            Sets the current record's "Sprint" value
 * @method SprintProductBacklog setProductBacklog()    Sets the current record's "ProductBacklog" value
 * 
 * @package    scrum
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSprintProductBacklog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sprint_product_backlog');
        $this->hasColumn('Sprint_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('ProductBacklog_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));


        $this->index('fk_SprintProductBacklog_Sprint1', array(
             'fields' => 
             array(
              0 => 'Sprint_id',
             ),
             ));
        $this->index('fk_SprintProductBacklog_ProductBacklog1', array(
             'fields' => 
             array(
              0 => 'ProductBacklog_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Sprint', array(
             'local' => 'Sprint_id',
             'foreign' => 'id'));

        $this->hasOne('ProductBacklog', array(
             'local' => 'ProductBacklog_id',
             'foreign' => 'id'));
    }
}