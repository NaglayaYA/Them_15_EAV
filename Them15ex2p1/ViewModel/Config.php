<?php
namespace Perspective\Them15ex2p1\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Perspective\Them15ex2p1\Helper\Data;

class Config implements ArgumentInterface
{
   /**
     * @var Data
     */
    protected $helper;

    /**
     * @var \Magento\Framework\Registry
     */
    private $_registry;

    /**
     * @var \Magento\CatalogInventory\Model\Stock\StockItemRepository
     */
    private $_stockItemRepository;

    public function __construct( Data $helper,
        \Magento\Framework\Registry $registry,
        \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository
    )
    {
        $this->_registry = $registry;
        $this->_stockItemRepository = $stockItemRepository;
        $this->helper = $helper;
    }

    public function getCurrentProduct()
    {
    return $this->_registry->registry('current_product');
    }

    public function getCurrentCategory()
    {
    return $this->_registry->registry('current_category');
    }

    public function getStockItem($productId)
    {
        return $this->_stockItemRepository->get($productId);
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }
    
    public function getSocial()
    {
        return $this->helper->getSocial();
    }
  
}