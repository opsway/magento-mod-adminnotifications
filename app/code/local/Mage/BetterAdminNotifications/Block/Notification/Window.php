<?php

class Mage_BetterAdminNotifications_Block_Notification_Window extends Mage_Adminhtml_Block_Notification_Window
{
    public function canShow()
    {
        if (!Mage::getStoreConfig('general/better_admin_notifications/enabled'))
        {
            return parent::canShow();
        }
        return false;
    }
}
