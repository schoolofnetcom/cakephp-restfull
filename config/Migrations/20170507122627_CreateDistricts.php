<?php
use Migrations\AbstractMigration;

class CreateDistricts extends AbstractMigration
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
        $table = $this->table('districts');
        $table->addColumn('title', 'string');
        $table->create();
    }
}
