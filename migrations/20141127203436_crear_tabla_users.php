<?php

use Phinx\Migration\AbstractMigration;

class CrearTablaUsers extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('users');
        if(!$this->hasTable('users')) {
            $table->addColumn('username', 'string', array('length'=>11));
            $table->addColumn('password', 'string', array('length'=>11));
            $table->create();
        }
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        if($this->hasTable('users')) {
            $this->dropTable('users');
        }
    }
}