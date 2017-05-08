<?php
use Migrations\AbstractMigration;

class CreateProperties extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('properties');
        $table->addColumn('title', 'string');
        $table->addColumn('description', 'text');
        $table->addColumn('value', 'decimal', [
            'precision'=>11,
            'scale'=>2
        ]);
        $table->addColumn('type_id', 'integer');
        $table->addColumn('district_id', 'integer');
        $table->create();
    }
}
