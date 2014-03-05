<?php

class Mage_BetterAdminNotifications_Block_Notification_Toolbar extends Mage_Adminhtml_Block_Notification_Toolbar
{
    public function isShow()
    {
        if (!Mage::getStoreConfig('general/better_admin_notifications/enabled') ||
            Mage::getStoreConfig('general/better_admin_notifications/only_popup'))
        {
            return parent::isShow();
        }
        return false;
    }

    public function isMessageWindowAvailable()
    {
        if (!Mage::getStoreConfig('general/better_admin_notifications/enabled') ||
            Mage::getStoreConfig('general/better_admin_notifications/only_popup'))
        {
            return parent::isMessageWindowAvailable();
        }
        return false;
    }
}
