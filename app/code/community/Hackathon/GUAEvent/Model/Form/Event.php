<?php

/**
 * @author David Robinson <first>.<last>@aoe.com
 * @since 2014-10-20
 */
class Hackathon_GUAEvent_Model_Form_Event extends Varien_Data_Form
{
    public function __construct($attributes = array())
    {
        parent::__construct($attributes);

        /** @var $helper Hackathon_GUAEvent_Helper_Event */
        $helper = Mage::helper('hackathon_guaevent/event');

        $this->addData(
            array(
                'id'            => 'edit_form',
                'method'        => 'post',
                'use_container' => true,
            )
        );

        $fieldset = $this->addFieldset(
            'base_fieldset',
            array('legend' => $helper->__('General Information'))
        );

        $fieldset->addField(
            'trigger_type',
            'text',
            array(
                'name'            => 'trigger_type',
                'label'           => $helper->__('Trigger Type'),
                'title'           => $helper->__('Trigger Type'),
            )
        );

        $fieldset->addField(
            'trigger_data',
            'textarea',
            array(
                'name'            => 'trigger_data',
                'label'           => $helper->__('Trigger Data'),
                'title'           => $helper->__('Trigger Data'),
            )
        );

        $fieldset->addField(
            'event_category',
            'textarea',
            array(
                'name'            => 'trigger_data',
                'label'           => $helper->__('Trigger Data'),
                'title'           => $helper->__('Trigger Data'),
            )
        );



    }
}
