<?php

namespace Perspective\Them15ex2p2\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddTextAttribute implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    private $moduleDataSetup;

    /** @var EavSetupFactory */
    private $eavSetupFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(

        ModuleDataSetupInterface $moduleDataSetup,

        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);


        $eavSetup->addAttribute('catalog_product', 'air_freight_only', [
            'group' => 'General',
            'type' => 'varchar',
            'label' => 'air freight only',
            'input' => 'select',
            'source' => 'Perspective\Them15ex2p2\Model\Attribute\Source\Material',
            'frontend' => 'Perspective\Them15ex2p2\Model\Attribute\Frontend\Material',
            'backend' => 'Perspective\Them15ex2p2\Model\Attribute\Backend\Material',
            'required' => false,
            'sort_order' => 50,
            'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
            'is_used_in_grid' => false,
            'is_visible_in_grid' => false,
            'is_filterable_in_grid' => false,
            'visible' => true,
            'is_html_allowed_on_front' => true,
            'visible_on_front' => true

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {

        return [];
    }
}
