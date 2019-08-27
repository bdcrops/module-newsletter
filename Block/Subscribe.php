<?php
/**
* @category BDCrops Inc.
* @package BDC\Newsletter or bdc/module-newsletter
* @author Abdul Matin <matinict@gmail.com / info@bdcrops.com >
* @copyright Copyright (c) 2019 BDCrops, Ltd (http://www.bdcrops.com)
* @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
 */
namespace BDC\Newsletter\Block;
use Magento\Framework\View\Element\Template;

class Subscribe extends \Magento\Framework\View\Element\Template
{
    /**
     * Retrieve form action url and set "secure" param to avoid confirm
     * message when we submit form from secure page to unsecure
     *
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('newsletter/subscriber/new', ['_secure' => true]);
    }
}



/*class Subscribe extends Template {
  public function __construct(Template\Context $context,array $data = []) {
        parent::__construct($context, $data);
    }
    public function beforeToHtml(\Magento\Newsletter\Block\Subscribe $originalBlock){
        $originalBlock->setTemplate('BDC_Newsletter::subscribe.phtml');
    }
 }*/
