<?php
/**
 * Event Model
 *
 * @author David Robinson <david.robinson@aoe.com>
 * @since 2014-09-21
 */

class Hackathon_GUAEvents_Model_Event extends Mage_Core_Model_Abstract
{
    const TYPE_FORM    = 'form';
    const TYPE_TEXT    = 'text';
    const TYPE_ELEMENT = 'element';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'hackathon_guaevents_event';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'event';

    /**
     * Set Resource Names
     */
    protected function _construct()
    {
        $this->_setResourceModel('hackathon_guaevents/event');
    }
}