<?php
/**
 * Google Universal Analytics Events
 *
 * @category Hackathon
 * @package Hackathon_GUAEvent
 * @license http://opensource.org/licenses/OSL-3.0 OSL-3.0
 */

/** @var $installer Hackathon_GUAEvent_Model_Resource_Setup */
$installer = $this;

$connection = $installer->getConnection();

$installer->startSetup();

$eventTable = $connection->newTable($installer->getTable('hackathon_guaevent/event'))
    ->addColumn(
        'event_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary'  => true,
        ),
        'Unique identifier for the event'
    )
    ->addColumn(
        'trigger_type',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255,
        array(
            'nullable' => false,
        ),
        'The type of event trigger'
    )
    ->addColumn(
        'trigger_data',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        null,
        array(
            'nullable' => false,
        ),
        'Serialized array containing the data for the trigger'
    )
    ->addColumn(
        'event_category',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255,
        array(),
        'The event\'s category'
    )
    ->addColumn(
        'event_label',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255,
        array(
            'nullable' => false,
        ),
        'The event\'s label'
    )
    ->addColumn(
        'event_value',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'unsigned' => true,
            'nullable' => false,
        ),
        'The event\'s value'
    )
    ->setComment('Google Universal Analytics Event table');

$connection->createTable($eventTable);

$installer->endSetup();
