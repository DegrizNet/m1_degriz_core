<?php

class Degriz_Core_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_FOOTER_SECTION = 'degriz_core/footer_section/';
    const XML_PATH_PRODUCT_LIST = 'degriz_core/product_list/';

    public function getAboutContent()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'about');
    }

    public function getFacebook()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'facebook');
    }
    public function getInstagram()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'instagram');
    }

    public function getFooterTitle1()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_title_1');
    }

    public function getFooterContent1()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_content_1');
    }

    public function getFooterTitle2()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_title_2');
    }

    public function getFooterContent2()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_content_2');
    }
    
    public function getFooterTitle3()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_title_3');
    }

    public function getFooterContent3()
    {
        return Mage::getStoreConfig(self::XML_PATH_FOOTER_SECTION . 'footer_content_3');
    }
    // Add similar functions for Footer Title 2, Footer Content 2, and so on

    public function getImageHeight()
    {
        return Mage::getStoreConfig(self::XML_PATH_PRODUCT_LIST . 'image_height');
    }

    public function getImageWidth()
    {
        return Mage::getStoreConfig(self::XML_PATH_PRODUCT_LIST . 'image_width');
    }

    public function isWishlistEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_PRODUCT_LIST . 'enable_wishlist');
    }

    public function isCompareEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_PRODUCT_LIST . 'enable_compare');
    }

    public function isShowAddToCartEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_PRODUCT_LIST . 'show_add_to_cart');
    }
}
