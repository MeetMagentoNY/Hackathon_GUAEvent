<?php

/**
 * Class Hackathon_GUAEvent_Adminhtml_GuaeventController
 *
 * @author David Robinson <first>.<last>@aoe.com
 * @since 2014-10-20
 */
class Hackathon_GUAEvent_Adminhtml_GuaeventController extends Aoe_Layout_Controller_ModelManager
{
    /**
     * @return Hackathon_GUAEvent_Helper_Event
     */
    protected function getHelper()
    {
        return Mage::helper('hackathon_guaevent/event');
    }
}
