<?php
namespace Nwsnet\NotificationPopup\Block;

class NotificationPopup extends \Magento\Framework\View\Element\Template
{
    /**
     * Enable or disable the notification popup
     *
     * @return mixed
     */
    public function getNotificationPopupEnable()
    {
        return $this->_scopeConfig->getValue('notification_popup/general/enable');
    }

    /**
     * Show the heading of the notification popup
     *
     * @return string
     */
    public function getNotificationPopupDisplayHeading()
    {
        return $this->_scopeConfig->getValue('notification_popup/general/display_heading');
    }

    /**
     * Show the text of the notification popup
     *
     * @return string
     */
    public function getNotificationPopupDisplayText()
    {
        return $this->_scopeConfig->getValue('notification_popup/general/display_text');
    }
}