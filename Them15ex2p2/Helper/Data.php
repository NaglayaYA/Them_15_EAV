<?php
namespace Perspective\Them15ex2p2\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class Data extends AbstractHelper
{
    /**
     * @var EncryptorInterface
     */
    protected $encryptor;

    /**
     * @param Context $context
     * @param EncryptorInterface $encryptor
     */
    public function __construct(
        Context $context,
        EncryptorInterface $encryptor
    )
    {
        parent::__construct($context);
        $this->encryptor = $encryptor;
    }

    /*
     * @return bool
     */
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'perspective/general/enabled',
            $scope
        );
    }
      /*
     * @return bool
     */
    /*
     * @return string
     */
    public function getX($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/xvalue',
            $scope
        );
    }
    public function getY($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/yvalue',
            $scope
        );
    }
}