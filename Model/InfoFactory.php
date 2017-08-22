<?php
/**
 * @category   MaGuru
 * @package    Maguru_ProductInfo
 * @author     MaGuru Andrii Zakharchuk <maguru.sup@gmail.com>
 */
namespace Maguru\ProductInfo\Model;

class InfoFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create new model
     *
     * @param array $arguments
     * @return \Maguru\ProductInfo\Model\Info
     */
    public function create(array $arguments = [])
    {
        return $this->_objectManager->create('Maguru\ProductInfo\Model\Info', $arguments, false);
    }
}