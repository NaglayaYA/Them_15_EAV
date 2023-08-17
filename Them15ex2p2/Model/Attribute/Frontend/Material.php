<?php

namespace Perspective\Them15ex2p2\Model\Attribute\Frontend;

class Material extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{
    public function getValue(\Magento\Framework\DataObject $object)
    {

        $value = $object->getData($this->getAttribute()->getAttributeCode());

        return "<b>$value</b>";
    }
}
