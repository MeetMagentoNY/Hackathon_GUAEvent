<?php
/**
 * Google Universal Analytics Events
 *
 * @category Hackathon
 * @package Hackathon_GUAEvent
 * @license http://opensource.org/licenses/OSL-3.0 OSL-3.0
 */

/**
 * Setup Model Resource Class
 *
 * @category Hackathon
 * @package Hackathon_GUAEvent
 * @author Joseph Leedy <joseph@leedy.us>
 * @author David Robinson <first>.<last>@aoe.com
 */
class Hackathon_GUAEvent_Block_Js extends Mage_Core_Block_Template
{
    /**
     * @var Hackathon_GUAEvent_Model_Resource_Event_Collection
     */
    protected $_events;

    /**
     * Retrieves a collection of all events
     *
     * @return Hackathon_GUAEvent_Model_Resource_Event_Collection
     */
    public function getEvents()
    {
        if ($this->_events) {
            return $this->_events;
        }

        $this->_events = Mage::getModel('hackathon_guaevent/event')->getCollection();

        return $this->_events;
    }

    /**
     * Retrieve an object containing the trigger data for the event
     *
     * @param Hackathon_GUAEvent_Model_Event $event
     * @return Varien_Object
     */
    public function getTriggerData(Hackathon_GUAEvent_Model_Event $event)
    {
        $triggerData = json_decode($event->getTriggerData(), true);
        $triggerObject = new Varien_Object();

        if (count($triggerData) > 0) {
            $triggerObject->setData($triggerData);
        }

        return $triggerObject;
    }

    /**
     * Constructs the js event method
     *
     * @param Hackathon_GUAEvent_Model_Event $event
     * @return string
     */
    public function getGAEventMethod(Hackathon_GUAEvent_Model_Event $event)
    {
        return sprintf(
            'ga("send", "event", %s, %s, %s, %s);',
            $event->getEventCategory(),
            $event->getEventAction(),
            $event->getEventLabel() !== null ? $event->getEventLabel() : '""',
            $event->getEventValue()
        );
    }
}
