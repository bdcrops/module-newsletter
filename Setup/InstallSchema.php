<?php

namespace BDC\Newsletter\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
    $setup->startSetup();
    $table = $setup->getTable('newsletter_subscriber');
    $setup->getConnection()->addColumn(
      $table,'c_firstname',[
        'type' => Table::TYPE_TEXT,
        'nullable' => true,
        'comment' => 'First Name'
      ]
    );
    $setup->getConnection()->addColumn(
      $table, 'c_lastname', [
        'type' => Table::TYPE_TEXT,
        'nullable' => true,
        'comment' => 'Last Name'
      ]
    );
    $setup->getConnection()->addColumn(
      $table, 'gender', [
        'type' => Table::TYPE_INTEGER,
        'nullable' => true,
        'comment' => 'Gender'
      ]
    );

    $setup->endSetup();
  }
}
