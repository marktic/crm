<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateCrmContractsTable extends AbstractMigration
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
        $table_name = 'mkt_crm_contracts';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['primary_key' => 'id', 'id' => false])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('tenant_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('subject_id', 'biginteger', ['null' => false, 'signed' => false])
            ->addColumn('contract_number', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('title', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('status', 'string', ['limit' => 50, 'null' => false, 'default' => 'draft'])
            ->addColumn('start_date', 'date', ['null' => true])
            ->addColumn('end_date', 'date', ['null' => true])
            ->addColumn('value', 'decimal', ['precision' => 15, 'scale' => 2, 'null' => true])
            ->addColumn('currency', 'string', ['limit' => 3, 'null' => true, 'default' => 'USD'])
            ->addColumn('notes', 'text', ['null' => true])
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
            ->addIndex(['contract_number'], ['unique' => true])
            ->addIndex(['status'])
            ->addIndex(['start_date', 'end_date'])
            ->create();
    }
}
