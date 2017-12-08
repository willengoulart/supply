<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $endereco_id
 * @property float $valor_total
 * @property \Cake\I18n\FrozenTime $date
 * @property string $codigo_transacao
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Endereco $endereco
 */
class Venda extends Entity
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
        'cliente_id' => true,
        'endereco_id' => true,
        'valor_total' => true,
        'date' => true,
        'codigo_transacao' => true,
        'cliente' => true,
        'endereco' => true
    ];
}
