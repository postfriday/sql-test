<?php


use Phinx\Migration\AbstractMigration;

class CreateItemsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('items');
        $table->addColumn('category_id', 'integer', ['limit' => 11, 'signed' => false, 'default' => 0, 'null' => false])
            ->addColumn('name', 'string', ['limit' => 50, 'default' => '', 'null' => false])
            ->addColumn('price', 'decimal', ['precision' => 10, 'scale' => 2, 'signed' => false, 'default' => 0, 'null' => false])
            ->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->addColumn('updated', 'datetime', ['null' => true])
            ->create();
    }
}
