<?php
/**
 * Event Collection
 *
 * @author David Robinson <david.robinson@aoe.com>
 * @since 2014-09-21
 */

class Hackathon_GUAEvent_Model_Resource_Event_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Prefix of model event names
     *
     * @var string
     */
    protected $_eventPrefix = 'hackathon_guaevent_event_collection';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'collection';

    /**
     * Init Collection
     */
    protected function _construct()
    {
        $this->_init('hackathon_guaevent/event');
    }

    /**
     * Returns the collection with aggregated data for grid
     *
     * @return Hackathon_GUAEvent_Model_Resource_Event_Collection
     */
    public function getGridCollection()
    {
        return $this;
    }
}
