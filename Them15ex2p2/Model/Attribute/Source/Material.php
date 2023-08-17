<?php
namespace Perspective\Them15ex2p2\Model\Attribute\Source;

class Material extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('None'), 'value' => 'none'],
                ['label' => __('Balloon'), 'value' => 'balloon'],
                ['label' => __('Charter_plane'), 'value' => 'charter plane'],
                ['label' => __('High-speed_plane'), 'value' => 'high-speed plane'],
                ['label' => __('Spaceship'), 'value' => 'spaceship'],
            ];
        }
        return $this->_options;
    }
}