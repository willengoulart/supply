<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $cnpj
 * @property string $nome
 * @property string $email
 * @property string $senha
 *
 * @property \App\Model\Entity\Venda[] $vendas
 * @property \App\Model\Entity\Endereco[] $enderecos
 */
class Cliente extends Entity
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
        'cnpj' => true,
        'nome' => true,
        'email' => true,
        'senha' => true,
        'vendas' => true,
        'enderecos' => true
    ];
}
