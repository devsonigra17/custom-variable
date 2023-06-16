<?php

namespace Dev\CustomVariable\Block;

class CustomVariable extends \Magento\Framework\View\Element\Template
{
    const VARIABLE_CODE = 'dev';
    protected $customVariable;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Variable\Model\Variable $customVariable
    )
    {
        $this->customVariable = $customVariable;
        parent::__construct($context);
    }

    public function getPlainValue()
    {
        $model = $this->customVariable->loadByCode(self::VARIABLE_CODE);
        $plain_value = $model->getPlainValue();
        return $plain_value;
    }

    public function getHtmlValue()
    {
        $model = $this->customVariable->loadByCode(self::VARIABLE_CODE);
        $html_value = $model->getHtmlValue();
        return $html_value;
    }
}