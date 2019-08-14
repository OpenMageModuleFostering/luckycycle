<?php
$installer = $this;
$installer->startSetup();

/**
 * Create Luckycyle_snippetsdk Table
 */
/*$tableName = $installer->getTable('snippetsdk/luckycycle');
// Check if the table already exists
//if ($installer->getConnection()->isTableExists($tableName) != true) {
    $table = $installer->getConnection()
        ->newTable($installer->getTable('snippetsdk/luckycycle'))
        ->addColumn('id_poke', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,

        ), 'Poke Id')
        ->addColumn('hash', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
            'nullable'  => true
        ), 'Hash')
        ->addColumn('banner_url', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
            'nullable'  => true
        ), 'Banner Url')
        ->addColumn('type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255,
            array(
                'nullable' => true,
            ),
            'Type')
        ->addColumn('id_customer', Varien_Db_Ddl_Table::TYPE_INTEGER, null,
            array(
                'nullable' => true,
            ),
            'Customer Id')
        ->addColumn('id_order', Varien_Db_Ddl_Table::TYPE_INTEGER, null,
            array(
                'nullable' => true,
            ),
            'Order Id')
        ->addColumn('create_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null,
            array(
                'nullable' => true,
            ),
            'Create At')
        ->addColumn('operation_id', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255,
            array(
                'nullable' => true,
            ),
            'Operation Id')
        ->addColumn('total_played', Varien_Db_Ddl_Table::TYPE_INTEGER, null,
            array(
                'nullable' => true,
            ),
            'Total Played');

    $installer->getConnection()->createTable($table);
//}*/

$installer->run("
    CREATE TABLE `{$installer->getTable('snippetsdk/luckycycle')}` (
      `id_poke` int(11) NOT NULL auto_increment,
      `hash` varchar(255),
      `banner_url` varchar(255) ,
      `type` varchar(255) ,
      `id_customer` varchar(255),
      `id_order` varchar(255),
      `create_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
      `operation_id` varchar(255),
      `total_played` float,
      PRIMARY KEY  (`id_poke`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");


$installer->endSetup();