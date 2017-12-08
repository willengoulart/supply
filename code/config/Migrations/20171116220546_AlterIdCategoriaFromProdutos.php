<?php
use Migrations\AbstractMigration;

class AlterIdCategoriaFromProdutos extends AbstractMigration
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
        $table = $this->table('produtos');
        $table->renameColumn('id_categoria', 'categoria_id');
        $table->renameColumn('id_promocoes', 'promocoes_id');
        $table->update();
    }
}
