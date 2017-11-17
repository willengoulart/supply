<?php
use Migrations\AbstractMigration;

class CreateVendas extends AbstractMigration
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
        $table = $this->table('vendas');
        $table->addColumn('cliente_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('endereco_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('valor_total', 'decimal', [
        	'precision'=>10,
        	'scale'=>2,
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('codigo_transacao', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
