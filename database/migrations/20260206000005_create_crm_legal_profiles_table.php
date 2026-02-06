<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateCrmLegalProfilesTable extends AbstractMigration
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
        $table_name = 'mkt_crm_legal_profiles';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['primary_key' => 'id', 'id' => false])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('tenant_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('subject_id', 'biginteger', ['null' => false, 'signed' => false])
            ->addColumn('fiscal_code', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('legal_representative', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('company_name', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('registration_number', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('vat_number', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('legal_form', 'string', ['limit' => 100, 'null' => true])
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
            ->addIndex(['fiscal_code'])
            ->create();
    }
}
