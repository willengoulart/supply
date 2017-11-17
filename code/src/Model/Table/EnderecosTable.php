<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @property \App\Model\Table\VendasTable|\Cake\ORM\Association\HasMany $Vendas
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsToMany $Clientes
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null, $options = [])
 */
class EnderecosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('enderecos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Vendas', [
            'foreignKey' => 'endereco_id'
        ]);
        $this->belongsToMany('Clientes', [
            'foreignKey' => 'endereco_id',
            'targetForeignKey' => 'cliente_id',
            'joinTable' => 'clientes_enderecos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('logradouro')
            ->requirePresence('logradouro', 'create')
            ->notEmpty('logradouro');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->scalar('bairro')
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('cidade')
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('cep')
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('complemento')
            ->requirePresence('complemento', 'create')
            ->notEmpty('complemento');

        $validator
            ->scalar('estado')
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }
}
