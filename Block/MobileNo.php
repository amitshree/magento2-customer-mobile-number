<?php


namespace Amitshree\CustomerMobileNumber\Block;


use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

class MobileNo extends Template
{
    protected $customerSession;

    public function __construct(
        Template\Context $context,
        Session $customerSession,
        array $data = []
    )
    {
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function getMobileNo() {
        return $this->customerSession->getCustomer()->getMobileNo();
    }
}