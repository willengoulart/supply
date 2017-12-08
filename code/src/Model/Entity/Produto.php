<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $nome
 * @property float $preco
 * @property int $qtdEstoque
 * @property int $promocoes_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Promoco $promoco
 */
class Produto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'categoria_id' => true,
        'nome' => true,
        'preco' => true,
        'qtdEstoque' => true,
        'promocoes_id' => true,
        'categoria' => true,
        'promoco' => true,
    	'descricao' => true
    ];
}
