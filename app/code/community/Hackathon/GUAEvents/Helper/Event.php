<?php
/**
 * Event Helper
 *
 * @author David Robinson <first>.<last>@aoe.com
 * @since 2014-10-20
 */

class Hackathon_GUAEvents_Helper_Event extends Aoe_Layout_Helper_AbstractModelManager
{
    const ACL_PATH_PREFIX = 'admin/gua/events/';
    const REGISTRY_KEY = 'hackathon_guaevents_event_CURRENT';

    /**
     * Get a model instance
     *
     * @return Hackathon_GUAEvents_Model_Event
     */
    public function getModel()
    {
        return Mage::getModel('hackathon_guaevents/event');
    }

    /**
     * Gets the collection
     *
     * @return mixed
     */
    public function getGridCollection()
    {
        return $this->getCollection()->getGridCollection();
    }

    /**
     * Get the frontname and controller portion of the route
     *
     * @return string
     */
    protected function getControllerRoute()
    {
        return 'adminhtml/guaevents';
    }

    /**
     * @return Varien_Data_Form
     */
    public function getForm()
    {
        /** @var $form Hackathon_GUAEvents_Model_Form_Event */
        $form = Mage::getModel('hackathon_guaevents/form_event');

        return $form;
    }

    /**
     * @param $action
     *
     * @return bool
     */
    public function getAclPermission($action)
    {
        $action = trim($action, ' /');
        return $this->getAdminSession()->isAllowed(self::ACL_PATH_PREFIX . $action);
    }

    /**
     * @return string
     */
    public function getCurrentRecordKey()
    {
        return self::REGISTRY_KEY;
    }
}
