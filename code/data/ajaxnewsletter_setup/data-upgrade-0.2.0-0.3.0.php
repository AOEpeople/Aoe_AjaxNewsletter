<?php
$installer = $this; /* @var $installer Mage_Core_Model_Resource_Setup */
$installer->startSetup();


Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$page = Mage::getModel('cms/page')->load('newsletter-unsubscription-success');

if(!$page->getPageId()) {
    $content = <<<EOD
<p>You have been unsubscribed.</p>
EOD;
    $pageLayoutXML = <<<EOD
EOD;

    $cmsPageData = array(
        'title' => 'Newsletter subscription',
        'identifier' => 'newsletter-unsubscription-success',
        'stores' => array(0),//available for all store views
        'root_template' => 'one_column',
        'meta_keywords' => '',
        'meta_description' => '',
        'content_heading' => '',
        'is_active' => 1,
        'layout_update_xml' => $pageLayoutXML,
        'content' => $content
    );
    Mage::getModel('cms/page')->setData($cmsPageData)->save();
}

$page = Mage::getModel('cms/page')->load('newsletter-unsubscription-error');

if(!$page->getPageId()) {
    $content = <<<EOD
<p>There was a problem with the un-subscription.</p>
EOD;
    $pageLayoutXML = <<<EOD
EOD;

    $cmsPageData = array(
        'title' => 'Newsletter subscription',
        'identifier' => 'newsletter-unsubscription-error',
        'stores' => array(0),//available for all store views
        'root_template' => 'one_column',
        'meta_keywords' => '',
        'meta_description' => '',
        'content_heading' => '',
        'is_active' => 1,
        'layout_update_xml' => $pageLayoutXML,
        'content' => $content
    );
    Mage::getModel('cms/page')->setData($cmsPageData)->save();
}


$installer->endSetup();
