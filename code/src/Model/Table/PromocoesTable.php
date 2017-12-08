<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Promocoes Model
 *
 * @method \App\Model\Entity\Promoco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Promoco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Promoco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promoco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promoco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Promoco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promoco findOrCreate($search, callable $callback = null, $options = [])
 */
class PromocoesTable extends Table
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

        $this->setTable('promocoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->decimal('preco')
            ->requirePresence('preco', 'create')
            ->notEmpty('preco');

        $validator
            ->dateTime('data_inicio')
            ->requirePresence('data_inicio', 'create')
            ->notEmpty('data_inicio');

        $validator
            ->dateTime('data_fim')
            ->requirePresence('data_fim', 'create')
            ->notEmpty('data_fim');

        return $validator;
    }
}
