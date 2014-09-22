<?php
/**
 * Google Universal Analytics Events
 *
 * @category Hackathon
 * @package Hackathon_GUAEvents
 * @license http://opensource.org/licenses/OSL-3.0 OSL-3.0
 */

/**
 * Setup Model Resource Class
 *
 * @category Hackathon
 * @package Hackathon_GUAEvents
 * @author Joseph Leedy <joseph@leedy.us>
 */
class Hackathon_GUAEvents_Block_Js extends Mage_Core_Block_Template
{
    /**
     * @var Hackathon_GUAEvents_Model_Resource_Event_Collection
     */
    protected $_events;

    /**
     * Retrieves a collection of all events
     *
     * @return Hackathon_GUAEvents_Model_Resource_Event_Collection
     */
    public function getEvents()
    {
        if ($this->_events) {
            return $this->_events;
        }

        $this->_events = Mage::getModel('hackathon_guaevents/event')->getCollection();

        return $this->_events;
    }

    /**
     * Get the event handler type
     *
     * @param  Hackathon_GUAEvents_Model_Event $event [description]
     * @return [type]
     */
    public function getJsEventName(Hackathon_GUAEvents_Model_Event $event)
    {
        $jsEventName = '';

        switch ($event->getTriggerType()) {
            /**
             * @todo change this to use constants from Model
             */
            case 'form_submit':
                $jsEventName = 'submit';
                break;
            case 'element_click':
                $jsEventName = 'click';
                break;
            case 'page_text':
                $jsEventName = 'text';
                break;
        }
    }

    /**
     * Retrieve an object containing the trigger data for the event
     *
     * @param Hackathon_GUAEvents_Model_Event $event
     * @return Varien_Object
     */
    public function getTriggerData(Hackathon_GUAEvents_Model_Event $event)
    {
        $triggerData = unserialize($event->getTriggerData());
        $triggerObject = new Varien_Object();

        if (count($triggerInfo) > 0) {
            $triggerObject->setData($triggerData);
        }

        return $triggerObject;
    }
}
