<?php
/**
 * Event Model
 *
 * @author David Robinson <david.robinson@aoe.com>
 * @since 2014-09-21
 *
 * @method Hackathon_GUAEvent_Model_Event setTriggerType(string $type)
 * @method Hackathon_GUAEvent_Model_Event setTriggerData(string $data)
 * @method Hackathon_GUAEvent_Model_Event setEventCategory(string $category)
 * @method Hackathon_GUAEvent_Model_Event setEventAction(string $action)
 * @method Hackathon_GUAEvent_Model_Event setEventLabel(string $label)
 * @method Hackathon_GUAEvent_Model_Event setEventValue(int $value)
 *
 * @method string getTriggerType()
 * @method string getTriggerData()
 * @method string getEventCategory()
 * @method string getEventAction()
 * @method string getEventLabel()
 * @method int    getEventValue()
 */

class Hackathon_GUAEvent_Model_Event extends Mage_Core_Model_Abstract
{
    /**
     * Event types
     * TODO: create toOption hash for these
     */
    const TYPE_FORM    = 'form';
    const TYPE_TEXT    = 'text';
    const TYPE_ELEMENT = 'element';

    /**
     * Prefix of model event names
     *
     * @var string
     */
    protected $_eventPrefix = 'hackathon_guaevent_event';

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
        $this->_setResourceModel('hackathon_guaevent/event');
    }
}
