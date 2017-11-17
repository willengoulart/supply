<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promoco Entity
 *
 * @property int $id
 * @property float $preco
 * @property \Cake\I18n\FrozenTime $data_inicio
 * @property \Cake\I18n\FrozenTime $data_fim
 */
class Promoco extends Entity
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
        'preco' => true,
        'data_inicio' => true,
        'data_fim' => true
    ];
}
