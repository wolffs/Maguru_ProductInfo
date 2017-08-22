<?php
/**
 * @category   MaGuru
 * @package    Maguru_ProductInfo
 * @author     MaGuru Andrii Zakharchuk <maguru.sup@gmail.com>
 */
namespace Maguru\ProductInfo\Model;

class Info extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Maguru\ProductInfo\Model\ResourceModel\Info');
    }
}