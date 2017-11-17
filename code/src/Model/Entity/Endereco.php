<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $logradouro
 * @property int $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $cep
 * @property string $complemento
 * @property string $estado
 *
 * @property \App\Model\Entity\Venda[] $vendas
 * @property \App\Model\Entity\Cliente[] $clientes
 */
class Endereco extends Entity
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
        'logradouro' => true,
        'numero' => true,
        'bairro' => true,
        'cidade' => true,
        'cep' => true,
        'complemento' => true,
        'estado' => true,
        'vendas' => true,
        'clientes' => true
    ];
}
