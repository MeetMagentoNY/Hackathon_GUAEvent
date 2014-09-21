<?php
/**
 * Event Resource Model
 *
 * @author David Robinson <david.robinson@aoe.com>
 * @since 2014-09-21
 */

class Hackathon_GUAEvents_Model_Resource_Event extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Model Initialization
     */
    protected function _construct()
    {
        $this->_init('hackathon_guaevents/event', 'event_id');
    }
}
