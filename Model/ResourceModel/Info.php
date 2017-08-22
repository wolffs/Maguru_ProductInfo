<?php
/**
 * @category   MaGuru
 * @package    Maguru_ProductInfo
 * @author     MaGuru Andrii Zakharchuk <maguru.sup@gmail.com>
 */
namespace Maguru\ProductInfo\Model\ResourceModel;

class Info extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('special_temp', 'row_id');
    }
}
?>