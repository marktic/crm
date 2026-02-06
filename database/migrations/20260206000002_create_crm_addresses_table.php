<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateCrmAddressesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table_name = 'mkt_crm_addresses';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['primary_key' => 'id', 'id' => false])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('tenant_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('subject_id', 'biginteger', ['null' => false, 'signed' => false])
            ->addColumn('type', 'string', ['limit' => 50, 'null' => true, 'comment' => 'billing, shipping, home, work, etc.'])
            ->addColumn('address_line1', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('address_line2', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('city', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('state', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('postal_code', 'string', ['limit' => 20, 'null' => true])
            ->addColumn('country', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('is_primary', 'boolean', ['default' => false])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
            ])
            ->addIndex(['tenant_id'])
            ->addIndex(['subject_id'])
            ->addIndex(['tenant_id', 'subject_id'])
            ->addIndex(['type'])
            ->addIndex(['is_primary'])
            ->create();
    }
}
