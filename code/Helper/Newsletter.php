<?php


class Aoe_AjaxNewsletter_Helper_Newsletter extends Mage_Newsletter_Helper_Data {
    /**
     * Retrieve unsubsription url
     *
     * @param Mage_Newsletter_Model_Subscriber $subscriber
     * @return string
     */
    public function getUnsubscribeUrl($subscriber)
    {
        return Mage::getModel('core/url')
            ->setStore($subscriber->getStoreId())
            ->getUrl('ajaxnewsletter/subscribe/unsubscribe', array(
                'id'     => $subscriber->getId(),
                'code'   => $subscriber->getCode(),
                '_nosid' => true
            ));
    }
}