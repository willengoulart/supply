<?php
use Migrations\AbstractMigration;

class CreatePromocoes extends AbstractMigration
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
        $table = $this->table('promocoes');
        $table->addColumn('preco', 'decimal', [
        	'precision'=>10,
        	'scale'=>2,
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('data_inicio', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('data_fim', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
