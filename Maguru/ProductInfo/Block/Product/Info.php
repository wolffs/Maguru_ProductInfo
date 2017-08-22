<?php
/**
 * @category   MaGuru
 * @package    Maguru_ProductInfo
 * @author     MaGuru Andrii Zakharchuk <maguru.sup@gmail.com>
 */
namespace Maguru\ProductInfo\Block\Product;

class Info extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Maguru\ProductInfo\Model\InfoFactory $modelFactory,
        array $data = []
    ) {
        $this->modelFactory = $modelFactory;
        parent::__construct($context, $data);
    }

    public function getInfoItems()
    {
        $model =  $this->modelFactory->create();
        return $model->getCollection();
    }
}